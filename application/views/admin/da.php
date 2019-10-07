<div class="breadcrumbs">
	<div class="col-dm">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Daftar Admin</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="col-lg-12 table-responsive">
		<table class="table" style="font-size: 12.5px;">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col" width="5%">No</th>
					<th scope="col" width="20%">Nama</th>
					<th scope="col" width="20%">Email</th>
					<th scope="col" width="20%">Telepon</th>
					<th scope="col" width="15%">Level</th>
					<th scope="col" width="20%">Bergabung</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($da)) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Tidak ada admin.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<?php $start = 0;
				foreach ($da as $row) : ?>
					<tr>
						<th scope="row" width="5%" style="text-align: center;"><?= ++$start; ?></th>
						<td width="20%"><?= $row['nama']; ?></td>
						<td width="20%"><?= $row['email']; ?></td>
						<td width="20%" style="text-align: center;"><?= $row['telp']; ?></td>
						<td width="15%" style="text-align: center;">
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
						<td width="20%" style="text-align: center;"><?= $row['bergabung']; ?></td>
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