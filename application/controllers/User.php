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
	public function pengajuan()
	{
		$data['judul'] = 'Pengajuan Layanan | SIAP UINSGD';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/usernav');
		$this->load->view('user/pengajuan', $data);
		$this->load->view('templates/footer');
	}

	/*============================================================================================================================================================================================================================*/

	public function daftar_mahasiswa()
	{

		$data = array(
			'judul' => 'Daftar Email Mahasiswa | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'divisi' => $this->crud_model->get_divisi(),
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

			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Mahasiswa Mendaftar Email ! Cek <a class="btn btn-primary" href="localhost/ci/admin/dm">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}


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
			'divisi' => $this->crud_model->get_divisi(),
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

			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Mahasiswa Mereset Password Email ! Cek <a class="btn btn-primary" href="localhost/ci/admin/rm">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}

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
			'divisi' => $this->crud_model->get_divisi(),
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
			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Dosen Mendaftar Email ! Cek <a class="btn btn-primary" href="localhost/ci/admin/dd">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}


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
			'divisi' => $this->crud_model->get_divisi(),
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
			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Dosen Mereset Email ! Cek <a class="btn btn-primary" href="localhost/ci/admin/rd">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}


			$this->session->set_flashdata('rd', 'Reset Password Email Dosen');
			redirect('user/reset_dosen');
		}
	}

	public function daftar_lembaga()
	{
		$data = array(
			'judul' => 'Daftar Email Lembaga | SIAP UINSGD',
			'unit' => $this->crud_model->gettu(),
			'divisi' => $this->crud_model->get_divisi()
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
			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Lembaga Mendaftar Email ! Cek <a class="btn btn-primary" href="localhost/ci/admin/dl">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}

			$this->session->set_flashdata('dl', 'Pendaftaran Email Lembaga');
			redirect('user/daftar_lembaga');
		}
	}

	public function reset_lembaga()
	{
		$data = array(
			'judul' => 'Reset Password Email Lembaga | SIAP UINSGD',
			'unit' => $this->crud_model->gettu(),
			'divisi' => $this->crud_model->get_divisi()
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
			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Lembaga Mereset Password Email ! Cek <a class="btn btn-primary" href="localhost/ci/admin/rl">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}

			$this->session->set_flashdata('rl', 'Reset Password Email Lembaga');
			redirect('user/reset_lembaga');
		}
	}

	public function keluhan()
	{
		$data = array(
			'judul' => 'Formulir Keluhan | SIAP UINSGD',
			'perihal' => $this->crud_model->get_pk(),
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'divisi' => $this->crud_model->get_divisi2(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
			'divisi_selected' => '',
			'perihal_selected' => ''
		);

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('keluhan', 'Deskripsi Keluhan', 'required');
		// $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		// $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		// $this->form_validation->set_rules('unit', 'Unit', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal Keluhan', 'required');
		$this->form_validation->set_rules('divisi', 'Divisi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/usernav');
			$this->load->view('user/keluhan');
			$this->load->view('templates/footer');
		} else {
			$this->crud_model->keluh();
			$this->session->set_flashdata('k', 'Formulir Keluhan');
			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			if ($this->input->post('divisi') == "Pangkalan Data") {
				$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu
			} elseif ($this->input->post('divisi') == "Infrastruktur & Jaringan") {
				$this->email->to('tesaplikasici@gmail.com'); // Ganti dengan email tujuan kamu
			} elseif ($this->input->post('divisi') == "Pengembangan Aplikasi") {
				$this->email->to('assalaamsmk@gmail.com'); // Ganti dengan email tujuan kamu
			} elseif ($this->input->post('divisi') == "Layanan & Administrasi Umum") {
				$this->email->to('tesaplikasici@gmail.com'); // Ganti dengan email tujuan kamu
			} elseif ($this->input->post('divisi') == "Monitoring & Security") {
				$this->email->to('tesaplikasici@gmail.com'); // Ganti dengan email tujuan kamu
			}


			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email

			$this->email->message('Formulir Keluhan Masuk ! Cek <a class="btn btn-primary" href="localhost/ci/admin/k">Disini</a>');


			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}
			redirect('user/keluhan');
		}
	}

	public function ganti_server()
	{
		$data = array(
			'judul' => 'Permohonan Pergantian Server Data Center | SIAP UINSGD',
			'divisi' => $this->crud_model->get_divisi()
		);
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
			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Permohonan Ganti Server ! Cek <a class="btn btn-primary" href="localhost/ci/admin/gs">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}

			$this->session->set_flashdata('gs', 'Formulir Pergantian Server Data Center');
			redirect('user/ganti_server');
		}
	}

	public function kunjungan_dc()
	{
		$data = array(
			'judul' => 'Kunjungan Data Center | SIAP UINSGD',
			'divisi' => $this->crud_model->get_divisi()
		);
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
			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Kunjungan Data Center ! Cek <a class="btn btn-primary" href="localhost/ci/admin/dc">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}

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

			// Konfigurasi email
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'mailadmin1@uinsgd.ac.id',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'sindoro2017',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('pelayanan@uinsgd.ac.id', 'Pelayanan | UINSGD');

			// Email penerima
			$this->email->to('rianjh2@gmail.com'); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject($data['judul']);

			// Isi email
			$this->email->message('Permohonan Jaringan Baru ! Cek <a class="btn btn-primary" href="localhost/ci/admin/jb">Disini</a>');

			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				echo 'Gagal!';
			}

			$this->session->set_flashdata('jb', 'Formulir Kunjungan Data Center');
			redirect('user/jaringan_baru');
		}
	}
}
