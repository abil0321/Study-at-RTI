<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function index($name, $gender, $umur)
	{
		#TODO: Menggunakan parameter
		// echo "Ini adalah halaman blog dengan rincian: <br>";
		// echo "Nama: " . $name . "<br>";
		// echo "Inisial: " . $gender . "<br>";
		// echo "Umur: " . $umur . " Tahun <br>";

		#TODO: Menggunakan array sebagai data yang dikirim
		// $data = [
		// 	'name' => $name,
		// 	'gender' => $gender,
		// 	'umur' => $umur
		// ];

		#TODO: Menggunakan database

		#NOTE: Menggunakan koneksi default. $db['default']
		// $this->load->database();
		// $query = $this->db->query("SELECT * FROM blog");

		#NOTE: $db['review_codeigniter3'] -> Menjadikannya koneksi utama
		// $this->load->database('review_codeigniter3');
		// $query = $this->db->query("SELECT * FROM blog");

		#NOTE: $db['review_codeigniter3'] -> Menggunakan format terpisah
		// Simpan objek database yang dikembalikan ke dalam variabel baru, misal: $DB_REVIEW
		$DB_REVIEW = $this->load->database('review_codeigniter3', TRUE);
		// Gunakan variabel baru tersebut untuk menjalankan query
		$query = $DB_REVIEW->query("SELECT * FROM blog");

		#NOTE: Menggunakan format array
		$data['blogs'] = $query->result_array();
		#NOTE: Menggunakan format object
		// $data['blogs'] = $query->result();

		print_r($data);

		#TODO: load view dan passing data
		$this->load->view('blog/index', $data);
	}
}
