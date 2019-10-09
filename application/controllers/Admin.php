<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper(array('url'));
		require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
	}

	public function index()
	{
		if ($this->session->userdata('user')) {
			redirect('admin/dashboard');
		}
		$data['judul'] = 'Admin Login | SIAP UINSGD';

		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('admin/index');
			$this->load->view('templates/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$admin = $this->db->get_where('admin', ['user' => $user])->row_array();

		if ($admin) {
			if ($admin['user'] == $user && $admin['pass'] == $pass) {
				$data = [
					'user' => $admin['user'],
					'nama' => $admin['nama'],
					'level' => $admin['level']
				];
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('02', '<div class="alert alert-danger" role="alert">Password dan Username tidak cocok!</div>');
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('01', '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>');
			redirect('admin');
		}
	}

	public function dashboard()
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$config['total_dm'] = $this->db->from('daftar_email_mahasiswa')->count_all_results();
		$config['total_dd'] = $this->db->from('daftar_email_dosen')->count_all_results();
		$config['total_dl'] = $this->db->from('daftar_email_lembaga')->count_all_results();
		$config['total_rm'] = $this->db->from('reset_password_mahasiswa')->count_all_results();
		$config['total_rd'] = $this->db->from('reset_password_dosen')->count_all_results();
		$config['total_rl'] = $this->db->from('reset_password_lembaga')->count_all_results();
		$config['total_k'] = $this->db->from('keluhan')->count_all_results();
		$config['total_gs'] = $this->db->from('ganti_server')->count_all_results();
		$config['total_dc'] = $this->db->from('kunjungan_dc')->count_all_results();
		$config['total_jb'] = $this->db->from('jaringan_baru')->count_all_results();

		$data['total_dm'] = $config['total_dm'];
		$data['total_dd'] = $config['total_dd'];
		$data['total_dl'] = $config['total_dl'];
		$data['total_rm'] = $config['total_rm'];
		$data['total_rd'] = $config['total_rd'];
		$data['total_rl'] = $config['total_rl'];
		$data['total_k'] = $config['total_k'];
		$data['total_gs'] = $config['total_gs'];
		$data['total_dc'] = $config['total_dc'];
		$data['total_jb'] = $config['total_jb'];

		$data['judul'] = 'Dashboard | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/afooter');
	}

	public function profile()
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'My Profile | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/profile');
		$this->load->view('templates/afooter');
	}

	public function about()
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'About Us | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/about');
		$this->load->view('templates/afooter');
	}

	public function logout()
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('sess_m');
		$this->session->unset_userdata('sess_y');
		$this->session->unset_userdata('sess_ms');
		$this->session->set_flashdata('03', '<div class="alert alert-success" role="alert">Anda berhasil logout!</div>');
		redirect('admin');
	}

	/*============================================================================================================================================================================================================================*/

	public function dm()
	{

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('nim', $data['keyword']);
		$this->db->or_like('fakultas', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->or_like('jurusan', $data['keyword']);
		$this->db->or_like('unit', $data['keyword']);
		$config['base_url'] = 'http://localhost/ci/admin/dm';
		$config['total_rows'] = $this->db->from('daftar_email_mahasiswa')->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dm'] = $this->crud_model->getdm2($data['start'], $data['keyword']);

		$data['judul'] = 'Pendaftaran Email Mahasiswa | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/dm', $data);
		$this->load->view('templates/afooter');
	}

	public function te()
	{

		$data = array(
			'judul' => 'Daftar Email Mahasiswa | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Tambah Email Mahasiswa | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/te', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->daftarm();
			$this->session->set_flashdata('te', 'Pendaftaran Email Mahasiswa');
			redirect('admin/dm');
		}
	}

	public function rm()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('nim', $data['keyword']);
		$this->db->or_like('fakultas', $data['keyword']);
		$this->db->or_like('unit', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('reset_password_mahasiswa');
		$config['base_url'] = 'http://localhost/ci/admin/rm';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['rm'] = $this->crud_model->getrm2($data['start'], $data['keyword']);

		$data['judul'] = 'Reset Password Email Mahasiswa | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/rm', $data);
		$this->load->view('templates/afooter');
	}

	public function trm()
	{

		$data = array(
			'judul' => 'Reset Password Mahasiswa | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Tambah Form Reset Password Mahasiswa | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/trm', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->resetm();
			$this->session->set_flashdata('trm', 'Form Reset Password Mahasiswa');
			redirect('admin/rm');
		}
	}

	public function dd()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('nip', $data['keyword']);
		$this->db->or_like('fakultas', $data['keyword']);
		$this->db->or_like('unit', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('daftar_email_dosen');
		$config['base_url'] = 'http://localhost/ci/admin/dd';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dd'] = $this->crud_model->getdd2($data['start'], $data['keyword']);

		$data['judul'] = 'Pendaftaran Email Dosen | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/dd', $data);
		$this->load->view('templates/afooter');
	}

	public function td()
	{
		$data = array(
			'judul' => 'Daftar Email Dosen | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Tambah Email Dosen | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|max_length[18]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email1', 'Email Yang Ingin Diajukan', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('email2', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/td', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->daftard();
			$this->session->set_flashdata('td', 'Pendaftaran Email Dosen');
			redirect('admin/dd');
		}
	}

	public function trd()
	{

		$data = array(
			'judul' => 'Formulir Reset Password Email Dosen | SIAP UINSGD',
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Formulir Reset Password Email Dosen | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|max_length[18]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email1', 'Email Yang Ingin Diajukan', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('email2', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/trd', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->resetd();
			$this->session->set_flashdata('trd', 'Reset Pasword Email Dosen');
			redirect('admin/rd');
		}
	}

	public function rd()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('nip', $data['keyword']);
		$this->db->or_like('fakultas', $data['keyword']);
		$this->db->or_like('unit', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('reset_password_dosen');
		$config['base_url'] = 'http://localhost/ci/admin/rd';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['rd'] = $this->crud_model->getrd2($data['start'], $data['keyword']);

		$data['judul'] = 'Reset Password Email Dosen | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/rd', $data);
		$this->load->view('templates/afooter');
	}

	public function dl()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama_lembaga', $data['keyword']);
		$this->db->or_like('nama_penanggung', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('daftar_email_lembaga');
		$config['base_url'] = 'http://localhost/ci/admin/dl';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dl'] = $this->crud_model->getdl2($config['per_page'], $data['start'], $data['keyword']);

		$data['judul'] = 'Pendaftaran Email Lembaga | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/dl', $data);
		$this->load->view('templates/afooter');
	}

	public function trl()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Formulir Reset Password Email Lembaga | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required|max_length[100]');
		$this->form_validation->set_rules('nama_penanggung', 'Nama Penanggung Jawab', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/trl', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->resetl();
			$this->session->set_flashdata('trl', 'Reset Pasword Email Lembaga');
			redirect('admin/rl');
		}
	}

	public function tl()
	{

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Tambah Email Lembaga | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required|max_length[100]');
		$this->form_validation->set_rules('nama_penanggung', 'Nama Penanggung Jawab', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tl', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->daftarl();
			$this->session->set_flashdata('tl', 'Pendaftaran Email Lembaga');
			redirect('admin/dl');
		}
	}

	public function rl()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama_lembaga', $data['keyword']);
		$this->db->or_like('nama_penanggung', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('reset_password_lembaga');
		$config['base_url'] = 'http://localhost/ci/admin/rl';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['rl'] = $this->crud_model->getrl2($data['start'], $data['keyword']);

		$data['judul'] = 'Reset Password Email Lembaga | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/rl', $data);
		$this->load->view('templates/afooter');
	}

	public function k()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('ni', $data['keyword']);
		$this->db->or_like('fakultas', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('perihal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('keluhan');

		$config['base_url'] = 'http://localhost/ci/admin/k';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['k'] = $this->crud_model->getk2($data['start'], $data['keyword']);

		$data['judul'] = 'Keluhan | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/k', $data);
		$this->load->view('templates/afooter');
	}

	public function tk()
	{

		$data = array(
			'judul' => 'Formulir Keluhan | SIAP UINSGD',
			'perihal' => $this->crud_model->gettpk(),
			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Tambah Form Formulir Keluhan | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('keluhan', 'Deskripsi Keluhan', 'required');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal Keluhan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tk', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->keluh();
			$this->session->set_flashdata('tk', 'Form Keluhan');
			redirect('admin/k');
		}
	}

	public function gs()
	{
		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}


		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('ni', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('ganti_server');
		$config['base_url'] = 'http://localhost/ci/admin/gs';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['gs'] = $this->crud_model->getgs2($data['start'], $data['keyword']);

		$data['judul'] = 'Pergantian Server Data Center | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/gs', $data);
		$this->load->view('templates/afooter');
	}

	public function tgs()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Formulir Pergantian Server Data Center | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tgs', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->ganti_server();
			$this->session->set_flashdata('tgs', 'Pergantian Server Data Center');
			redirect('admin/gs');
		}
	}

	public function dc()
	{

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}


		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('ni', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('kunjungan_dc');
		$config['base_url'] = 'http://localhost/ci/admin/dc';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['dc'] = $this->crud_model->getdc2($data['start'], $data['keyword']);

		$data['judul'] = 'Kunjungan Data Center | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/dc', $data);
		$this->load->view('templates/afooter');
	}

	public function tdc()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Formulir Kunjungan Server Data Center | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tdc', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->kunjungan_dc();
			$this->session->set_flashdata('tdc', 'Kunjungan Server Data Center');
			redirect('admin/dc');
		}
	}

	public function jb()
	{

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;

			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('ni', $data['keyword']);
		$this->db->or_like('tanggal', $data['keyword']);
		$this->db->or_like('status', $data['keyword']);
		$this->db->from('jaringan_baru');
		$config['base_url'] = 'http://localhost/ci/admin/jb';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// $config['per_page'] = 15;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['jb'] = $this->crud_model->getjb2($data['start'], $data['keyword']);

		$data['judul'] = 'Permohonan Pemasangan Jaringan Baru | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/jb', $data);
		$this->load->view('templates/afooter');
	}

	public function tjb()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['judul'] = 'Formulir Pemasangan Jaringan Baru | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tjb', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->jaringan_baru();
			$this->session->set_flashdata('tjb', 'Pemasangan Jaringan Baru');
			redirect('admin/jb');
		}
	}


	/*============================================================================================================================================================================================================================*/

	public function detaildm($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getdmid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detaildm', $data);
		$this->load->view('templates/afooter');
	}

	public function detailrm($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getrmid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detailrm', $data);
		$this->load->view('templates/afooter');
	}

	public function editdm($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		$data = array(
			'judul' => 'Edit Formulir | SIAP UINSGD',
			'edit' => $this->crud_model->getdmid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),

			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => ''
		);

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('unit', 'Unit', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editdm', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editdm();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/dm');
		}
	}

	public function editrm($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		$data = array(
			'judul' => 'Edit Formulir | SIAP UINSGD',
			'edit' => $this->crud_model->getrmid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),

			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('unit', 'Unit', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editrm', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editrm();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/rm');
		}
	}

	public function hapusdm($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$this->crud_model->hapusdm($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/dm');
	}

	public function hapusrm($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$this->crud_model->hapusrm($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/rm');
	}

	/*============================================================================================================================================================================================================================*/

	public function detaildd($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getddid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detaildd', $data);
		$this->load->view('templates/afooter');
	}

	public function detailrd($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getrdid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detailrd', $data);
		$this->load->view('templates/afooter');
	}

	public function editdd($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data = array(
			'judul' => 'Edit Formulir | SIAP UINSGD',
			'edit' => $this->crud_model->getddid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),

			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|max_length[18]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email1', 'Email Yang Ingin Diajukan', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('email2', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('unit', 'Unit', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editdd', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editdd();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/dd');
		}
	}

	public function editrd($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data = array(
			'judul' => 'Edit Formulir | SIAP UINSGD',
			'edit' => $this->crud_model->getrdid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),

			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'unit' => $this->crud_model->gettu(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|max_length[18]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email1', 'Email Yang Ingin Diajukan', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('email2', 'Email', 'required|valid_email|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editrd', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editrd();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/rd');
		}
	}

	public function hapusdd($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$this->crud_model->hapusdd($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/dd');
	}

	public function hapusrd($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$this->crud_model->hapusrd($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/rd');
	}

	/*============================================================================================================================================================================================================================*/

	public function detaildl($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getdlid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detaildl', $data);
		$this->load->view('templates/afooter');
	}

	public function detailrl($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getrlid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detailrl', $data);
		$this->load->view('templates/afooter');
	}

	public function editdl($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data['judul'] = 'Edit Formulir | SIAP UINSGD';
		$data['status'] = ['Belum Dikerjakan', 'Sudah Dikerjakan'];
		$data['edit'] = $this->crud_model->getdlid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$data['fakultas'] = $this->crud_model->gettf();
		$data['unit'] = $this->crud_model->gettu();
		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required|max_length[100]');
		$this->form_validation->set_rules('nama_penanggung', 'Nama Penanggung Jawab', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editdl', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editdl();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/dl');
		}
	}

	public function editrl($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data['judul'] = 'Edit Formulir | SIAP UINSGD';
		$data['status'] = ['Belum Dikerjakan', 'Sudah Dikerjakan'];
		$data['edit'] = $this->crud_model->getrlid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$data['fakultas'] = $this->crud_model->gettf();
		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required|max_length[100]');
		$this->form_validation->set_rules('nama_penanggung', 'Nama Penanggung Jawab', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editrl', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editrl();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/rl');
		}
	}

	public function hapusdl($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		$this->crud_model->hapusdl($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/dl');
	}

	public function hapusrl($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		$this->crud_model->hapusrl($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/rl');
	}

	/*============================================================================================================================================================================================================================*/

	public function detailk($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getkid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detailk', $data);
		$this->load->view('templates/afooter');
	}

	public function editk($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data = array(
			'judul' => 'Edit Formulir | SIAP UINSGD',
			'edit' => $this->crud_model->getkid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'perihal' => $this->crud_model->gettpk(),
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),

			'fakultas' => $this->crud_model->get_fakultas(),
			'jurusan' => $this->crud_model->get_jurusan(),
			'fakultas_selected' => '',
			'jurusan_selected' => '',
		);
		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('keluhan', 'Deskripsi Keluhan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editk', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editk();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/k');
		}
	}

	public function hapusk($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$this->crud_model->hapusk($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/k');
	}

	/*============================================================================================================================================================================================================================*/

	public function detailgs($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getgsid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detailgs', $data);
		$this->load->view('templates/afooter');
	}

	public function editgs($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data['judul'] = 'Edit Formulir | SIAP UINSGD';
		$data['status'] = ['Belum Dikerjakan', 'Sudah Dikerjakan'];
		$data['edit'] = $this->crud_model->getgsid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editgs', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editgs();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/gs');
		}
	}

	public function hapusgs($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$this->crud_model->hapusgs($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/gs');
	}

	public function detaildc($id)
	{
		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getdcid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detaildc', $data);
		$this->load->view('templates/afooter');
	}

	public function editdc($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data['judul'] = 'Edit Formulir | SIAP UINSGD';
		$data['status'] = ['Belum Dikerjakan', 'Sudah Dikerjakan'];
		$data['edit'] = $this->crud_model->getdcid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editdc', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editdc();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/dc');
		}
	}

	public function hapusdc($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		switch ($this->session->userdata('level')) {
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$this->crud_model->hapusdc($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/dc');
	}

	public function detailjb($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		$data['judul'] = 'Detail Formulir | SIAP UINSGD';
		$data['detail'] = $this->crud_model->getjbid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/detailjb', $data);
		$this->load->view('templates/afooter');
	}

	public function editjb($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$data['judul'] = 'Edit Formulir | SIAP UINSGD';
		$data['status'] = ['Belum Dikerjakan', 'Sudah Dikerjakan'];
		$data['edit'] = $this->crud_model->getjbid($id);
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('ni', 'NIM / NIP', 'required|numeric|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
		$this->form_validation->set_rules('permohonan', 'Permohonan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editjb', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editjb();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/jb');
		}
	}

	public function hapusjb($id)
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		$this->crud_model->hapusjb($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/jb');
	}

	/*============================================================================================================================================================================================================================*/

	public function indexlaporan()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}

		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$this->session->unset_userdata('sess_m');
		$this->session->unset_userdata('sess_y');
		$this->session->unset_userdata('sess_ms');

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();

		$data['l'] = $this->input->post('l', true);
		$l = $this->input->post('l', true);
		$y = $this->input->post('y', true);
		$m = $this->input->post('m', true);
		switch ($m) {
			case '01':
				$ms = 'JANUARI';
				break;
			case '02':
				$ms = 'FEBRUARI';
				break;
			case '03':
				$ms = 'MARET';
				break;
			case '04':
				$ms = 'APRIL';
				break;
			case '05':
				$ms = 'MEI';
				break;
			case '06':
				$ms = 'JUNI';
				break;
			case '07':
				$ms = 'JULI';
				break;
			case '08':
				$ms = 'AGUSTUS';
				break;
			case '09':
				$ms = 'SEPTEMBER';
				break;
			case '10':
				$ms = 'OKTOBER';
				break;
			case '11':
				$ms = 'NOVEMBER';
				break;
			case '12':
				$ms = 'DESEMBER';
				break;

			default:
				$ms = 'HELLO WORLD!';
				break;
		}

		$data['m'] = $this->input->post('m', true);
		$data['y'] = $this->input->post('y', true);
		$this->form_validation->set_rules('y', 'Tahun', 'required|numeric|max_length[4]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/indexlaporan', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->session->set_userdata('sess_m', $m);
			$this->session->set_userdata('sess_y', $y);
			$this->session->set_userdata('sess_ms', $ms);
			redirect('admin/' . $l);
		}
	}

	public function laporandm()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['dm'] = $this->db->query("SELECT * FROM daftar_email_mahasiswa WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporandm', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir pendaftaran email mahasiswa [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}


	public function laporandd()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['dd'] = $this->db->query("SELECT * FROM daftar_email_dosen WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporandd', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir pendaftaran email dosen [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporandl()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['dl'] = $this->db->query("SELECT * FROM daftar_email_lembaga WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporandl', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir pendaftaran email lembaga [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporanrm()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['rm'] = $this->db->query("SELECT * FROM reset_password_mahasiswa WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporanrm', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir reset password email mahasiswa [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporanrd()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['rd'] = $this->db->query("SELECT * FROM reset_password_dosen WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporanrd', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir reset password email dosen [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporanrl()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['rl'] = $this->db->query("SELECT * FROM reset_password_lembaga WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporanrl', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir reset password email lembaga [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporank()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['k'] = $this->db->query("SELECT * FROM keluhan WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporank', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir keluhan [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporangs()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['gs'] = $this->db->query("SELECT * FROM ganti_server WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporangs', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir Pergantian Server Data Center [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporandc()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['dc'] = $this->db->query("SELECT * FROM kunjungan_dc WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporandc', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir Kunjungan Data Center [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	public function laporanjb()
	{
		switch ($this->session->userdata('level')) {
			case '2':
				redirect('admin');
				break;
			case '3':
				redirect('admin');
				break;
			case '4':
				redirect('admin');
				break;

			default:
				# code...
				break;
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('sess_m')) {
			redirect('admin/indexlaporan');
		}

		$y2 = $this->session->userdata('sess_y');
		$m2 = $this->session->userdata('sess_m');
		$ms = $this->session->userdata('sess_ms');

		$data['y3'] = $y2;
		$data['m3'] = $ms;

		$data['judul'] = 'Laporan | SIAP UINSGD';
		$data['jb'] = $this->db->query("SELECT * FROM jaringan_baru WHERE y = $y2 AND m = $m2 ORDER BY id DESC")->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/laporanjb', $data, true);

		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('Laporan formulir Permohonan Pemasangan Jaringan Baru [' . date("d/m/Y") . '].pdf', array("Attachment" => false));
	}

	/*============================================================================================================================================================================================================================*/

	public function tf()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['tf'] = $this->crud_model->gettf();
		$data['df'] = $this->crud_model->getdf();

		$data['judul'] = 'Tambah Fakultas | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tf', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->tambahf();
			$this->session->set_flashdata('t', 'tambah');
			redirect('admin/tf');
		}
	}

	public function tu()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['tu'] = $this->crud_model->gettu();

		$data['judul'] = 'Tambah Unit | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->form_validation->set_rules('unit', 'Unit', 'required|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tu', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->tambahu();
			$this->session->set_flashdata('tambahtu', 'tambah');
			redirect('admin/tu');
		}
	}


	public function tpk()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['tpk'] = $this->crud_model->gettpk();
		$data['dpk'] = $this->crud_model->getdpk();

		$data['judul'] = 'Tambah Perihal Keluhan | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->form_validation->set_rules('perihal', 'perihal', 'required|max_length[100]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tpk', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->tambahpk();
			$this->session->set_flashdata('t', 'tambah');
			redirect('admin/tpk');
		}
	}

	public function ta()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['ta'] = $this->crud_model->getta();
		$data['level'] = ['0', '1', '2', '3', '4'];

		$data['judul'] = 'Tambah Admin | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->form_validation->set_rules('user', 'Username', 'required|max_length[100]');
		$this->form_validation->set_rules('pass', 'Password', 'required|max_length[100]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');
		$this->form_validation->set_rules('level', 'Level', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/ta', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->tambaha();
			$this->session->set_flashdata('t', 'tambah');
			redirect('admin/ta');
		}
	}

	public function tj()
	{
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		$data['tj'] = $this->crud_model->gettj();
		$data['dj'] = $this->crud_model->getdj();
		$data['fakultas'] = $this->crud_model->gettf();

		$data['judul'] = 'Tambah Jurusan | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->form_validation->set_rules('jurusan', 'Nama Jurusan', 'required|max_length[50]');
		$this->form_validation->set_rules('jfakultas', 'Fakultas', 'required|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/tj', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->tambahj();
			$this->session->set_flashdata('t', 'tambah');
			redirect('admin/tj');
		}
	}

	public function da()
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if ($this->session->userdata('level') == 0) {
			redirect('admin');
		}

		$data['da'] = $this->crud_model->getta();

		$data['judul'] = 'Daftar Admin | SIAP UINSGD';
		$data['admin'] = $this->db->get_where('admin', ['user' =>
		$this->session->userdata('user')])->row_array();
		$this->load->view('templates/aheader', $data);
		$this->load->view('admin/da', $data);
		$this->load->view('templates/afooter');
	}

	public function hapustf($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		$this->crud_model->hapustf($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/tf');
	}

	public function hapustu($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		$this->crud_model->hapustu($id);
		$this->session->set_flashdata('hapustu', 'Dihapus');
		redirect('admin/tu');
	}

	public function hapustpk($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		$this->crud_model->hapustpk($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/tpk');
	}

	public function hapusta($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		$this->crud_model->hapusta($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/ta');
	}

	public function hapustj($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}
		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}
		$this->crud_model->hapustj($id);
		$this->session->set_flashdata('dhp', 'Dihapus');
		redirect('admin/tj');
	}

	public function edittf($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}

		$data = array(
			'judul' => 'Edit Fakultas | SIAP UINSGD',
			'edit' => $this->crud_model->gettfid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),
		);

		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/edittf', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->edittf();
			$this->crud_model->edittfchain();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/tf');
		}
	}

	public function edittu($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}

		$data = array(
			'judul' => 'Edit Unit | SIAP UINSGD',
			'edit' => $this->crud_model->gettuid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),
		);

		$this->form_validation->set_rules('unit', 'Unit', 'required|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/edittu', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->edittu();
			$this->session->set_flashdata('edittu', 'Edit');
			redirect('admin/tu');
		}
	}

	public function edittpk($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}

		$data = array(
			'judul' => 'Edit Perihal Keluhan | SIAP UINSGD',
			'edit' => $this->crud_model->gettpkid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),
		);

		$this->form_validation->set_rules('perihal', 'Perihal', 'required|max_length[100]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/edittpk', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->edittpk();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/tpk');
		}
	}

	public function editta($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}

		$data = array(
			'judul' => 'Edit Admin | SIAP UINSGD',
			'level' => ['0', '1', '2', '3', '4'],
			'edit' => $this->crud_model->gettaid($id),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),
		);

		$this->form_validation->set_rules('user', 'Username', 'required|max_length[100]');
		$this->form_validation->set_rules('pass', 'Password', 'required|max_length[100]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');
		$this->form_validation->set_rules('level', 'Level', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/editta', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->editta();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/ta');
		}
	}

	public function edittj($id)
	{
		if (!$this->session->userdata('user')) {
			redirect('admin');
		}

		if (!$this->session->userdata('level') == 0) {
			redirect('admin');
		}

		$data = array(
			'judul' => 'Edit Jurusan | SIAP UINSGD',
			'edit' => $this->crud_model->gettjid($id),
			'fakultas' => $this->crud_model->gettf(),
			'status' => ['Belum Dikerjakan', 'Sudah Dikerjakan'],
			'admin' => $this->db->get_where('admin', ['user' =>
			$this->session->userdata('user')])->row_array(),
		);

		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required|max_length[50]');
		$this->form_validation->set_rules('jfakultas', 'Fakultas', 'required|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/aheader', $data);
			$this->load->view('admin/edittj', $data);
			$this->load->view('templates/afooter');
		} else {
			$this->crud_model->edittj();
			$this->session->set_flashdata('edit', 'Edit');
			redirect('admin/tj');
		}
	}
}
