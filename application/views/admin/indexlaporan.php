<style>
th {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>

<div class="breadcrumbs">
    <div class="col-dm">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>PDF Laporan</h1>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

    <div class="col-lg-6 col-md-6 col-sm-12">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= validation_errors(); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-content dib">
                    <form action="" method="post">
                        <div class="form-row">
                            <table class="table">
                                <tr>
                                    <th>Laporan</th>
                                    <th>
                                        <select id="l" name="l" class="form-control">
                                            <option value="laporandm">Pendaftaran Email Mahasiswa</option>
                                            <option value="laporandd">Pendaftaran Email Dosen</option>
                                            <option value="laporandl">Pendaftaran Email Lembaga</option>
                                            <option value="laporanrm">Reset Password Email Mahasiswa</option>
                                            <option value="laporanrd">Reset Password Email Dosen</option>
                                            <option value="laporanrl">Reset Password Email Lembaga</option>
                                            <option value="laporangs">Pergantian Server Data Center</option>
                                            <option value="laporandc">Kunjungan Data Center</option>
                                            <option value="laporanjb">Pemasangan Jaringan Baru</option>
                                            <option value="laporank">Keluhan</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Bulan</th>
                                    <th>
                                        <select id="m" name="m" class="form-control">
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th style="font-size: 18px;" class="stat-text text-dark">Tahun</th>
                                    <th>
                                        <select name="y" id="y" class="form-control">
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select>
                                        <!-- <input type="text" class="form-control" id="y" name="y"> -->
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <div class="float-right">
                                            <button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block rounded" formtarget="_blank"  data-toggle="tooltip" data-placement="right" title="Buka"><i class="fas fa-folder-open"></i></button>
                                        </div>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>