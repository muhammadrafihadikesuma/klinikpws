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
            <h1>DATA DIAGNOSA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Diagnosa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Diagnosa</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NO ANTRI</th>
                                        <th>NO MR</th>
                                        <th>NAMA</th>
                                        <th>TANGGAL</th>
                                        <th>INFORMASI</th>
                                        <th>KELUHAN</th>
                                        <th style="text-align:center;">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //require "conf/koneksi_sekred.php";
                                    require "../api/koneksi.php";
                                    $sql = mysqli_query($koneksi, "select * from tbl_pendaftaran where status='diagnosa' order by id_pendaftaran  Desc LIMIT 200") or die("error karena" . mysqli_error($connection));
                                    $no = 1;
                                    while ($a = mysqli_fetch_array($sql)) {
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

                                        $sql5 = mysqli_query($koneksi, "select * from tbl_diagnosa where id_pendaftaran='$id'") or die("error karena " . mysqli_error($connection));
                                        while ($a5 = mysqli_fetch_array($sql5)) {
                                            $d2 = $a5['id_diagnosa'];
                                            //echo $d1;
                                        }


                                    ?>
                                        <tr style="font-size:12px;" ;>
                                            <td style="width:2%" ;><?php echo $no++;  ?></td>
                                            <td style="width:3%; text-align:left;">
                                                <?php
                                                echo $noantrian = substr($id, 11, 4);
                                                ?>
                                            </td>
                                            <td style="width:3%; text-align:left;"><?php echo  $d1;  ?></td>
                                            <td style="width:7%; text-align:left;">
                                                <?php
                                                require  "../api/koneksi.php";
                                                $sql4 = mysqli_query($koneksi, "select * from tbl_pasien where id_pasien='$d1'") or die("error karena " . mysqli_error($connection));
                                                while ($a4 = mysqli_fetch_array($sql4)) {
                                                    echo $e4 = $a4['nama_pasien'];
                                                    //echo $d1;
                                                }
                                                ?>
                                            </td>
                                            <td style="width:5%; text-align:left;"><?php echo  $d2;  ?></td>
                                            <td style="width:15%; text-align:left;"><?php echo "Tinggi : ";
                                                                                    echo $d3;
                                                                                    echo " - Berat : ";
                                                                                    echo $d4;
                                                                                    echo " - Lingkar Perut : ";
                                                                                    echo $d5;
                                                                                    echo " - Tensi Darah : ";
                                                                                    echo $d6;
                                                                                    echo " - Suhu : ";
                                                                                    echo $d7;
                                                                                    echo " - Nadi : ";
                                                                                    echo $d8;
                                                                                    echo " - Pernafasan : ";
                                                                                    echo $d9; ?></td>
                                            <td style="width:10%; text-align:left;"><?php echo  $d10;  ?></td>





                                            <td style="width:4%; text-align:center;">
                                                <a href="sekred.php?page=proses_batal_diagnosa&id=<?php echo $id; ?>&idp=<?php echo $d2; ?>" class="label label-sm label-danger"> Batal</a>
                                                <a href="sekred.php?page=form_input_diagnosa&id=<?php echo $id; ?>" class="label label-sm label-info"> Diagnosa</a>



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

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require '../widgets/footer.php'; ?>