<style>
.card{
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-2 mx-auto">
            <div class="card border-light" style="margin-top:170px;">
                <div class="card-header bg-light">
                    <h3 class="text-center">Form Pendaftaran dan Reset Password Email</h3>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-sm-5 offset-2 mx-auto">
                            <a href="<?= base_url(); ?>user/daftar_mahasiswa" class="btn btn-outline-success btn-md btn-block" role="button">Pendaftaran Email Mahasiswa</a>
                        </div>
                        <div class="col-sm-5 offset-2 mx-auto">
                            <a href="<?= base_url(); ?>user/reset_mahasiswa" class="btn btn-outline-success btn-md btn-block" role="button">Reset Password Email Mahasiswa</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5 offset-2 mx-auto">
                            <a href="<?= base_url(); ?>user/daftar_dosen" class="btn btn-outline-success btn-md btn-block" role="button">Pendaftaran Email Dosen</a>
                        </div>
                        <div class="col-sm-5 offset-2 mx-auto">
                            <a href="<?= base_url(); ?>user/reset_dosen" class="btn btn-outline-success btn-md btn-block" role="button">Reset Password Email Dosen</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5 offset-2 mx-auto">
                            <a href="<?= base_url(); ?>user/daftar_lembaga" class="btn btn-outline-success btn-md btn-block" role="button">Pendaftaran Email Lembaga</a>
                        </div>
                        <div class="col-sm-5 offset-2 mx-auto">
                            <a href="<?= base_url(); ?>user/reset_lembaga" class="btn btn-outline-success btn-md btn-block" role="button">Reset Password Email Lembaga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>