<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function login()
	{
		if ($this->input->post()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($username == 'admin' && $password == 'admin') {
				// $_SESSION['username'] = 'admin';
				$this->session->set_userdata('username', 'admin');
				redirect('v1/blog');
			} else {
				// $this->session->set_flashdata('message', 'Username atau password salah');
				$this->session->set_flashdata('message', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username atau password tidak valid 
					</div>');
				redirect('v1/authentication/login');
			}
		}
		$this->load->view('authentication/login');
	}

	public function logoout()
	{
		if ($this->session->userdata('username')) {
			$this->session->sess_destroy();
			redirect('/');
		} else {
			$this->session->set_flashdata('error', 'Tidak bisa logout, Anda harus login terlebih dahulu');
			redirect('v1/authentication/login');
		}
	}
}
