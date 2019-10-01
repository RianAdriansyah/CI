<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 home1">
			<img src="<?php echo base_url("/assets/img/bg.jpg"); ?>" width="100%" height="100%">
		</div>
		<div class="col-md-6 home2">
			<img src="<?= base_url('/') ?>assets/img/logo2.png" width="420" height="170">
			<p style="color: #9c9c9c;">Silahkan pilih formulir layanan yang diinginkan ...</p><br><br>
			<div class="row">
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/daftar_mahasiswa" class="btn btn-outline-success btn-block homebutton" role="button">Pendaftaran Email Mahasiswa</a>
				</div>
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/reset_mahasiswa" class="btn btn-outline-success btn-block homebutton" role="button">Reset Password Email Mahasiswa</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/daftar_dosen" class="btn btn-outline-success btn-block homebutton" role="button">Pendaftaran Email Dosen</a>
				</div>
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/reset_dosen" class="btn btn-outline-success btn-block homebutton" role="button">Reset Password Email Dosen</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/daftar_lembaga" class="btn btn-outline-success btn-block homebutton" role="button">Pendaftaran Email Lembaga</a>
				</div>
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/reset_lembaga" class="btn btn-outline-success btn-block homebutton" role="button">Reset Password Email Lembaga</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/ganti_server" class="btn btn-outline-success btn-block homebutton" role="button">Pergantian Server Data Center</a>
				</div>
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/kunjungan_dc" class="btn btn-outline-success btn-block homebutton" role="button">Kunjungan Data center</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a href="<?= base_url(); ?>user/keluhan" class="btn btn-outline-success btn-block homebutton" role="button">Formulir Keluhan</a>
				</div>
				<div class="col-sm-6">
					<a href="<?= base_url(); ?>user/jaringan_baru" class="btn btn-outline-success btn-block homebutton" role="button">Pemasangan Jaringan Baru</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mt-2">
					<p style="font-size:14px;color: gray;">Jika formulir yang anda inginkan tidak tertera di atas, anda bisa langsung pergi ke bagian Pelayanan UIN Sunan Gunung Djati di Lecture Hall lt.2</p>
				</div>
			</div>
			<div class="home3"><a href="<?= base_url(); ?>user/about" style="text-decoration: none;color: gray;">About Us</a>&emsp; Copyright © UIN Sunan Gunung Djati Bandung 2019</div>
		</div>
	</div>
</div>