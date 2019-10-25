<style>
	.card {
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	}
</style>

<div class="container">
	<div class="card" style="margin-top: 40px;margin-bottom: 40px">
		<div class="card-header">
			<center>
				<h1>FORMULIR PERGANTIAN SERVER DATA CENTER</h1>
			</center>
		</div>
		<div class="card-body">

			<?php if ($this->session->flashdata('gs')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Selamat, <b><?= $this->session->flashdata('gs'); ?></b> telah berhasil dikirim, silahkan tunggu 2x24 jam untuk pemrosesan formulir. Jika formulir sudah kami periksa, kami akan mengirim pesan pemberitahuan via <b>WhatsApp</b> ...
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<form style="padding: 5px; margin-top: 10px; margin-bottom: 20px;" action="" method="post">
				<div class="form-row">
					<div class="form-group col-md">
						<label for="nama">Nama Lengkap</label>
						<input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
						<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md">
						<label for="ni">NIM / NIP</label>
						<input type="number" class="form-control" id="ni" name="ni" value="<?= set_value('ni'); ?>">
						<?= form_error('ni', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="col-md">
						<label for="telp">Nomor Telepon </label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">+62</div>
							</div>
							<input type="number" class="form-control" id="telp" name="telp" placeholder="Contoh : 81910186646" value="<?= set_value('telp'); ?>">
						</div>
						<?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md">
						<label for="permohonan">Permohonan</label>
						<textarea class="form-control" id="permohonan" name="permohonan" rows="4" value="<?= set_value('permohonan'); ?>"></textarea>
						<?= form_error('permohonan', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<?php date_default_timezone_set('Asia/Jakarta'); ?>
				<input type="hidden" id="edit" name="edit" value="Belum Di Edit">
				<input type="hidden" id="solusi" name="solusi" value="Belum Ada Solusi">
				<input type="hidden" id="status" name="status" value="Belum Dikerjakan">
				<input type="hidden" id="tanggal" name="tanggal" value="<?= date("d.m.Y") ?>">
				<input type="hidden" id="m" name="m" value="<?= date("m") ?>">
				<input type="hidden" id="y" name="y" value="<?= date("Y") ?>">
				<input type="hidden" id="jam" name="jam" value="<?= date("H:i:s") ?>">
				<input type="hidden" id="divisi" name="divisi" value="Pelayanan">
				<br><button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block">Kirim Formulir</button>
			</form>
		</div>
	</div>
</div>