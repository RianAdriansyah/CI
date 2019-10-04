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
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control" id="unit" name="unit">
                        </div>
                        <div class="form-group col-sm-4">
                            <button type="submit" id="kirim" name="kirim" class="btn btn-primary btn-block">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        Daftar Unit
    </div>

    <div class="col-sm-12 col-lg-12">
        <table class="table" style="font-size: 12.5px;">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col" width="10%">No</th>
                    <th scope="col" width="70%">Nama Unit</th>
                    <th colspan="2" scope="col">Action</th>
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
                        <td><a href="<?= base_url('/') ?>admin/edittu/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-success" role="button">Edit</a></td>
                        <td><a href="<?= base_url('/') ?>admin/hapustu/<?= $row['id']; ?>" class="btn btn-block btn-sm btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus <?= $row['unit']; ?> ?')">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>