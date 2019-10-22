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
                    <h3 class="text-center">Form Pengajuan Layanan</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 mx-auto">
                        <a href="<?= base_url(); ?>user/ganti_server" class="btn btn-outline-success btn-block" role="button">Pergantian Server Data Center</a>
                       
                        <a href="<?= base_url(); ?>user/kunjungan_dc" class="btn btn-outline-success btn-block" role="button">Kunjungan Data center</a>
                       
                        <a href="<?= base_url(); ?>user/jaringan_baru" class="btn btn-outline-success btn-block" role="button">Pemasangan Jaringan Baru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>