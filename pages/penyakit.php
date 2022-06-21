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

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA PENYAKIT</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../forms/add_penyakit.php">Input Penyakit</a></li>
                    <li class="breadcrumb-item active">Data Penyakit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

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
                                            <th>NOMOR PENYAKIT</th>
                                            <th>NAMA PENYAKIT</th>
                                            <th>DESKRIPSI</th>
                                            <th style="text-align:center;">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require '../api/koneksi.php';
                                        $sql = mysqli_query($koneksi, "SELECT* from tbl_penyakit order by id_penyakit DESC") or die("error karena" . mysqli_error($connection));
                                        $no = 1;
                                        while ($read = mysqli_fetch_array($sql)) {
                                            $id_penyakit = $read['id_penyakit'];
                                            $nama_penyakit = $read['nama_penyakit'];
                                            $deskripsi = $read['deskripsi'];

                                        ?>
                                            <tr>
                                                <td><?php echo $no++;  ?></td>
                                                <td><?php echo $id_penyakit;  ?></td>
                                                <td><?php echo  $nama_penyakit;  ?></td>
                                                <td style="text-align: justify;"><?php echo  $deskripsi;  ?></td>
                                                <td style="position: relative;">
                                                    <a href="../forms/edit_penyakit.php?id=<?= $read['id_penyakit'] ?>" class="label label-sm label-info"> <i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>
                                                    <a href="../api/delete_penyakits.php?id=<?= $read['id_penyakit'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
    </main>
    <!-- End #main -->

    <?php require '../widgets/footer.php'; ?>