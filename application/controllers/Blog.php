<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// NOTE: jika ingin digunakan di controller maka di set di construct
		// TODO: di comment karena sudah di set di config/autoload.php

		// $this->load->helper('url');
		// $this->load->helper('form');

		// NOTE: termasuk library, karena di set di config/autoload.php "$autoload['libraries']"
		// $this->load->database();
		// $this->load->database('neondb');
		// $this->load->library('session'); // <-- BENAR
		// $this->load->library('form_validation');

		$this->load->model('Blog_model');
	}

	#public function index($name, $gender, $umur)
	public function index()
	{
		// TODO: Menggunakan parameter
		/* 
			echo "Ini adalah halaman blog dengan rincian: <br>";
			echo "Nama: " . $name . "<br>";
			echo "Inisial: " . $gender . "<br>";
			echo "Umur: " . $umur . " Tahun <br>";
		*/

		// TODO: Menggunakan array sebagai data yang dikirim
		/* 
			$data = [
				'name' => $name,
				'gender' => $gender,
				'umur' => $umur
			];
		*/

		// TODO: Menggunakan database
		// NOTE: Menggunakan koneksi default. $db['default']
		/* 
			$this->load->database();
			$query = $this->db->query("SELECT * FROM blog");
		*/

		// NOTE: $db['review_codeigniter3'] -> Menjadikannya koneksi utama
		/* 
			$this->load->database('review_codeigniter3');
			$query = $this->db->query("SELECT * FROM blog");
		*/

		// NOTE: $db['review_codeigniter3'] -> Menggunakan format terpisah
		# Simpan objek database yang dikembalikan ke dalam variabel baru, misal: $DB_REVIEW
		// $DB_REVIEW = $this->load->database('review_codeigniter3', TRUE);
		// NOTE: use query(): gunakan variabel baru tersebut untuk menjalankan query
		// $query = $DB_REVIEW->query("SELECT * FROM blog");
		// NOTE: use ELEQUENT CI3: gunakan variabel baru tersebut untuk menjalankan last ELEQUENT
		// $DB_REVIEW->select();
		// $DB_REVIEW->from('blog');
		// $query = $DB_REVIEW->get();

		// NOTE: menggunakan this->db
		// $this->db->select();
		// $this->db->from('blog');
		// $query = $this->db->get();

		// NOTE: Menggunakan Model
		$query = $this->Blog_model->getBlogs();

		// NOTE: Menggunakan format array
		$data['blogs'] = $query->result_array();
		// NOTE: Menggunakan format object
		# $data['blogs'] = $query->result();

		// print_r($data);
		// NOTE: Menggunakan mengambil 1 data saja
		// print_r($query->row());
		# Menggunakan array
		# print_r($query->row_array());

		//TODO: load view dan passing data
		$this->load->view('blog/index', $data);
	}

	public function show(int $id)
	{
		// $DB_REVIEW = $this->load->database('review_codeigniter3', TRUE);

		// $DB_REVIEW->select();
		// $DB_REVIEW->from('blog');
		// $DB_REVIEW->where('id', $id);
		// $query = $DB_REVIEW->get();

		// NOTE: Menggunakan Model
		$query = $this->Blog_model->getSingleBlog('id', $id);

		$data['blog'] = $query->row_array();

		// print_r($query->row());

		$this->load->view('blog/show', $data);
	}

	public function create()
	{
		$this->load->view('blog/create');
	}

	public function store()
	{
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[30]');
		$this->form_validation->set_rules('url', 'URL', 'alpha_dash|required|min_length[3]|max_length[100]|is_unique[blog.url]');

		// if ($this->input->post()) {
		if ($this->form_validation->run() === TRUE) {
			$config['upload_path'] = './assets/assets/covers/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 2010; // 100KB (Mungkin terlalu kecil?)
			// $config['max_width'] = 1024;
			// $config['max_height'] = 768;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('cover')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				$this->create();
			} else {
				$data = [
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
					'url' => $this->input->post('url'),
					// 'date' => $this->input->post('date'),
				];
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$data['cover'] = $file_name;

				$create = $this->Blog_model->createBlog($data);

				if ($create) {
					$this->session->set_flashdata('success', 'Blog ' . $data['title'] . ' berhasil di tambahkan');
				} else {
					$this->session->set_flashdata('error', 'Blog gagal di tambahkan (Database Error)');
				}

				redirect('v1/blog');
			}
		} else {
			$this->create();
		}
	}


	public function edit($id)
	{
		$query = $this->Blog_model->getSingleBlog('id', $id);
		$data['blog'] = $query->row_array();
		$this->load->view('blog/edit', $data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[30]');
		// NOTE: Menggunakan callback, "callback_nama_fungsi" ini digunakan untuk membuat validasi kita sendiri
		$this->form_validation->set_rules('url', 'URL', 'required|alpha_dash|min_length[3]|max_length[100]|callback__check_unique_url[' . $id . ']');

		$config['upload_path'] = './assets/assets/covers/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2010;

		$this->load->library('upload', $config);

		// if ($this->input->post()) {
		if ($this->form_validation->run() === TRUE) {
			$data = [
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'url' => $this->input->post('url'),
				'cover' => $this->input->post('old_cover'),
			];

			if (empty($_FILES['cover']['name'])) {
				$data['cover'] = $this->input->post('old_cover');
			} else {
				if (!$this->upload->do_upload('cover')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					$this->edit($id);
					return;
				} else {
					$upload_data = $this->upload->data();
					$file_name = $upload_data['file_name'];

					// NOTE: Menghapus file lama
					$old_file_path = $config['upload_path'] . $data['cover'];
					if (file_exists($old_file_path) && is_file($old_file_path)) {
						unlink($old_file_path);
					}

					$data['cover'] = $file_name;
				}
			}

			$update = $this->Blog_model->updateBlog($id, $data);
			if ($update) {
				$this->session->set_flashdata('success', 'Blog ' . $data['title'] . ' berhasil di perbaharui');
			} else {
				$this->session->set_flashdata('error', 'Blog gagal di perbaharui');
			}
			redirect('v1/blog');
		}
		$this->edit($id);
	}

	// TODO: Callback validasi URL custom, yang di panggil di form validation function update()
	public function _check_unique_url($url, $id)
	{
		$this->db->where('url', $url);
		$this->db->where('id !=', $id);
		$exists = $this->db->get('blog')->row();

		if ($exists) {
			$this->form_validation->set_message('_check_unique_url', 'URL sudah digunakan oleh posting lain.');
			return FALSE;
		}
		return TRUE;
	}

	public function destroy($id)
	{
		$delete = $this->Blog_model->deleteBlog($id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Blog berhasil di hapus');
		} else {
			$this->session->set_flashdata('error', 'Blog gagal di hapus');
		}
		redirect('v1/blog');
	}
}
