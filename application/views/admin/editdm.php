<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Edit Formulir Pendaftaran Email Mahasiswa</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">
	<div class="col-sm-12">
		<div class="container">
			<div class="card" style="margin-top: 40px; margin-bottom: 40px">
				<div class="card-body">
					<form style="padding: 5px; margin-top: 10px; margin-bottom: 20px;" action="" method="post">
						<?php if (validation_errors()) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<?= validation_errors(); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif; ?>
						<div class="form-row">
							<div class="form-group col-md">
								<label for="nama">Nama Lengkap</label>
								<input value="<?= $edit['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
								<?php date_default_timezone_set('Asia/Jakarta'); ?>
								<input type="hidden" name="id" value="<?= $edit['id'] ?>">
								<input type="hidden" name="tanggal" value="<?= $edit['tanggal'] ?>">
								<input type="hidden" id="m" name="m" value="<?= $edit['m'] ?>">
								<input type="hidden" id="y" name="y" value="<?= $edit['y'] ?>">
								<input type="hidden" name="jam" value="<?= $edit['jam'] ?>">
								<input type="hidden" id="edit" name="edit" value="<?php echo date("d.m.Y H:i:s") . (' oleh ') . $admin['nama'] ?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md">
								<label for="nim">NIM</label>
								<input value="<?= $edit['nim'] ?>" type="text" class="form-control" id="nim" name="nim">
							</div>
							<div class="form-group col-md">
								<label for="telp">Nomor Telepon</label>
								<input value="<?= $edit['telp'] ?>" type="text" class="form-control" id="telp" name="telp">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md">
								<label for="fakultas">Fakultas</label>
								<select id="fakultas" name="fakultas" class="form-control">
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
						<div class="form-row">
							<div class="form-group col-md">
								<label for="email">Email</label>
								<input value="<?= $edit['email'] ?>" type="text" class="form-control" id="email" name="email">
							</div>
							<div class="form-group col-md">
								<label for="status">Status</label>
								<select id="status" name="status" class="form-control">
									<?php foreach ($status as $s) : ?>
										<?php if ($s == $edit['status']) : ?>
											<option value="<?= $s; ?>" selected><?= $s; ?></option>
										<?php else : ?>
											<option value="<?= $s; ?>"><?= $s; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md">
								<label for="unit">Unit</label>
								<select id="unit" name="unit" class="form-control">
									<?php foreach ($unit as $u) : ?>
										<?php if ($u['unit'] == $edit['unit']) : ?>
											<option value="<?= $u['unit']; ?>" selected><?= $u['unit']; ?></option>
										<?php else : ?>
											<option value="<?= $u['unit']; ?>"><?= $u['unit']; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md">
								<a type="button" class="btn btn-primary btn-block" href="<?= base_url('/'); ?>admin/dm"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
							</div>
							<div class="form-group col-md">
								<button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block"><i class="fa fa-floppy-o"></i> Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>