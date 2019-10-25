<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Daftar Formulir Permohonan Pemasangan Jaringan Baru</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="col-sm-10">
		<a href="<?= base_url('admin/tjb') ?>" class="btn btn-primary mb-3 rounded">
			<i class="fas fa-fw fa-folder-plus"></i> Formulir</a>
	</div>

	<div class="col-sm-2">
		<div class="alert alert-light" role="alert">
			<h6>Formulir : <?= $total_rows; ?></h6>
		</div>
	</div>
	<div class="col-sm-12">
		<?php if ($this->session->flashdata('tjb')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Selamat, <b><?= $this->session->flashdata('tjb'); ?></b> telah berhasil dikirim, silahkan tunggu 2x24 jam untuk pemrosesan formulir. Jika formulir sudah kami periksa, kami akan mengirim pesan pemberitahuan via <b>WhatsApp</b> ...
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('dhp')) : ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				1 Formulir berhasil dihapus !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					` </button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('edit')) : ?>
			<div class="alert alert-primary alert-dismissible fade show" role="alert">
				1 Formulir berhasil diedit !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
	</div>

	<div class="col-lg-12 table-responsive">
		<table class="table table-hover" style="font-size: 14px;" id="table_id">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col">No</th>
					<th scope="col">NIM / NIP</th>
					<th scope="col">Nama</th>
					<th scope="col">Telepon</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Status</th>
					<th scope="col" style="width:100px;">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($jb as $row) : ?>
					<tr>
						<th scope="row" style="text-align: center;"><?= ++$start; ?></th>
						<td><?= $row['ni']; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><a href="https://wa.me/<?= $row['telp']; ?>" target="_blank" class="text-primary" data-toggle="tooltip" data-placement="right" title="Contact Me">+<?= $row['telp']; ?></a></td>
						<td><?= $row['tanggal']; ?></td>
						<td class="text-center">
							<?php
								if ($row['status'] == "Belum Dikerjakan") {
									echo "<span class='badge badge-danger'>Belum Dikerjakan</span>";
								} elseif (
									$row['status'] == "Sedang Dikerjakan"
								) {
									echo "<span class='badge badge-warning'>Sedang Dikerjakan</span>";
								} else {
									echo "<span class='badge badge-success'>Sudah Dikerjakan</span>";
								}
								?>
						</td>

						<td>
							<a href="<?= base_url('/') ?>admin/editjb/<?= $row['id']; ?>" class="btn btn-sm btn-success" role="button" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fas fa-fw fa-edit"></i></a>

							<a href="<?= base_url('/') ?>admin/detailjb/<?= $row['id']; ?>" class="btn btn-sm btn-primary" role="button" data-toggle="tooltip" data-placement="right" title="Detail"><i class="fas fa-fw fa-info-circle"></i></a>

							<a href="<?= base_url('/') ?>admin/hapusjb/<?= $row['id']; ?>" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus formulir ini ?')" data-toggle="tooltip" data-placement="right" title="Hapus"><i class="fas fa-fw fa-trash-alt"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php if (empty($jb)) : ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Tidak ada formulir.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
	</div>

	<!-- <div class="col-sm-12 col-lg-12">
		<?= $this->pagination->create_links(); ?>
	</div> -->

	<!-- <script type="text/javascript">
		function autoRefreshPage() {
			window.location = window.location.href;
		}
		setInterval('autoRefreshPage()', 60000);
	</script> -->