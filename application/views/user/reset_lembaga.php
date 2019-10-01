<div class="container">
	<div class="card" style="margin-top: 40px; margin-bottom: 40px">
		<div class="card-header">
			<center>
				<h1>FORMULIR RESET PASSWORD EMAIL LEMBAGA</h1>
			</center>
		</div>
		<div class="card-body">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<?= validation_errors(); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata('rl')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Selamat, <b>Formulir <?= $this->session->flashdata('rl'); ?></b> telah berhasil dikirim, silahkan tunggu 2x24 jam untuk pemrosesan formulir. Jika formulir sudah dikerjakan, kami akan mengirim pesan pemberitahuan via <b>WhatsApp</b> ...
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<form style="padding: 5px; margin-top: 10px; margin-bottom: 20px;" action="" method="post">
				<div class="form-row">
					<div class="form-group col-md">
						<label for="nama_lembaga">Nama Lembaga</label>
						<input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md">
						<label for="nama_penanggung">Nama Penanggung Jawab</label>
						<input type="text" class="form-control" id="nama_penanggung" name="nama_penanggung">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md">
						<label for="email">Email Yang Ingin Diajukan</label>
						<input type="text" placeholder="Contoh : namalembaga@uinsgd.ac.id" class="form-control" id="email" name="email">
					</div>
					<div class="form-group col-md">
						<label for="telp">Nomor Telepon</label>
						<input type="number" placeholder="Contoh : 6282128579730" class="form-control" id="telp" name="telp">
					</div>
				</div>
				<?php date_default_timezone_set('Asia/Jakarta'); ?>
				<input type="hidden" id="edit" name="edit" value="Belum Di Edit">
				<input type="hidden" id="status" name="status" value="Belum Dikerjakan">
				<input type="hidden" id="tanggal" name="tanggal" value="<?= date("d.m.Y") ?>">
				<input type="hidden" id="m" name="m" value="<?= date("m") ?>">
				<input type="hidden" id="y" name="y" value="<?= date("Y") ?>">
				<input type="hidden" id="jam" name="jam" value="<?= date("H:i:s") ?>">
				<br><button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block">Kirim Formulir</button>
			</form>
		</div>
	</div>
</div>