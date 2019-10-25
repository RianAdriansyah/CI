<div class="breadcrumbs">
    <div class="col-dm">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Divisi</h1>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

    <div class="col-sm-12">
        <?php if ($this->session->flashdata('tdivisi')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                1 Divisi berhasil ditambahkan !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('dhp')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                1 Divisi berhasil dihapus !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('edit')) : ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                1 Divisi berhasil diedit !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (validation_errors()) : ?>
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
                            <label for="divisi">Divisi</label>
                        </div>
                        <!-- <div class="form-group col-md">
                            <label for="perihal">Perihal</label>
                        </div> -->
                        <div class="form-group col-md">
                            <label for="email">Email</label>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="divisi" name="divisi">
                        </div>
                        <!-- <div class="form-group col-md-4">
                            <select id="dperihal" name="dperihal" class="form-control">
                                <option value="" disabled selected>-- Pilih Perihal --</option>
                                <?php
                                foreach ($perihal as $u) {
                                    ?>
                                    <option value="<?= $u['perihal']; ?>"><?= $u['perihal']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <?= form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group col-md">
                            <button type="submit" id="kirim" name="kirim" class="btn btn-primary btn-block rounded"><i class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <h5 class="h5 mb-2 text-gray-800">Daftar Divisi</h5>
</div>

<div class="col-lg-12 table-responsive">
    <table class="table table-hover" style="font-size: 14px;" id="table_id">
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col" width="10%">No</th>
                <th scope="col" width="30%">Divisi</th>
                <th scope="col" width="20%">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($ddivisi)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Divisi Kosong.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php $start = 0;
            foreach ($ddivisi as $row) : ?>
                <tr>
                    <th scope="row" width="10%" style="text-align: center;"><?= ++$start; ?></th>
                    <td width="30%"><?= $row['namadivisi']; ?></td>
                    <td width="20%"><?= $row['email']; ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('/') ?>admin/editdivisi/<?= $row['id']; ?>" class="btn btn-sm btn-success" role="button" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                        <a href="<?= base_url('/') ?>admin/hapustdivisi/<?= $row['id']; ?>" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus <?= $row['namadivisi']; ?> ?')" data-toggle="tooltip" data-placement="right" title="Hapus"><i class="fas fa-fw fa-trash-alt"></i></a>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
</div>
</div>