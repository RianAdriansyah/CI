<?php

/**
 * 
 */
class crud_model extends CI_model{


	public function daftarm()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('daftar_email_mahasiswa', $data);
	}

	public function resetm()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('reset_password_mahasiswa', $data);
	}

	public function daftard()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email1" => $this->input->post('email1', true),
			"email2" => $this->input->post('email2', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('daftar_email_dosen', $data);
	}

	public function resetd()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email1" => $this->input->post('email1', true),
			"email2" => $this->input->post('email2', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('reset_password_dosen', $data);
	}

	public function daftarl()
	{
		$data = [
			"nama_lembaga" => $this->input->post('nama_lembaga', true),
			"nama_penanggung" => $this->input->post('nama_penanggung', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('daftar_email_lembaga', $data);
	}

	public function resetl()
	{
		$data = [
			"nama_lembaga" => $this->input->post('nama_lembaga', true),
			"nama_penanggung" => $this->input->post('nama_penanggung', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('reset_password_lembaga', $data);
	}

	public function keluh()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"email" => $this->input->post('email', true),
			"perihal" => $this->input->post('perihal', true),
			"keluhan" => $this->input->post('keluhan', true),
			"status" => $this->input->post('status', true),
			"solusi" => $this->input->post('solusi', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('keluhan', $data);
	}

	public function ganti_server()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"permohonan" => $this->input->post('permohonan', true),
			"status" => $this->input->post('status', true),
			"solusi" => $this->input->post('solusi', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('ganti_server', $data);
	}

	public function kunjungan_dc()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"permohonan" => $this->input->post('permohonan', true),
			"status" => $this->input->post('status', true),
			"solusi" => $this->input->post('solusi', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('kunjungan_dc', $data);
	}

	public function jaringan_baru()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"permohonan" => $this->input->post('permohonan', true),
			"status" => $this->input->post('status', true),
			"solusi" => $this->input->post('solusi', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->insert('jaringan_baru', $data);
	}

/*============================================================================================================================================================================================================================*/

	public function getdm()
	{
		return $this->db->get('daftar_email_mahasiswa')->result_array();
	}

	public function getdmid($id)
	{
		return $this->db->get_where('daftar_email_mahasiswa',['id' => $id])->row_array();
	}

	public function hapusdm($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('daftar_email_mahasiswa');
	}

	public function editdm()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"edit" => $this->input->post('edit', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('daftar_email_mahasiswa', $data);
	}

	public function getrm()
	{
		return $this->db->get('reset_password_mahasiswa')->result_array();
	}

	public function getrmid($id)
	{
		return $this->db->get_where('reset_password_mahasiswa',['id' => $id])->row_array();
	}

	public function hapusrm($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('reset_password_mahasiswa');
	}

	public function editrm()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"edit" => $this->input->post('edit', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('reset_password_mahasiswa', $data);
	}

	public function getdd()
	{
		return $this->db->get('daftar_email_dosen')->result_array();
	}

	public function getddid($id)
	{
		return $this->db->get_where('daftar_email_dosen',['id' => $id])->row_array();
	}

	public function hapusdd($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('daftar_email_dosen');
	}

	public function editdd()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email1" => $this->input->post('email1', true),
			"email2" => $this->input->post('email2', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('daftar_email_dosen', $data);
	}

	public function getrd()
	{
		return $this->db->get('reset_password_dosen')->result_array();
	}

	public function getrdid($id)
	{
		return $this->db->get_where('reset_password_dosen',['id' => $id])->row_array();
	}

	public function hapusrd($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('reset_password_dosen');
	}

	public function editrd()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"telp" => $this->input->post('telp', true),
			"email1" => $this->input->post('email1', true),
			"email2" => $this->input->post('email2', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('reset_password_dosen', $data);
	}

	public function getdl()
	{
		return $this->db->get('daftar_email_lembaga')->result_array();
	}

	public function getdlid($id)
	{
		return $this->db->get_where('daftar_email_lembaga',['id' => $id])->row_array();
	}

	public function hapusdl($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('daftar_email_lembaga');
	}

	public function editdl()
	{
		$data = [
			"nama_lembaga" => $this->input->post('nama_lembaga', true),
			"nama_penanggung" => $this->input->post('nama_penanggung', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('daftar_email_lembaga', $data);
	}

	public function getrl()
	{
		return $this->db->get('reset_password_lembaga')->result_array();
	}

	public function getrlid($id)
	{
		return $this->db->get_where('reset_password_lembaga',['id' => $id])->row_array();
	}

	public function hapusrl($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('reset_password_lembaga');
	}

	public function editrl()
	{
		$data = [
			"nama_lembaga" => $this->input->post('nama_lembaga', true),
			"nama_penanggung" => $this->input->post('nama_penanggung', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('reset_password_lembaga', $data);
	}

	public function getk()
	{
		return $this->db->get('keluhan')->result_array();
	}

	public function getkid($id)
	{
		return $this->db->get_where('keluhan',['id' => $id])->row_array();
	}

	public function hapusk($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('keluhan');
	}

	public function editk()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"fakultas" => $this->input->post('fakultas', true),
			"jurusan" => $this->input->post('jurusan', true),
			"email" => $this->input->post('email', true),
			"perihal" => $this->input->post('perihal', true),
			"keluhan" => $this->input->post('keluhan', true),
			"solusi" => $this->input->post('solusi', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('keluhan', $data);
	}

	public function getgs()
	{
		return $this->db->get('ganti_server')->result_array();
	}

	public function getgsid($id)
	{
		return $this->db->get_where('ganti_server',['id' => $id])->row_array();
	}

	public function hapusgs($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('ganti_server');
	}

	public function editgs()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"permohonan" => $this->input->post('permohonan', true),
			"solusi" => $this->input->post('solusi', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('ganti_server', $data);
	}

	public function getdc()
	{
		return $this->db->get('kunjungan_dc')->result_array();
	}

	public function getdcid($id)
	{
		return $this->db->get_where('kunjungan_dc',['id' => $id])->row_array();
	}

	public function hapusdc($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('kunjungan_dc');
	}

	public function editdc()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"permohonan" => $this->input->post('permohonan', true),
			"solusi" => $this->input->post('solusi', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kunjungan_dc', $data);
	}

	public function getjb()
	{
		return $this->db->get('jaringan_baru')->result_array();
	}

	public function getjbid($id)
	{
		return $this->db->get_where('jaringan_baru',['id' => $id])->row_array();
	}

	public function hapusjb($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('jaringan_baru');
	}

	public function editjb()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ni" => $this->input->post('ni', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"permohonan" => $this->input->post('permohonan', true),
			"solusi" => $this->input->post('solusi', true),
			"status" => $this->input->post('status', true),
			"edit" => $this->input->post('edit', true),
			"tanggal" => $this->input->post('tanggal', true),
			"m" => $this->input->post('m', true),
			"y" => $this->input->post('y', true),
			"jam" => $this->input->post('jam', true)

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('jaringan_baru', $data);
	}

/*============================================================================================================================================================================================================================*/

	public function getdm2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('nim', $keyword);
			$this->db->or_like('fakultas', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('daftar_email_mahasiswa', $limit, $start)->result_array();
	}

	public function getrm2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('nim', $keyword);
			$this->db->or_like('fakultas', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('reset_password_mahasiswa', $limit, $start)->result_array();
	}

	public function getdd2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('nip', $keyword);
			$this->db->or_like('fakultas', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('daftar_email_dosen', $limit, $start)->result_array();
	}

	public function getrd2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('nip', $keyword);
			$this->db->or_like('fakultas', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('reset_password_dosen', $limit, $start)->result_array();
	}

	public function getdl2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama_lembaga', $keyword);
			$this->db->or_like('nama_penanggung', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('daftar_email_lembaga', $limit, $start)->result_array();
	}

	public function getrl2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama_lembaga', $keyword);
			$this->db->or_like('nama_penanggung', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('reset_password_lembaga', $limit, $start)->result_array();
	}

	public function getk2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('ni', $keyword);
			$this->db->or_like('fakultas', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('perihal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('keluhan', $limit, $start)->result_array();
	}

	public function getgs2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('ni', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('ganti_server', $limit, $start)->result_array();
	}

	public function getdc2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('ni', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('kunjungan_dc', $limit, $start)->result_array();
	}

	public function getjb2($limit, $start, $keyword = null)
	{	
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('ni', $keyword);
			$this->db->or_like('tanggal', $keyword);
			$this->db->or_like('status', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('jaringan_baru', $limit, $start)->result_array();
	}

	public function hitungdm()
	{
		return $this->db->get('daftar_email_mahasiswa')->num_rows();
	}

	public function hitungrm()
	{
		return $this->db->get('reset_password_mahasiswa')->num_rows();
	}

	public function hitungdd()
	{
		return $this->db->get('daftar_email_dosen')->num_rows();
	}

	public function hitungrd()
	{
		return $this->db->get('reset_password_dosen')->num_rows();
	}

	public function hitungdl()
	{
		return $this->db->get('daftar_email_lembaga')->num_rows();
	}

	public function hitungrl()
	{
		return $this->db->get('reset_password_lembaga')->num_rows();
	}

	public function hitungk()
	{
		if ($this->session->userdata('level') == 2) {
			$this->db->where('perihal', 'ict');
		}
		return $this->db->get('keluhan')->num_rows();
	}

	public function hitunggs()
	{
		return $this->db->get('ganti_server')->num_rows();
	}

	public function hitungdc()
	{
		return $this->db->get('kunjungan_dc')->num_rows();
	}

	public function hitungjb()
	{
		return $this->db->get('jaringan_baru')->num_rows();
	}

/*============================================================================================================================================================================================================================*/
	
	public function tambahf()
	{
		$data = [
			"fakultas" => $this->input->post('fakultas', true)
		];

		$this->db->insert('fakultas', $data);
	}

	public function tambahpk()
	{
		$data = [
			"perihal" => $this->input->post('perihal', true)
		];

		$this->db->insert('perihal_keluhan', $data);
	}

	public function tambaha()
	{
		$data = [
			"user" => $this->input->post('user', true),
			"pass" => $this->input->post('pass', true),
			"nama" => $this->input->post('nama', true),
			"level" => $this->input->post('level', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"img" => $this->input->post('img', true),
			"bergabung" => $this->input->post('bergabung', true)
		];

		$this->db->insert('admin', $data);
	}

	public function tambahj()
	{
		$data = [
			"jurusan" => $this->input->post('jurusan', true),
			"jfakultas" => $this->input->post('jfakultas', true)
		];

		$this->db->insert('jurusan', $data);
	}

	public function hapustf($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('fakultas');
	}

	public function hapustpk($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('perihal_keluhan');
	}

	public function hapusta($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('admin');
	}

	public function hapustj($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('jurusan');
	}

	public function gettf()
	{	
		$this->db->order_by('id', 'ASC');
		return $this->db->get('fakultas')->result_array();
	}

	public function getdf()
	{	
		$this->db->order_by('id', 'DESC');
		return $this->db->get('fakultas')->result_array();
	}

	public function gettpk()
	{	
		$this->db->order_by('perihal', 'ASC');
		return $this->db->get('perihal_keluhan')->result_array();
	}

	public function getdpk()
	{	
		$this->db->order_by('id', 'DESC');
		return $this->db->get('perihal_keluhan')->result_array();
	}

	public function getta()
	{	
		$this->db->order_by('level', 'ASC');
		return $this->db->get('admin')->result_array();
	}

	public function gettj()
	{	
		$this->db->order_by('jurusan', 'ASC');
		return $this->db->get('jurusan')->result_array();
	}

	public function getdj()
	{	
		$this->db->order_by('jurusan', 'ASC');
		return $this->db->get('jurusan')->result_array();
	}

	public function gettfid($id)
	{
		return $this->db->get_where('fakultas',['id' => $id])->row_array();
	}

	public function gettpkid($id)
	{
		return $this->db->get_where('perihal_keluhan',['id' => $id])->row_array();
	}

	public function gettaid($id)
	{
		return $this->db->get_where('admin',['id' => $id])->row_array();
	}

	public function gettjid($id)
	{
		return $this->db->get_where('jurusan',['id' => $id])->row_array();
	}

	public function edittf()
	{
		$data = [
			"fakultas" => $this->input->post('fakultas', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('fakultas', $data);
	}

	public function edittfchain()
	{
		$fakultaschain = $this->input->post('fakultaschain', true);
		$data = [
			"jfakultas" => $this->input->post('fakultas', true)
		];

		$this->db->where('jfakultas', $fakultaschain);
		$this->db->update('jurusan', $data);
	}

	public function edittpk()
	{
		$data = [
			"perihal" => $this->input->post('perihal', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('perihal_keluhan', $data);
	}

	public function editta()
	{
		$data = [
			"user" => $this->input->post('user', true),
			"pass" => $this->input->post('pass', true),
			"nama" => $this->input->post('nama', true),
			"level" => $this->input->post('level', true),
			"telp" => $this->input->post('telp', true),
			"email" => $this->input->post('email', true),
			"bergabung" => $this->input->post('bergabung', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('admin', $data);
	}

	public function edittj()
	{
		$data = [
			"jurusan" => $this->input->post('jurusan', true),
			"jfakultas" => $this->input->post('jfakultas', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('jurusan', $data);
	}

/*============================================================================================================================================================================================================================*/

	public function get_fakultas()
    {
        $this->db->order_by('fakultas.id', 'ASC');
        return $this->db->get('fakultas')->result();
    }

    public function get_jurusan()
    {
        $this->db->order_by('jurusan.jurusan', 'ASC');
        $this->db->join('fakultas', 'jurusan.jfakultas = fakultas.fakultas');
        return $this->db->get('jurusan')->result();
    }
}