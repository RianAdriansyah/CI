<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <title><?= $judul ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?= base_url('/'); ?>assets/img/logo.png">
    <link rel="stylesheet" href="<?= base_url('/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>assets/css/style2.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>assets/dataTables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/style.css"); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/79bf77632a.js" crossorigin="anonymous"></script>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="<?= base_url('/'); ?>assets/img/logo.png" width="27" height="27"></i>&nbsp;PELAYANAN</a>
                <a class="navbar-brand hidden" href="#"><img src="<?= base_url('/'); ?>assets/img/logo.png" width="27" height="27"></i>&nbsp;</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= base_url('/'); ?>admin/dashboard" data-toggle="tooltip" data-placement="right" title="Dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <?php if ($admin['level'] == 0 || $admin['level'] == 1) : ?>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/indexlaporan" data-toggle="tooltip" data-placement="right" title="PDF Laporan"> <i class="menu-icon fa fa-book"></i>PDF Laporan </a>
                        </li>
                    <?php endif; ?>
                    <h3 class="menu-title">Formulir</h3><!-- /.menu-title -->
                    <?php if ($admin['level'] == 0 || $admin['level'] == 1) : ?>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="right" title="Formulir Pendaftaran Email"> <i class="menu-icon fa fa-envelope"></i>Pendaftaran Email</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-user-circle"></i><a href="<?= base_url('/'); ?>admin/dm">Mahasiswa</a></li>
                                <li><i class="fa fa-graduation-cap"></i><a href="<?= base_url('/'); ?>admin/dd">Dosen</a></li>
                                <li><i class="fa fa-university"></i><a href="<?= base_url('/'); ?>admin/dl">Lembaga</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="right" title="Formulir Reset Password Email"> <i class="menu-icon fa fa-key"></i>Reset Password Email</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-user-circle"></i><a href="<?= base_url('/'); ?>admin/rm">Mahasiswa</a></li>
                                <li><i class="fa fa-graduation-cap"></i><a href="<?= base_url('/'); ?>admin/rd">Dosen</a></li>
                                <li><i class="fa fa-university"></i><a href="<?= base_url('/'); ?>admin/rl">Lembaga</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if ($admin['level'] == 0 || $admin['level'] == 1 || $admin['level'] == 2) : ?>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="right" title="Data Center"> <i class="menu-icon fa fa-server"></i>Data Center</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-server"></i><a href="<?= base_url('/'); ?>admin/gs">Pergantian Server</a></li>
                                <li><i class="fa fa-server"></i><a href="<?= base_url('/'); ?>admin/dc">Kunjungan</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if ($admin['level'] == 0 || $admin['level'] == 1 || $admin['level'] == 4) : ?>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/k" data-toggle="tooltip" data-placement="right" title="Keluhan"> <i class="menu-icon fa fa-archive"></i>Keluhan</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($admin['level'] == 0 || $admin['level'] == 1 || $admin['level'] == 3) : ?>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/jb" data-toggle="tooltip" data-placement="right" title="Pemasangan Jaringan"> <i class="menu-icon fa fa-laptop"></i>Pemasangan Jaringan</a>
                        </li>
                    <?php endif; ?>
                    <h3 class="menu-title">Lainnya</h3><!-- /.menu-title -->
                    <?php if ($admin['level'] == 0) : ?>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/ta" data-toggle="tooltip" data-placement="right" title="Tambah Admin"> <i class="menu-icon fa fa-plus-circle"></i>Admin</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/tf" data-toggle="tooltip" data-placement="right" title="Tambah Fakultas"> <i class="menu-icon fa fa-plus-circle"></i>Fakultas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/tu" data-toggle="tooltip" data-placement="right" title="Tambah Unit"> <i class="menu-icon fa fa-plus-circle"></i>Unit</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/tj" data-toggle="tooltip" data-placement="right" title="Tambah Jurusan"> <i class="menu-icon fa fa-plus-circle"></i>Jurusan</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/tpk" data-toggle="tooltip" data-placement="right" title="Tambah Perihal Keluhan"> <i class="menu-icon fa fa-plus-circle"></i>Perihal Keluhan</a>
                        </li>
                    <?php endif; ?>
                    <?php if (!$admin['level'] == 0) : ?>
                        <li>
                            <a href="<?= base_url('/'); ?>admin/da" data-toggle="tooltip" data-placement="right" title="Daftar Admin"> <i class="menu-icon fa fa-user"></i>Daftar Admin</a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?= base_url('/'); ?>admin/about" data-toggle="tooltip" data-placement="right" title="About Us"> <i class="menu-icon fa fa-address-card"></i>About Us </a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#exampleModal" href="#" data-toggle="tooltip" data-placement="right" title="Logout"> <i class="menu-icon ti-power-off"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-hand-o-left"></i></a>
                </div>
                <div class="col-sm-5 ">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url('assets/img/profile/') . $admin['img']; ?>" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">

                            <p class="text-center mt-3" style="font-size: 14px;"><b><?= $admin['nama']; ?></b></p>

                            <hr>
                            <a class="nav-link" href="<?= base_url(); ?>admin/profile"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header>