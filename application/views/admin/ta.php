<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Tambah Admin</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="col-sm-12">
		<?php if ($this->session->flashdata('t')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Admin berhasil ditambahkan !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('dhp')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Admin berhasil dihapus !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('edit')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				1 Admin berhasil diedit !
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

	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form style="padding: 5px;" action="" method="post">
					<div class="form-row">
						<div class="form-group col-md">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama">
							<?php date_default_timezone_set('Asia/Jakarta'); ?>
							<input type="hidden" id="bergabung" name="bergabung" value="<?php echo date("d.m.Y H:i:s") ?>">
							<input type="hidden" id="img" name="img" value="default.png">
						</div>
						<div class="form-group col-md">
							<label for="level">Level</label>
							<select id="level" name="level" class="form-control">
								<option value="" disabled selected>-- Pilih Level --</option>
								<?php foreach ($level as $l) : ?>
									<?php switch ($l) {
											case '0':
												$lev = "0 Super Admin";
												break;
											case '1':
												$lev = "1 Admin Pelayanan";
												break;
											case '2':
												$lev = "2 Admin Data Center";
												break;
											case '3':
												$lev = "3 Admin Pemasangan Jaringan";
												break;
											case '4':
												$lev = "4 Admin Keluhan";
												break;
											default:
												# code...
												break;
										}
										?>
										<option value="<?= $l; ?>"><?= $lev; ?></option>
									<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<label for="user">Username</label>
							<input type="text" class="form-control" id="user" name="user">
						</div>
						<div class="form-group col-md">
							<label for="pass">Password</label>
							<input type="text" class="form-control" id="pass" name="pass">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<label for="telp">Nomor Telepon</label>
							<input type="number" class="form-control" id="telp" name="telp">
						</div>
						<div class="form-group col-md">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg">
							<button type="submit" id="kirim" name="kirim" class="btn btn-primary btn-block rounded"><i class="fas fa-user-plus"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<h5 class="h5 mb-2 text-gray-800">Daftar Admin</h5>
	</div>

	<div class="col-lg-12 table-responsive">
		<table class="table table-hover" style="font-size: 14px;" id="table_id">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col" width="5%">No</th>
					<th scope="col" width="15%">Nama</th>
					<th scope="col" width="10%">Username</th>
					<th scope="col" width="10%">Password</th>
					<th scope="col" width="15%">Email</th>
					<th scope="col" width="10%">Telepon</th>
					<th scope="col" width="10%">Level</th>
					<th scope="col" width="10%">Bergabung</th>
					<th scope="col" style="width:100px;">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($ta)) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Tidak ada admin.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<?php $start = 0;
				foreach ($ta as $row) : ?>
					<tr>
						<th scope="row" width="5%" style="text-align: center;"><?= ++$start; ?></th>
						<td width="10%"><?= $row['nama']; ?></td>
						<td width="10%"><?= $row['user']; ?></td>
						<td width="10%"><?= $row['pass']; ?></td>
						<td width="10%"><?= $row['email']; ?></td>
						<td width="10%"><?= $row['telp']; ?></td>
						<td width="10%" style="text-align: center;">
							<?php switch ($row['level']) {
									case '0':
										echo "0 Super Admin";
										break;
									case '1':
										echo "1 Admin Pelayanan";
										break;
									case '2':
										echo "2 Admin Data Center";
										break;
									case '3':
										echo "3 Admin Pemasangan Jaringan";
										break;
									case '4':
										echo "4 Admin Keluhan";
										break;
									default:
										# code...
										break;
								}
								?>
						</td>
						<td width="10%" style="text-align: center;"><?= $row['bergabung']; ?></td>
						<?php if ($row['level'] == 0) : ?>
							<td class="text-center">
								<a href="<?= base_url('/') ?>admin/editta/<?= $row['id']; ?>" class="btn btn-sm btn-success" role="button" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
							<?php else : ?>
							<td class="text-center">
								<a href="<?= base_url('/') ?>admin/editta/<?= $row['id']; ?>" class="btn btn-sm btn-success" role="button" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
								<a href="<?= base_url('/') ?>admin/hapusta/<?= $row['id']; ?>" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus <?= $row['nama']; ?>  ?')" data-toggle="tooltip" data-placement="right" title="Hapus"><i class="fas fa-fw fa-trash-alt"></i></a>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<div class="col-sm-12 col-md-12 col-lg-12 align-items-center">
		<div class="card">
			<h5 class="card-header">Keterangan Level</h5>
			<div class="card-body">
				<p class="card-text">
					<table>
						<tr>
							<td valign="top" width="35%">
								Level 0 (Super Admin)
							</td>
							<td valign="top" width="2.5%">
								=
							</td>
							<td valign="top" width="62.5%">
								Mengakses semua formulir dan PDF laporan serta menambahkan admin, fakultas, jurusan dan perihal keluhan.
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								<hr>
							</td>
						</tr>
						<tr>
							<td valign="top" width="35%">
								Level 1 (Admin Pelayanan)
							</td>
							<td valign="top" width="2.5%">
								=
							</td>
							<td valign="top" width="62.5%">
								Mengakses semua formulir dan PDF laporan.
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								<hr>
							</td>
						</tr>
						<tr>
							<td valign="top" width="35%">
								Level 2 (Admin Data Center)
							</td>
							<td valign="top" width="2.5%">
								=
							</td>
							<td valign="top" width="62.5%">
								Mengakses formulir data center.
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								<hr>
							</td>
						</tr>
						<tr>
							<td valign="top" width="35%">
								Level 3 (Admin Pemasangan Jaringan)
							</td>
							<td valign="top" width="2.5%">
								=
							</td>
							<td valign="top" width="62.5%">
								Mengakses formulir pemasangan jaringan.
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								<hr>
							</td>
						</tr>
						<tr>
							<td valign="top" width="35%">
								Level 4 (Admin Keluhan)
							</td>
							<td valign="top" width="2.5%">
								=
							</td>
							<td valign="top" width="62.5%">
								Mengakses semua formulir keluhan.
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								<hr>
							</td>
						</tr>
					</table>
				</p>
			</div>
		</div>
	</div>
</div>