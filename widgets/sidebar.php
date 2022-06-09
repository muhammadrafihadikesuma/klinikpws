<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#masters-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="masters-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="tables_master.php">
                <i class="bi bi-circle"></i><span>Master Data</span>
              </a>
            </li>
            <li>
              <a href="kode_inventaris.php">
                <i class="bi bi-circle"></i><span>Kode Inventaris</span>
              </a>
            </li>
            <li>
              <a href="input_datamaster.php">
                <i class="bi bi-circle"></i><span>Input Data</span>
              </a>
            </li>
          </ul>
        </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#terima-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt"></i><span>Tanda Terima</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="terima-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_tandaterima.php">
              <i class="bi bi-circle"></i><span>Data Tanda Terima</span>
            </a>
          </li>
          <li>
            <a href="input_tandaterima.php">
              <i class="bi bi-circle"></i><span>Input Tanda Terima</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#barang-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-gallery-upload-line"></i><span>Barang Keluar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="barang-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_barangkeluar.php">
              <i class="bi bi-circle"></i><span>Data Barang Keluar</span>
            </a>
          </li>
          <li>
            <a href="input_barangkeluar.php">
              <i class="bi bi-circle"></i><span>Input Barang Keluar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-windy-fill"></i><span>Analisa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_analisa.php">
              <i class="bi bi-circle"></i><span>Data Analisa</span>
            </a>
          </li>
          
        </ul>
      </li>
      <!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="order-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_order.php">
              <i class="bi bi-circle"></i><span>Data Order Lokal</span>
            </a>
          </li>
          <li>
            <a href="input_order.php">
              <i class="bi bi-circle"></i><span>Input Order Lokal</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#logbook-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-todo-line"></i><span>Logbook</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="logbook-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_logbook.php">
              <i class="bi bi-circle"></i><span>Data Logbook</span>
            </a>
          </li>
          <li>
            <a href="input_logbook.php">
              <i class="bi bi-circle"></i><span>Input Logbook</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Icons Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="data_user.php">
                <i class="bi bi-circle"></i><span>Data User</span>
              </a>
            </li>
            <li>
              <a href="input_user.php">
                <i class="bi bi-circle"></i><span>Input User</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="input_datamaster.php">
            <i class="bi bi-pencil-square"></i>
            <span>Input Data Master</span>
          </a>
        </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_tandaterima.php">
          <i class="bi bi-pencil-square"></i>
          <span>Input Tanda Terima</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_barangkeluar.php">
          <i class="bi bi-pencil-square"></i>
          <span>Input Barang Keluar</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_analisa.php">
          <i class="bi bi-pencil-square"></i>
          <span>Input Analisa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_order.php">
          <i class="bi bi-pencil-square"></i>
          <span>Input Order Lokal</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_logbook.php">
          <i class="bi bi-pencil-square"></i>
          <span>Input Logbook</span>
        </a>
      </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="input_user.php">
            <i class="bi bi-person"></i>
            <span>User</span>
          </a>
        </li>
      <!--       
      <li class="nav-item">
        <a class="nav-link collapsed" href="api_logout.php">
          <i class="bi bi-person"></i>
          <span>Logout</span>
        </a>
      </li> -->

    </ul>

  </aside><!-- End Sidebar-->