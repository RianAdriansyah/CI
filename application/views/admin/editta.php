<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Edit Admin</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="col-sm-12">
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
							<label for="nama">Nama</label>
							<input value="<?= $edit['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
							<?php date_default_timezone_set('Asia/Jakarta'); ?>
							<input type="hidden" id="bergabung" name="bergabung" value="<?= $edit['bergabung'] ?>">
							<input type="hidden" name="id" value="<?= $edit['id'] ?>">
						</div>
						<div class="form-group col-md">
							<label for="level">Level</label>
							<select id="level" name="level" class="form-control">
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
										<?php if ($l == $edit['level']) : ?>
											<option value="<?= $l; ?>" selected><?= $lev; ?></option>
										<?php else : ?>
											<option value="<?= $l; ?>"><?= $lev; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<label for="user">Username</label>
							<input value="<?= $edit['user'] ?>" type="text" class="form-control" id="user" name="user">
						</div>
						<div class="form-group col-md">
							<label for="pass">Password</label>
							<input value="<?= $edit['pass'] ?>" type="text" class="form-control" id="pass" name="pass">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<label for="telp">Nomor Telepon</label>
							<input value="<?= $edit['telp'] ?>" type="number" class="form-control" id="telp" name="telp">
						</div>
						<div class="form-group col-md">
							<label for="email">Email</label>
							<input value="<?= $edit['email'] ?>" type="text" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md">
							<a type="button" class="btn btn-primary btn-block" href="<?= base_url('/'); ?>admin/ta"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
						</div>
						<div class="form-group col-md">
							<button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block"><i class="fa fa-floppy-o"></i> Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
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