<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand judul2" href="<?= base_url(); ?>"><b style="color: white">PELAYANAN</b> <mark style="background-color: white;color: #28A745">UINSGD</mark></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
          Pilih Layanan Lain
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item bg-dark text-white"href="<?= base_url(); ?>user/pendaftaran">Form Pendaftaran</a>
          <div class="dropdown-divider"></div>

          <a class="dropdown-item bg-dark text-white"href="<?= base_url(); ?>user/pengajuan">Form Pengajuan Layanan</a>

          <div class="dropdown-divider"></div>

          <a class="dropdown-item bg-dark text-white"href="<?= base_url(); ?>user/keluhan">Form Keluhan</a>
          <!-- <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/daftar_mahasiswa">Pendaftaran Email Mahasiswa</a>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/daftar_dosen">Pendaftaran Email Dosen</a>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/daftar_lembaga">Pendaftaran Email Lembaga</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/reset_mahasiswa">Reset Password Email Mahasiswa</a>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/reset_dosen">Reset Password Email Dosen</a>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/reset_lembaga">Reset Password Email Lembaga</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/ganti_server">Pergantian Server Data Center</a>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/kunjungan_dc">Kunjungan Data center</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/keluhan">Formulir Keluhan</a>
          <a class="dropdown-item bg-dark" style="color: white" href="<?= base_url(); ?>user/jaringan_baru">Permohonan Pemasangan Jaringan Baru</a> -->
        </div>
      </li>
    </ul>
    </form>
  </div>
</nav>