
        <div class="breadcrumbs">
            <div class="col-dm">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Fakultas</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

        	<div class="col-sm-12">
			  	<?php if(validation_errors() ) : ?>
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
						      <label for="fakultas">Nama Fakultas</label>
						      <input value="<?= $edit['fakultas'] ?>" type="text" class="form-control" id="fakultas" name="fakultas">
						      <input type="hidden" name="id" value="<?= $edit['id'] ?>">
						      <input type="hidden" name="fakultaschain" value="<?= $edit['fakultas'] ?>">
						    </div>
						  </div>
						  <div class="form-row">
						  	<div class="form-group col-md">
						  		<a type="button" class="btn btn-primary btn-block" href="<?= base_url('/'); ?>admin/tf"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
						    </div>
						    <div class="form-group col-md">
						      <button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block"><i class="fa fa-floppy-o"></i> Simpan</button>
						    </div>
						  </div>
						</form>
					  </div>
					</div>
			</div>
            