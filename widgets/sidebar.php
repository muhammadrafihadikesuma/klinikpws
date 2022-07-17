<!-- ======= Sidebar ======= -->
<?php
//untuk ambil nama file
// $page = trim(strtolower(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))));
?>

<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/dashboard.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/dashboard.php">
        <i class="fa-solid fa-house-chimney-medical" style="width: 18px;"></i></i>
        <span>Dashboard</span>
      </a>

    </li><!-- End Dashboard Nav -->

    <!-- Pages Registration -->
    <li class="nav-heading">Pages Registration</li>

    <!-- Form Registration -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pendaftaran.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_pendaftaran.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/antrian.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/diagnosa.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/apoteker.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/rujukan.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed " <?php } ?> data-bs-target="#registration-nav" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-id-card-clip" style="width: 18px;"></i><span>Form Registration</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="registration-nav" <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pendaftaran.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_pendaftaran.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/antrian.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/diagnosa.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/apoteker.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/rujukan.php') { ?> class="nav-content collapse show" <?php } else { ?> class="nav-content collapse " <?php } ?> data-bs-parent="#sidebar-nav">

        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pendaftaran.php') { ?> class="active" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_pendaftaran.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/pendaftaran.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i>
            <span>Pendaftaran</span>
          </a>
        </li>

        <!-- ANTRIAN -->
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/antrian.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/antrian.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i>
            <span>Antrian</span>
          </a>
        </li>

        <!-- Diagnosa -->
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/diagnosa.php') { ?> class="active" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/add_diagnosa.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/diagnosa.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i>
            <span>Diagnosa</span>
          </a>
        </li>

        <!-- Apoteker -->
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/apoteker.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/apoteker.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i>
            <span>Apoteker</span>
          </a>
        </li>

        <!-- Rujukan -->
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/rujukan.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/rujukan.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i>
            <span>Rujukan</span>
          </a>
        </li>

      </ul>
    </li>
    <!-- End Forms Nav -->

    <!-- Follow Up -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/leveli.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/levelii.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/leveliii.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed " <?php } ?> data-bs-target="#followup-nav" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-heart-circle-bolt" style="width: 18px;"></i><span>Follow Up</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="followup-nav" <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/leveli.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/levelii.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/leveliii.php') { ?> class="nav-content collapse show" <?php } else { ?> class="nav-content collapse " <?php } ?> data-bs-parent="#sidebar-nav">
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/leveli.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href='/klinikpws/pages/leveli.php'>
            <i class="bi bi-circle" style="font-size: 10px;"></i><span>Level I</span>
          </a>
        </li>
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/levelii.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href='/klinikpws/pages/levelii.php'>
            <i class="bi bi-circle" style="font-size: 10px;"></i><span>Level II</span>
          </a>
        </li>
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/leveliii.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href='/klinikpws/pages/leveliii.php'>
            <i class="bi bi-circle" style="font-size: 10px;"></i><span>Level III</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-heading">Pages Data </li>

    <!-- Master Data -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pasien.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_pasien.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/penyakit.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_penyakit.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed " <?php } ?> data-bs-target="#masterdata-nav" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-laptop-medical" style="width: 18px;"></i></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="masterdata-nav" <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pasien.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_pasien.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/penyakit.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_penyakit.php') { ?> class="nav-content collapse show" <?php } else { ?> class="nav-content collapse " <?php } ?> data-bs-parent="#sidebar-nav">

        <!-- DATA PASIEN -->
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pasien.php') { ?> class="active" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_pasien.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/pasien.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i>
            <span>Data Pasien</span>
          </a>
        </li>

        <!-- PENYAKIT -->
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/penyakit.php') { ?> class="active" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_penyakit.php') { ?> class="active" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/penyakit.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i>
            <span>Data Penyakit</span>
          </a>
        </li>

      </ul>
    </li>
    <!-- End Forms Nav -->

    <!-- STOK OBAT -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/obat.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/stock_obat.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/obat_masuk.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/obat_keluar.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed " <?php } ?> data-bs-target="#forms-obat" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-suitcase-medical" style="width: 18px;"></i></i><span>Stok Obat</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-obat" <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/obat.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/stock_obat.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/obat_masuk.php') { ?> class="nav-content collapse show" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/obat_keluar.php') { ?> class="nav-content collapse show" <?php } else { ?> class="nav-content collapse " <?php } ?> data-bs-parent="#sidebar-nav">
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/obat.php') { ?> class="active" <?php } else { ?> class="collapsed" <?php } ?> href='/klinikpws/pages/obat.php'>
            <i class="bi bi-circle" style="font-size: 10px;"></i></i><span>Data Obat</span>
          </a>
        </li>
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/stock_obat.php') { ?> class="active" <?php } else { ?> class="collapsed" <?php } ?> href='/klinikpws/pages/stock_obat.php'>
            <i class="bi bi-circle" style="font-size: 10px;"></i></i><span>Stock Obat</span>
          </a>
        </li>
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/obat_masuk.php') { ?> class="active" <?php } else { ?> class="collapsed" <?php } ?> href="/klinikpws/forms/obat_masuk.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i><span>Obat Masuk</span>
          </a>
        </li>
        <li>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/obat_keluar.php') { ?> class="active" <?php } else { ?> class="collapsed" <?php } ?> href="/klinikpws/forms/obat_keluar.php">
            <i class="bi bi-circle" style="font-size: 10px;"></i><span>Obat Keluar</span>
          </a>
        </li>
      </ul>
    </li>

    <!-- Pages Other -->
    <li class="nav-heading">Pages Other</li>

    <!-- REKAM MEDIS -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/pages/rekam_medis.php">
        <i class="fa-solid fa-file-waveform" style="width: 18px;"></i>
        <span>Rekam Medis</span>
      </a>
    </li>
    <!-- END OFF REKAM MEDIS -->

    <!-- Laporan -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/forms/laporan.php">
        <i class="fa-solid fa-book-medical" style="width: 18px;"></i>
        <span>Laporan</span>
      </a>
    </li>
    <!-- End Off Laporan -->

    <!-- User -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/forms/add_user.php">
        <i class="bi bi-person-fill" style="width: 18px;"></i>
        <span>USER</span>
      </a>
    </li>
    <!-- End User -->
  </ul>
</aside>

<!-- End Sidebar-->