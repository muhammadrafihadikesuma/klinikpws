<?php
require '../api/koneksi.php';
// require 'api_checksessions.php';
?>

<!-- ======= Header ======= -->
<?php require '../widgets/header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require '../widgets/sidebar.php'; ?>
<!-- End Sidebar-->
<?php require '../modals/modals.php' ?>
<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA PASIEN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../pages/home.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="../forms/add_pasien.php">Input Pasien</a></li> -->
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
                            <!-- <h6><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inputPasien">
                                    Input Pasien
                                </button>
                            </h6> -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NO PASIEN</th>
                                            <th>NIK</th>
                                            <th>NAMA PASIEN</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>NO BPJS</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>STATUS</th>
                                            <th>NAMA PEKERJA</th>
                                            <th>JABATAN PEKERJA</th>
                                            <th>STATUS</th>
                                            <th>NO HP</th>
                                            <th>ESTATE</th>
                                            <th>OP</th>
                                            <th>AUTHOR</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require "../api/koneksi.php";
                                        $sql = mysqli_query($koneksi, "SELECT * from tbl_pasien order by id_pasien Desc LIMIT 3000") or die("error karena" . mysqli_error($connection));
                                        $no = 1;
                                        while ($read = mysqli_fetch_array($sql)) {
                                            $id_pasien = $read['id_pasien'];
                                            $nik = $read['nik'];
                                            $nama_pasien = $read['nama_pasien'];
                                            $jk = $read['jk'];
                                            $no_bpjs = $read['no_bpjs'];
                                            $tgl_lahir = $read['tgl_lahir'];
                                            $status_pasien = $read['status_pasien'];
                                            $nama_pekerja = $read['nama_pekerja'];
                                            $jabatan_pekerja = $read['jabatan_pekerja'];
                                            $status_pekerja = $read['status_pekerja'];
                                            $nohp_pekerja = $read['nohp_pekerja'];
                                            $estate = $read['estate'];
                                            $op = $read['op'];
                                            $author = $read['author'];
                                        ?>
                                            <tr>
                                                <td><?php echo $no++;  ?></td>
                                                <td><?php echo  $id_pasien;  ?></td>
                                                <td><?php echo  $nik;  ?></td>
                                                <td><?php echo  $nama_pasien;  ?></td>
                                                <td><?php
                                                    if ($jk == "1") {
                                                        echo "Laki-laki";
                                                    } else {
                                                        echo "Perempuan";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $no_bpjs; ?></td>
                                                <td><?php echo $tgl_lahir;  ?></td>
                                                <td><?php echo $status_pasien;  ?></td>
                                                <td><?php echo $nama_pekerja; ?></td>
                                                <td><?php echo $jabatan_pekerja;  ?></td>
                                                <td><?php echo $status_pekerja;  ?></td>
                                                <td><?php echo $nohp_pekerja; ?></td>
                                                <td><?php echo $estate;  ?></td>
                                                <td> <?php echo $op; ?></td>
                                                <td> <?php echo $author; ?></td>
                                                <td style="text-align: center; width: 30%;">
                                                    <a href="../forms/edit_pasien.php?id=<?= $read['id_pasien'] ?>" class="label label-sm label-info">
                                                        <i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>
                                                    <a href="../api/delete_pasiens.php?id=<?= $read['id_pasien'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')">
                                                        <i class="bi bi-trash btn btn-danger btn-sm"></i></a>
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
    </main>
    <!-- End #main -->

    <!-- Button trigger modal -->

    
    <!-- ======= Footer ======= -->
    <?php require '../widgets/footer.php'; ?>