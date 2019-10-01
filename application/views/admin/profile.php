        <div class="breadcrumbs">
            <div class="col-dm">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>My Profile</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12 col-lg-12">
            	<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="<?= base_url('assets/img/profile/') . $admin['img']; ?>">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title"><?= $admin['nama']; ?></h5>
				        <hr>
				        <table>
				        	<tr>
				        		<td><p class="card-text">Username </td>
				        		<td><p class="card-text">: <?= $admin['user']; ?></td>
				        	</tr>
				        	<tr>
				        		<td><p class="card-text">Telepon </td>
				        		<td><p class="card-text">: <?= $admin['telp']; ?></td>
				        	</tr>
				        	<tr>
				        		<td><p class="card-text">Email </td>
				        		<td><p class="card-text">: <?= $admin['email']; ?></td>
				        	</tr>
				        	<tr>
				        		<td><p class="card-text">Level </td>
				        		<td><p class="card-text">: 
									<?php switch ($admin['level']) {
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
				        	</tr>
				        </table>
				        <p class="card-text"><small class="text-muted">Bergabung pada <?= $admin['bergabung'] ?></small></p>
				      </div>
				    </div>
				  </div>
				</div>    
            </div>

            