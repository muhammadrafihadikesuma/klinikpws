<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/dashboard.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/dashboard.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-heading">Pages Data </li>

    <!-- Data Pasien -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pasien.php') { ?> class="nav-link" <?php } else if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/forms/edit_pasien.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/pasien.php">
        <i class="bi bi-journal-medical" style="font-size: 18px;"></i>
        <span>Data Pasien</span>
      </a>
    </li>

    <!-- Data Penyakit -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/penyakit.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/penyakit.php">
        <i class="bi bi-journal-medical" style="font-size: 18px;"></i>
        <span>Data Penyakit</span>
      </a>
    </li>

    <!-- Data Pendaftaran -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/pendaftaran.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/pendaftaran.php">
        <i class="bi bi-journal-medical"></i>
        <span>Data Pendaftaran</span>
      </a>
    </li>

    <!-- Antrian -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/antrian.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/antrian.php">
        <i class="bi bi-journal-medical"></i>
        <span>Data Antrian</span>
      </a>
    </li>

    <!-- Diagnosa -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/pages/diagnosa.php">
        <i class="bi bi-journal-medical"></i>
        <span>Diagnosa</span>
      </a>
    </li>

    <!-- Apoteker -->
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == '/klinikpws/pages/apoteker.php') { ?> class="nav-link" <?php } else { ?> class="nav-link collapsed" <?php } ?> href="/klinikpws/pages/apoteker.php">
        <i class="bi bi-journal-medical"></i>
        <span>Apoteker</span>
      </a>
    </li>

    <!-- STOK OBAT -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-obat" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Stok Obat</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-obat" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="/klinikpws/pages/obat.php">
            <i class="bi bi-circle"></i><span>Data Obat</span>
          </a>
        </li>
        <li>
          <a href="/klinikpws/pages/stock_obat.php">
            <i class="bi bi-circle"></i><span>Stock Obat</span>
          </a>
        </li>
        <li>
          <a href="/klinikpws/forms/obat_masuk.php">
            <i class="bi bi-circle"></i><span>Obat Masuk</span>
          </a>
        </li>
        <li>
          <a href="/klinikpws/forms/obat_keluar.php">
            <i class="bi bi-circle"></i><span>Obat Keluar</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <!-- Rujukan -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/pages/rujukan.php">
        <i class="bi bi-journal-medical"></i>
        <span>Rujukan</span>
      </a>
    </li>

    <li class="nav-heading">Pages Input</li>

    <!-- Pasien -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/forms/add_pasien.php">
        <i class="bi bi-journal-text"></i>
        <span>Input Pasien</span>
      </a>
    </li>

    <!-- Pendaftaran -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/forms/add_pendaftaran.php">
        <i class="bi bi-journal-text"></i>
        <span>Pendaftaran</span>
      </a>
    </li>

    <!-- Penyakit -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/forms/add_penyakit.php">
        <i class="bi bi-journal-text"></i>
        <span>Penyakit</span>
      </a>
    </li>

    <li class="nav-heading">Pages Other</li>

    <!-- REKAM MEDIS -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/pages/rekam_medis.php">
        <i class="bi bi-journal-text"></i>
        <span>Rekam Medis</span>
      </a>
    </li>
    <!-- END OFF REKAM MEDIS -->

    <!-- Laporan -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/forms/laporan.php">
        <i class="bi bi-card-list"></i>
        <span>Laporan</span>
      </a>
    </li>
    <!-- End Off Laporan -->

    <!-- STOK OBAT -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/pages/stok_obat.php">
        <i class="bi bi-card-list"></i>
        <span>Stok Obat</span>
      </a>
    </li>
    <!-- End Off Laporan -->

    <!-- User -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/klinikpws/forms/add_user.php">
        <i class="bi bi-card-list"></i>
        <span>USER</span>
      </a>
    </li>
    <!-- End User -->
  </ul>
</aside>

<!-- End Sidebar-->