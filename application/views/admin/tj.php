<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Tambah Jurusan</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="col-sm-12">
		<?php if ($this->session->flashdata('t')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Jurusan berhasil ditambahkan !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('dhp')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Jurusan berhasil dihapus !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('edit')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Jurusan berhasil diedit !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<?= validation_errors(); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
	</div>

	<div class="col-sm-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<form style="padding: 5px;" action="" method="post">
					<div class="form-row">
						<div class="form-group col-md">
							<label for="jurusan">Nama Jurusan</label>
							<input type="text" class="form-control" id="jurusan" name="jurusan">
						</div>
						<div class="form-group col-md">
							<label for="jfakultas">Fakultas</label>
							<select id="jfakultas" name="jfakultas" class="form-control">
								<option value="" disabled selected>-- Pilih Fakultas --</option>
								<?php foreach ($fakultas as $f) : ?>
									<option value="<?= $f['fakultas']; ?>"><?= $f['fakultas']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<button type="submit" id="kirim" name="kirim" class="btn btn-primary btn-block">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		Daftar Jurusan
	</div>

	<div class="col-lg-12 table-responsive">
		<table class="table" style="font-size: 14px;">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col" width="10%">No</th>
					<th scope="col" width="35%">Jurusan</th>
					<th scope="col" width="35%">Fakultas</th>
					<th colspan="2" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($dj)) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Jurusan Kosong.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<?php $start = 0;
				foreach ($dj as $row) : ?>
					<tr>
						<th scope="row" width="10%" style="text-align: center;"><?= ++$start; ?></th>
						<td width="35%"><?= $row['jurusan']; ?></td>
						<td width="35%"><?= $row['jfakultas']; ?></td>
						<td><a href="<?= base_url('/') ?>admin/edittj/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-success" role="button">Edit</a></td>
						<td><a href="<?= base_url('/') ?>admin/hapustj/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus <?= $row['jurusan']; ?> ?')">Hapus</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>