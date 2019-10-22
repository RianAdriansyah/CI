<style>
*{
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>

	<div class="container-fluid">
		<div class="row">
		    <div class="col-md-6 homead1">
		    	<img src="<?php echo base_url("/assets/img/bg.jpg"); ?>" width="100%" height="100%">
		    </div>
		    <div class="col-md-6 homead2">
		    	<img src="<?= base_url('/') ?>assets/img/logo2.png" width="420" height="170">
		    	<p style="color: #9c9c9c;">Hello Admin ...</p><br>

		    	<?php if(validation_errors() ) : ?>
			  		<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?= validation_errors(); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>

			  	<?= $this->session->flashdata('01'); ?>
			  	<?= $this->session->flashdata('02'); ?>
			  	<?= $this->session->flashdata('03'); ?>

				<br>
		    	<form action="" method="post">
				  
				  <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="far fa-user-circle"></i></div>
                            </div>
                            <input type="text" class="form-control" id="user" name="user" placeholder="Username">
                        </div>
                    </div>
				  <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                            </div>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                        </div>
                    </div>
				  
				  <button type="submit" class="btn btn-success btn-block">Login</button>
				</form>
		    	<div class="homead3"><a href="<?= base_url(); ?>user/about" style="text-decoration: none;color: gray;">About Us</a>&emsp; Copyright © UIN Sunan Gunung Djati Bandung 2019</div>
		    </div>
		</div>
	</div>
