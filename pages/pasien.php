<?php
session_start();
require '../api/koneksi.php';
// require 'api_checksessions.php';
?>

<!-- ======= Header ======= -->
<?php require '../widgets/header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require '../widgets/sidebar.php'; ?>
<!-- End Sidebar-->

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA PASIEN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="input_pasien.php">Input Pasien</a></li>
                    <li class="breadcrumb-item active">Data Pasien</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data Pasien</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NO MR</th>
                                            <th>NAMA</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>NO BPJS</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>STATUS</th>
                                            <th>NAMAPEKERJA</th>
                                            <th>JABATAN PEKERJA</th>
                                            <th>STATUS</th>
                                            <th>NO HP</th>
                                            <th>ESTATE</th>
                                            <th>OP</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require "../api/koneksi.php";
                                        $sql = mysqli_query($koneksi, "SELECT * from tbl_pasien order by id_pasien Desc LIMIT 3000") or die("error karena" . mysqli_error($connection));
                                        $no = 1;
                                        while ($a = mysqli_fetch_array($sql)) {
                                            $id = $a['id_pasien'];
                                            $d1 = $a['nama_pasien'];
                                            $d2 = $a['jk'];
                                            $d3 = $a['no_bpjs'];
                                            $d4 = $a['tgl_lahir'];
                                            $d5 = $a['status_pasien'];
                                            $d6 = $a['nama_pekerja'];
                                            $d7 = $a['jabatan_pekerja'];
                                            $d8 = $a['status_pekerja'];
                                            $d9 = $a['nohp_pekerja'];
                                            $d10 = $a['estate'];
                                            $d11 = $a['op'];

                                        ?>
                                            <td><?php echo $no++;  ?></td>

                                            <td><?php echo  $id;  ?></td>

                                            <td><?php echo  $d1;  ?></td>

                                            <td>
                                                <?php
                                                if ($d2 == "1") {
                                                    echo "Laki-laki";
                                                } else {
                                                    echo "Perempuan";
                                                }
                                                ?>
                                            </td>

                                            <td><?php echo $d3;  ?></td>

                                            <td><?php echo $d4;  ?></td>

                                            <td>
                                                <?php
                                                if ($d5 == "ES1") {
                                                    echo "Pekerja";
                                                } elseif ($d5 == "ES2") {
                                                    echo "Istri/Suami Pekerja";
                                                } elseif ($d5 == "ES3") {
                                                    echo "Anak Pekerja";
                                                } else {
                                                    echo "Umum";
                                                }
                                                ?>
                                            </td>

                                            <td><?php echo $d6;  ?></td>

                                            <td><?php echo $d7;  ?></td>

                                            <td>
                                                <?php
                                                if ($d8 == "1") {
                                                    echo "Executive";
                                                } elseif ($d8 == "2") {
                                                    echo "PB";
                                                } elseif ($d8 == "3") {
                                                    echo "PGHT";
                                                } elseif ($d8 == "4") {
                                                    echo "BHL";
                                                } elseif ($d8 == "5") {
                                                    echo "BRG";
                                                } else {
                                                    echo "UMUM";
                                                }
                                                ?>
                                            </td>

                                            <td><?php echo $d9;  ?></td>

                                            <td>
                                                <?php
                                                if ($d10 == "1") {
                                                    echo "RO";
                                                } elseif ($d10 == "2") {
                                                    echo "P.Salak";
                                                } elseif ($d10 == "3") {
                                                    echo "Pangkor";
                                                } elseif ($d10 == "4") {
                                                    echo "Grik";
                                                } elseif ($d10 == "5") {
                                                    echo "PKS";
                                                } else {
                                                    echo "Umum";
                                                }
                                                ?>
                                            </td>

                                            <td> <?php echo $d11; ?></td>

                                            <td>
                                                <a href="api_editpasiens.php?id=<?= $a['id_pasien'] ?>" class="label label-sm label-info"> <i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>

                                                <a href="api_deletepasiens.php?id=<?= $a['id_pasien'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
                                            </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require '../widgets/footer.php'; ?>