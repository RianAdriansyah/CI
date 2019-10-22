<style>
*{
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 home1">
			<img src="<?php echo base_url("/assets/img/bg.jpg"); ?>" width="100%" height="100%">
		</div>
		<div class="col-md-6 home2">
			<img src="<?= base_url('/') ?>assets/img/logo2.png" width="420" height="170">
			<p style="color: #9c9c9c;">Silahkan pilih formulir layanan yang diinginkan ...</p><br><br>

			<div class="row">
				<div class="col-md-6 mx-auto">

					<a href="<?= base_url(); ?>user/pendaftaran" class="btn btn-success btn-block">Pendaftaran</a>


					<a href="<?= base_url(); ?>user/pengajuan" class="btn btn-success btn-block">Pengajuan Layanan</a>


					<a href="<?= base_url(); ?>user/keluhan" class="btn btn-success btn-block">Keluhan</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mt-4">
					<p style="font-size:14px;color: gray;">Jika formulir yang anda inginkan tidak tertera di atas, anda bisa langsung pergi ke bagian Pelayanan UIN Sunan Gunung Djati di Lecture Hall lt.2</p>
				</div>
			</div>
			<div class="home3"><a href="<?= base_url(); ?>user/about" style="text-decoration: none;color: gray;">About Us</a>
				<span> &emsp; Copyright © UIN Sunan Gunung Djati Bandung <?= date('Y'); ?></span>
			</div>
		</div>
	</div>
</div>