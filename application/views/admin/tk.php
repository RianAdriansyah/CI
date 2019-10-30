<div class="container">
    <div class="card" style="margin-top: 40px;margin-bottom: 40px">
        <div class="card-header">
            <center>
                <h1>FORMULIR KELUHAN</h1>
            </center>
        </div>
        <div class="card-body">

            <form style="padding: 5px; margin-top: 10px; margin-bottom: 20px;" action="" method="post">
                <div class="alert alert-danger" role="alert">
                    <div class="form-row">
                        <label for="">
                            <b>&nbsp;Status</b>
                        </label>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <input type="radio" value="Enable" name="rdbutton" required> Dosen / Mahasiswa
                        </div>
                        <div class="form-group col-md-2">
                            <input type="radio" value="Disabled" name="rdbutton" required> Lembaga
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="ni">NIM / NIP <sup>*</sup></label>
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
                        <label for="fakultas">Fakultas</label> <br>
                        <select id="fakultas" name="fakultas" class="form-control" disabled>
                            <option value="" disabled selected>-- Pilih Fakultas --</option>
                            <?php
                            foreach ($fakultas as $f) {
                                ?>
                                <option <?php echo $fakultas_selected == $f->fakultas ? 'selected="selected"' : '' ?>value="<?php echo $f->fakultas ?>"><?php echo $f->fakultas ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <?= form_error('fakultas', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group col-md">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" name="jurusan" class="form-control" disabled>
                            <option value="" disabled selected>-- Pilih Jurusan --</option>
                            <?php
                            foreach ($jurusan as $j) {
                                ?>
                                <option <?php echo $jurusan_selected == $j->jfakultas ? 'selected="selected"' : '' ?>class="<?php echo $j->jfakultas ?>" value="<?php echo $j->jurusan ?>"><?php echo $j->jurusan ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="unit">Unit</label> <br>
                        <select id="unit" name="unit" class="form-control" Disabled>
                            <option value="" disabled selected>-- Pilih Unit --</option>
                            <?php
                            foreach ($unit as $u) {
                                ?>
                                <option value="<?= $u['unit']; ?>"><?= $u['unit']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <?= form_error('unit', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md">

                        <label for="divisi">Divisi</label>
                        <select id="divisi" name="divisi" class="form-control">
                            <option value="" disabled selected>-- Pilih Divisi --</option>
                            <?php
                            foreach ($divisi as $f) {
                                ?>
                                <option <?php echo $divisi_selected == $f->namadivisi ? 'selected="selected"' : '' ?>value="<?php echo $f->namadivisi ?>"><?php echo $f->namadivisi ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group col-md">
                        <label for="perihal">Perihal Keluhan</label>
                        <select id="perihal" name="perihal" class="form-control">
                            <option value="" disabled selected>-- Pilih Perihal --</option>
                            <?php
                            foreach ($perihal as $j) {
                                ?>
                                <option <?php echo $perihal_selected == $j->pdivisi ? 'selected="selected"' : '' ?>class="<?php echo $j->pdivisi ?>" value="<?php echo $j->perihal ?>"><?php echo $j->perihal ?></option>
                            <?php
                            }
                            ?>
                            }
                            ?>
                        </select>
                        <?= form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="keluhan">Deskripsi Keluhan</label>
                        <textarea class="form-control" id="keluhan" name="keluhan" rows="4" placeholder="diisi dengan jelas" value="<?= set_value('keluhan'); ?>"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <div class="alert alert-info" role="alert">
                            * = Tidak perlu di isi jika tidak ada.
                        </div>
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

                <div class="form-row">
                    <div class="form-group col-md">
                        <a type="button" class="btn btn-primary btn-block" href="<?= base_url('/'); ?>admin/k"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                    </div>
                    <div class="form-group col-md">
                        <button type="submit" id="kirim" name="kirim" class="btn btn-success btn-block">Kirim Formulir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>