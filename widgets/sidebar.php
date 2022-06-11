  <!-- ======= Sidebar ======= -->

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="home.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-heading">Pages Data </li>

      <!-- Data Pasien -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>DATA PASIEN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../pages/pasien.php">
              <i class="bi bi-circle"></i><span>Data Pasien</span>
            </a>
          </li>
          <li>
            <a href="../pages/penyakit.php">
              <i class="bi bi-circle"></i><span>Data Penyakit</span>
            </a>
          </li>
          <li>
            <a href="../pages/pendaftaran.php">
              <i class="bi bi-circle"></i><span>Data Pendaftaran</span>
            </a>
          </li>
          <li>
            <a href="../pages/antrian.php">
              <i class="bi bi-circle"></i><span>Data Antrian</span>
            </a>
          </li>
          <li>
            <a href="../pages/diagnosa.php">
              <i class="bi bi-circle"></i><span>Data Diagnosa</span>
            </a>
          </li>
          <li>
            <a href="../pages/apoteker.php">
              <i class="bi bi-circle"></i><span>Data Apoteker</span>
            </a>
          </li>
          <li>
            <a href="../pages/rujukan.php">
              <i class="bi bi-circle"></i><span>Data Rujukan</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Off Data Pasien -->

      <li class="nav-heading">Pages Input</li>

      <!-- Form Input -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Form Input Pasien</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../forms/pasien.php">
              <i class="bi bi-circle"></i><span>Pasien</span>
            </a>
          </li>
          <li>
            <a href="../forms/pendaftaran.php">
              <i class="bi bi-circle"></i><span>Pendaftaran</span>
            </a>
          </li>
          <li>
            <a href="../forms/penyakit.php">
              <i class="bi bi-circle"></i><span>Penyakit</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Off Form Input -->

      <li class="nav-heading">Pages Other</li>

      <!-- REKAM MEDIS -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="rekam_medis.php">
          <i class="bi bi-journal-text"></i>
          <span>REKAM MEDIS</span>
        </a>
      </li>
      <!-- END OFF REKAM MEDIS -->

      <!-- Laporan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="../forms/laporan.php">
          <i class="bi bi-card-list"></i>
          <span>LAPORAN</span>
        </a>
      </li>
      <!-- End Off Laporan -->

     <!-- User -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="../forms/add_user.php">
          <i class="bi bi-card-list"></i>
          <span>USER</span>
        </a>
      </li>
      <!-- End User -->
    </ul>
  </aside>

  <!-- End Sidebar-->