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
            <h1>DATA PENDAFTARAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Pendaftaran</li>
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
                                            <th>NO PENDAFTARAN</th>
                                            <th>NO MR</th>
                                            <th>NAMA</th>
                                            <th>TANGGAL</th>
                                            <th>INFORMASI</th>
                                            <th>KELUHAN</th>
                                            <th>STATUS</th>
                                            <th style="text-align:center;">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require '../api/koneksi.php';
                                        $sql = mysqli_query($koneksi, "select * from tbl_pendaftaran where status='antri' or status='diagnosa' or status='resep' order by id_pendaftaran Desc LIMIT 200") or die("error karena" . mysqli_error($koneksi));
                                        $no = 1;
                                        while ($a = mysqli_fetch_array($sql)) {
                                            $idx = $a['id'];
                                            $id = $a['id_pendaftaran'];
                                            $d1 = $a['id_pasien'];
                                            $d2 = $a['tanggal_pendaftaran'];
                                            $d3 = $a['tinggi_badan'];
                                            $d4 = $a['berat_badan'];
                                            $d5 = $a['lingkar_perut'];
                                            $d6 = $a['tensi_darah'];
                                            $d7 = $a['suhu'];
                                            $d8 = $a['nadi'];
                                            $d9 = $a['pernafasan'];
                                            $d10 = $a['keluhan_pasien'];
                                            $d11 = $a['status'];

                                        ?>
                                            <tr style="font-size:12px;" ;>
                                                <td style="width:2%" ;><?php echo $no++;  ?></td>
                                                <td style="width:3%; text-align:left;"><?php echo  $id;  ?></td>
                                                <td style="width:3%; text-align:left;"><?php echo  $d1;  ?></td>
                                                <td style="width:15%; text-align:left;">
                                                    <?php
                                                    require '../api/koneksi.php';
                                                    $sql4 = mysqli_query($koneksi, "select * from tbl_pasien where id_pasien='$d1'") or die("error karena " . mysqli_error($koneksi));
                                                    while ($a4 = mysqli_fetch_array($sql4)) {
                                                        echo $e4 = $a4['nama_pasien'];
                                                        //echo $d1;
                                                    }
                                                    ?>
                                                </td>
                                                <td style="width:5%; text-align:left;"><?php echo  $d2;  ?></td>
                                                <td style="width:15%; text-align:left;"><?php echo "Tinggi : ";
                                                                                        echo $d3;
                                                                                        echo " <br> Berat : ";
                                                                                        echo $d4;
                                                                                        echo " <br> Lingkar Perut : ";
                                                                                        echo $d5;
                                                                                        echo " <br> Tensi Darah : ";
                                                                                        echo $d6;
                                                                                        echo " <br> Suhu : ";
                                                                                        echo $d7;
                                                                                        echo " <br> Nadi : ";
                                                                                        echo $d8;
                                                                                        echo " <br> Pernafasan : ";
                                                                                        echo $d9; ?></td>
                                                <td style="width:15%; text-align:left;"><?php echo  $d10;  ?></td>
                                                <td style="width:3%; text-align:left;"><?php echo  $d11;  ?></td>





                                                <td style="width:4%; text-align:center;">
                                                    <?php if ($d11 == 'Antri') {
                                                        echo "
                            <a href='sekred.php?page=form_update_daftar&id=$id' class='label label-sm label-info'> Edit</a>
                            <a onclick='return konfirmasi()' href='sekred.php?page=hapus_data_pendaftaran&id=$idx' class='label label-sm label-danger'> Del</a>";
                                                    } else {
                                                        echo "
                            <a href='sekred.php?page=form_update_daftar&id=$id' class='label label-sm label-info'> Edit</a>
                            
                    ";
                                                    }
                                                    ?>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require '../widgets/footer.php'; ?>