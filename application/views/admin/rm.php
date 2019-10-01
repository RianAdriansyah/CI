
        <div class="breadcrumbs">
            <div class="col-dm">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Formulir Reset Password Email Mahasiswa</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

        	<div class="col-sm-10">
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
                <?php if($this->session->flashdata('dhp')) : ?>
			  		<div class="alert alert-success alert-dismissible fade show" role="alert">
					  1 Formulir berhasil dihapus !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
			  	<?php endif; ?>
			  	<?php if($this->session->flashdata('edit')) : ?>
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
				  	<?php if(empty($rm)) : ?>
				  		<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Tidak ada formulir.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							</button>
						</div>
				  	<?php endif; ?>
				  	<?php foreach ($rm as $row ) : ?>
					    <tr>
					      <th scope="row" style="text-align: center;"><?= ++$start; ?></th>
					      <td><?= $row['nim']; ?></td>
					      <td><?= $row['nama']; ?></td>
					      <td><a href="https://wa.me/<?= $row['telp']; ?>?text=Selamat,%20akun%20email%20anda%20sudah%20reset%20password%20%7C%20Email%20=%20<?= $row['nim']; ?>@student.uinsgd.ac.id%20%7C%20Password%20=%20uinbandung" target="_blank"><?= $row['telp']; ?></a></td>
					      <td><?= $row['tanggal']; ?></td>
					      <td class="text-center">
					      	<?php
						      	if ($row['status'] == "Belum Dikerjakan"){
						      		echo "<span class='badge badge-danger'>Belum Dikerjakan</span>";
						      	}else{
						      		echo "<span class='badge badge-success'>Sudah Dikerjakan</span>";
						      	}
					      	?>
					      </td>

					      <td><a href="<?= base_url('/') ?>admin/editrm/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-success" role="button">Edit</a></td>

					      <td><a href="<?= base_url('/') ?>admin/detailrm/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-primary" role="button">Detail</a></td>

					      <td><a href="<?= base_url('/') ?>admin/hapusrm/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus formulir ini ?')">Hapus</a></td>
					    </tr>
					<?php endforeach; ?>
				  </tbody>
				</table>		
            </div>

            <div class="col-sm-12 col-lg-12">
            	<?= $this->pagination->create_links(); ?>
            </div>

            <script type="text/javascript">
			    function autoRefreshPage()
			    {
			        window.location = window.location.href;
			    }
			    setInterval('autoRefreshPage()', 60000);
			</script>

            