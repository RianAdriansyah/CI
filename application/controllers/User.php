<?php

/**
 * 
 */
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Home | SIAP UINSGD';
		$this->load->view('templates/header', $data);
		$this->load->view('user/index');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['judul'] = 'About Us | SIAP UINSGD';
		$this->load->view('templates/header', $data);
		$this->load->view('user/about');
		$this->load->view('templates/footer');
	}

	public function pendaftaran()
	{
		$data['judul'] = 'Pendaftaran | SIAP UINSGD';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/usernav');
		$this->load->view('user/pendaftaran', $data);
		$this->load->view('templates/footer');
	}

	/*============================================================================================================================================================================================================================*/

	public function daftar_mahasiswa()
	{

		$data = array(
			'judul' => 'Daftar Email Mahasiswa | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'fakultas_selected' => '',
			'jurusan_selected' => ''
		);

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/daftar_mahasiswa', $data);
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->daftarm();
			$this->session->set_flashdata('dm', 'Pendaftaran Email Mahasiswa');
			redirect('user/daftar_mahasiswa');
		}
	}

	public function reset_mahasiswa()
	{
		$data = array(
			'judul' => 'Reset Password Email Mahasiswa | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/reset_mahasiswa', $data);
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->resetm();
			$this->session->set_flashdata('rm', 'Reset Password Email Mahasiswa');
			redirect('user/reset_mahasiswa');
		}
	}

	public function daftar_dosen()
	{
		$data = array(
			'judul' => 'Daftar Email Dosen | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|max_length[18]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email1', 'Email Yang Ingin Diajukan', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('email2', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/daftar_dosen');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->daftard();
			$this->session->set_flashdata('dd', 'Pendaftaran Email Dosen');
			redirect('user/daftar_dosen');
		}
	}

	public function reset_dosen()
	{
		$data = array(
			'judul' => 'Reset Password Email Dosen | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|max_length[18]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email1', 'Email Yang Ingin Diajukan', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('email2', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/reset_dosen');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->resetd();
			$this->session->set_flashdata('rd', 'Reset Password Email Dosen');
			redirect('user/reset_dosen');
		}
	}

	public function daftar_lembaga()
	{
		$data = array(
			'judul' => 'Daftar Email Lembaga | SIAP UINSGD',
			'unit' => $this->crud_model->gettu()
		);

		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required|max_length[100]');
		$this->form_validation->set_rules('nama_penanggung', 'Nama Penanggung Jawab', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('unit', 'Unit', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/daftar_lembaga');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->daftarl();
			$this->session->set_flashdata('dl', 'Pendaftaran Email Lembaga');
			redirect('user/daftar_lembaga');
		}
	}

	public function reset_lembaga()
	{
		$data = array(
			'judul' => 'Reset Password Email Lembaga | SIAP UINSGD',
			'unit' => $this->crud_model->gettu()
		);

		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required|max_length[100]');
		$this->form_validation->set_rules('nama_penanggung', 'Nama Penanggung Jawab', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('unit', 'Unit', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/reset_lembaga');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->resetl();
			$this->session->set_flashdata('rl', 'Reset Password Email Lembaga');
			redirect('user/reset_lembaga');
		}
	}

	public function keluhan()
	{
		$data = array(
			'judul' => 'Formulir Keluhan | SIAP UINSGD',
			'perihal' => $this->crud_model->gettpk(),
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => ''
		);

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('keluhan', 'Deskripsi Keluhan', 'required');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal Keluhan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/keluhan');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->keluh();
			$this->session->set_flashdata('k', 'Formulir Keluhan');
			redirect('user/keluhan');
		}
	}

	public function ganti_server()
	{
		$data['judul'] = 'Formulir Pergantian Server Data Center | SIAP UINSGD';

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/ganti_server');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->ganti_server();
			$this->session->set_flashdata('gs', 'Formulir Pergantian Server Data Center');
			redirect('user/ganti_server');
		}
	}

	public function kunjungan_dc()
	{
		$data['judul'] = 'Formulir Kunjungan Data Center | SIAP UINSGD';

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/kunjungan_dc');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->kunjungan_dc();
			$this->session->set_flashdata('dc', 'Formulir Kunjungan Data Center');
			redirect('user/kunjungan_dc');
		}
	}

	public function jaringan_baru()
	{
		$data['judul'] = 'Formulir Permohonan Pemasangan Jaringan Baru | SIAP UINSGD';

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/jaringan_baru');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->jaringan_baru();
			$this->session->set_flashdata('jb', 'Formulir Kunjungan Data Center');
			redirect('user/jaringan_baru');
		}
	}
}
