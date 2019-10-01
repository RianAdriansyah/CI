<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Daftar Formulir Pendaftaran Email Mahasiswa</h1>
			</div>
		</div>
	</div>
</div>


<div class="content mt-3">

	<div class="col-sm-10">
		<a href="" data-toggle="modal" data-target="#newM" class="btn btn-primary mb-3">
			<i class="fas fa-user-plus"> Mahasiswa</i></a>
		<form action="" method="post">
			<div class="input-group mb-3">
				<input name="keyword" value="<?= $keyword; ?>" type="text" class="form-control" placeholder="Cari Disini ..." autocomplete="off" autofocus>
				<div class="input-group-append">
					<input class="btn btn-dark" type="submit" value="Search" name="submit" id="button-addon2"></input>
				</div>
			</div>
		</form>
	</div>

	<div class="col-sm-2">
		<div class="alert alert-light" role="alert">
			<h6>Formulir : <?= $total_rows; ?></h6>
		</div>
	</div>
	<div class="col-sm-12">
		<?php if ($this->session->flashdata('dhp')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Formulir berhasil dihapus !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('edit')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Formulir berhasil diedit !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
	</div>

	<div class="col-sm-12 col-lg-12">
		<table class="table" style="font-size: 12.5px;">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col">No</th>
					<th scope="col">NIM</th>
					<th scope="col">Nama</th>
					<th scope="col">Telepon</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Status</th>
					<th colspan="3" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($dm as $row) : ?>
					<tr>
						<th scope="row" style="text-align: center;"><?= ++$start; ?></th>
						<td><?= $row['nim']; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><a href="https://wa.me/<?= $row['telp']; ?>?text=Selamat,%20akun%20email%20anda%20telah%20terdaftar%20%7C%20Email%20=%20<?= $row['nim']; ?>@student.uinsgd.ac.id%20%7C%20Password%20=%20uinbandung" target="_blank"><?= $row['telp']; ?></a></td>
						<td><?= $row['tanggal']; ?></td>
						<td class="text-center">
							<?php
								if ($row['status'] == "Belum Dikerjakan") {
									echo "<span class='badge badge-danger'>Belum Dikerjakan</span>";
								} else {
									echo "<span class='badge badge-success'>Sudah Dikerjakan</span>";
								}
								?>
						</td>

						<td><a href="<?= base_url('/') ?>admin/editdm/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-success" role="button">Edit</a></td>

						<td><a href="<?= base_url('/') ?>admin/detaildm/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-primary" role="button">Detail</a></td>

						<td><a href="<?= base_url('/') ?>admin/hapusdm/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus formulir ini ?')">Hapus</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php if (empty($dm)) : ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Tidak ada formulir.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
	</div>

	<div class="col-sm-12 col-lg-12">
		<?= $this->pagination->create_links(); ?>
	</div>

	<script type="text/javascript">
		function autoRefreshPage() {
			window.location = window.location.href;
		}
		setInterval('autoRefreshPage()', 60000);
	</script>

	<div class="modal fade" id="newM" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="newRoleModal">Add New Role</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form style="padding: 5px; margin-top: 10px; margin-bottom: 20px;" action="" method="post">
					<div class="form-row">
						<div class="form-group col-md">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" name="nama">
						</div>
						<div class="form-group col-md">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<label for="nim">NIM</label>
							<input type="number" class="form-control" id="nim" name="nim">
						</div>
						<div class="form-group col-md">
							<label for="telp">Nomor Telepon</label>
							<input type="number" placeholder="Contoh : 6282128579730" class="form-control" id="telp" name="telp">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<label for="fakultas">Fakultas</label>
							<select id="fakultas" name="fakultas" class="form-control">
								<option value="" disabled selected>-- Pilih Fakultas --</option>
								<?php
								foreach ($fakultas as $f) {
									?>
									<option <?php echo $fakultas_selected == $f->fakultas ? 'selected="selected"' : '' ?>value="<?php echo $f->fakultas ?>"><?php echo $f->fakultas ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group col-md">
							<label for="jurusan">Jurusan</label>
							<select id="jurusan" name="jurusan" class="form-control">
								<option value="" disabled selected>-- Pilih Jurusan --</option>
								<?php
								foreach ($jurusan as $j) {
									?>
									<option <?php echo $jurusan_selected == $j->jfakultas ? 'selected="selected"' : '' ?>class="<?php echo $j->jfakultas ?>" value="<?php echo $j->jurusan ?>"><?php echo $j->jurusan ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<?php date_default_timezone_set('Asia/Jakarta'); ?>
					<input type="hidden" id="status" name="status" value="Belum Dikerjakan">
					<input type="hidden" id="edit" name="edit" value="Belum Di Edit">
					<input type="hidden" id="tanggal" name="tanggal" value="<?= date("d.m.Y") ?>">
					<input type="hidden" id="m" name="m" value="<?= date("m") ?>">
					<input type="hidden" id="y" name="y" value="<?= date("Y") ?>">
					<input type="hidden" id="jam" name="jam" value="<?= date("H:i:s") ?>">
					<br><button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block">Kirim Formulir</button>
				</form>
			</div>
		</div>
	</div>