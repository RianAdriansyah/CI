<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Tambah Fakultas</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="col-sm-12">
		<?php if ($this->session->flashdata('t')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Fakultas berhasil ditambahkan !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('dhp')) : ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				1 Fakultas berhasil dihapus !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('edit')) : ?>
			<div class="alert alert-primary alert-dismissible fade show" role="alert">
				1 Fakultas berhasil diedit !
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
						<div class="form-group col-sm-5">
							<label for="fakultas">Nama Fakultas</label>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" id="fakultas" name="fakultas">
						</div>
						<div class="form-group col-sm-4">
							<button type="submit" id="kirim" name="kirim" class="btn btn-primary btn-block">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<h5 class="h5 mb-2 text-gray-800">Daftar Fakultas</h5>
	</div>

	<div class="col-lg-12 table-responsive">
		<table class="table" style="font-size: 14px;" id="table_id">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col" width="10%">No</th>
					<th scope="col" width="70%">Fakultas</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($df)) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Fakultas Kosong.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<?php $start = 0;
				foreach ($df as $row) : ?>
					<tr>
						<th scope="row" width="10%" style="text-align: center;"><?= ++$start; ?></th>
						<td width="70%"><?= $row['fakultas']; ?></td>
						<td class="text-center">
							<a href="<?= base_url('/') ?>admin/edittf/<?= $row['id']; ?>" class="btn btn-sm btn-success" role="button" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
							<a href="<?= base_url('/') ?>admin/hapustf/<?= $row['id']; ?>" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus <?= $row['fakultas']; ?> ?')" data-toggle="tooltip" data-placement="right" title="Hapus"><i class="fas fa-fw fa-trash-alt"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<br>
	</div>
</div>