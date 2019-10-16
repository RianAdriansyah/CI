<div class="breadcrumbs">
    <div class="col-dm">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah unit</h1>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

    <div class="col-sm-12">
        <?php if ($this->session->flashdata('tambahtu')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                1 unit berhasil ditambahkan !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('hapustu')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                1 unit berhasil dihapus !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('edittu')) : ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                1 unit berhasil diedit !
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
                        <div class="form-group col-sm-5">
                            <label for="unit">Nama Unit</label>
                        </div>
                        <div class="form-group col-sm-10">
                            <input type="text" class="form-control" id="unit" name="unit">
                        </div>
                        <div class="form-group col-sm-2">
                            <button type="submit" id="kirim" name="kirim" class="btn btn-primary btn-block rounded"><i class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <h5 class="h5 mb-2 text-gray-800">Daftar Unit</h5>
    </div>

    <div class="col-lg-12 table-responsive">
        <table class="table table-hover" style="font-size: 14px;" id="table_id">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col" width="10%">No</th>
                    <th scope="col" width="70%">Nama Unit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($tu)) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Unit Kosong.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php $start = 0;
                foreach ($tu as $row) : ?>
                    <tr>
                        <th scope="row" width="10%" style="text-align: center;"><?= ++$start; ?></th>
                        <td width="70%"><?= $row['unit']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('/') ?>admin/edittu/<?= $row['id']; ?>" class="btn btn-sm btn-success" role="button" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                            <a href="<?= base_url('/') ?>admin/hapustu/<?= $row['id']; ?>" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus <?= $row['unit']; ?> ?')" data-toggle="tooltip" data-placement="right" title="Hapus"><i class="fas fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
    </div>
</div>