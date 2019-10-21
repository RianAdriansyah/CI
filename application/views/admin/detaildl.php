<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Detail Formulir Pendaftaran Email Lembaga</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="col-sm-12 col-lg-12">
		<div class="card">
			<h5 class="card-header">Formulir Pendaftaran Email Lembaga</h5>
			<div class="card-body">
				<table>
					<tr>
						<td>
							<p class="card-text">Nama Lembaga
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['nama_lembaga']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Penanggung jawab
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['nama_penanggung']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Telepon
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['telp']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Email
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['email']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Unit
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['unit']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Tanggal Dikirim
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['tanggal']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Jam Dikirim
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['jam']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Terakhir Kali Di Edit
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp; <?= $detail['edit']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p class="card-text">Status
						</td>
						<td>
							<p class="card-text">&emsp;:&emsp;
								<?php
								if ($detail['status'] == "Belum Dikerjakan") {
									echo "<span class='badge badge-danger'>Belum Dikerjakan</span>";
								} elseif ($detail['status'] == "Sedang Dikerjakan") {
									echo "<span class='badge badge-warning'>Sedang Dikerjakan</span>";
								} else {
									echo "<span class='badge badge-success'>Sudah Dikerjakan</span>";
								}
								?>
						</td>
					</tr>
					<tr>
						<td>
							<br>

						</td>
					</tr>
				</table>
				<hr>
				<div class="col-sm">
					<a href="<?= base_url('/'); ?>admin/dl" class="btn btn-primary btn-block"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
				</div>
			</div>
		</div>
	</div>
	<!--/.col-->