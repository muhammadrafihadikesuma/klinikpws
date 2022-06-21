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

<?php
require '../api/koneksi.php';
$query = mysqli_query($koneksi, "SELECT max(id_diagnosa) as kodeTerbesar FROM tbl_diagnosa");
$data = mysqli_fetch_array($query);
$id_diagnosa = $data['kodeTerbesar'];
$urutan = (int) substr($id_diagnosa, 10, 5);
$urutan++;
$huruf = "PWSPOLIDNS";
$id_diagnosa = $huruf . sprintf("%05s", $urutan);



$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran = '$id'");
while ($read = mysqli_fetch_array($query)) {
    # code...
    $id_pendaftaran = $read['id_pendaftaran'];
    $id_pasien = $read['id_pasien'];
    $tanggal_pendaftaran = $read['tanggal_pendaftaran'];
}

// Mengambil data dari database tabel penyakit ke select option
$penyakit = mysqli_query($koneksi, " SELECT * FROM tbl_penyakit ORDER BY nama_penyakit ASC");
?>


<body>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>FORM INPUT DIAGNOSA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../pages/diagnosa.php">Data Diagnosa</a></li>
                    <li class="breadcrumb-item active">Input Diagnosa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Diagnosa</h5>

                            <!-- General Form Elements -->
                            <form action="../api/add_diagnosas.php" method="POST">

                                <!-- ID DIAGNOSA -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="id_diagnosa" value="<?php echo $id_diagnosa; ?>" placeholder="Masukkan " readonly>
                                    <label for="1">Nomor Diagnosa</label>
                                </div>

                                <!-- ID PENDAFTARAN -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="id_pendaftaran" value="<?php echo $id_pendaftaran ?>" placeholder="Masukkan " readonly>
                                    <label for="1">Nomor Pendaftaran</label>
                                </div>

                                <!-- ID PASIEN -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="id_pasien" value="<?php echo $id_pasien ?>" placeholder="Masukkan " readonly>
                                    <label for="1">Nomor Pasien</label>
                                </div>


                                <!-- Tanggal Pendaftaran -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingDate" name="tgl_diagnosa" value="<?php echo $tanggal_pendaftaran; ?>" readonly>
                                        <label for="floatingDate">Tanggal Diagnosa</label>
                                    </div>
                                </div>


                                <!-- Pemeriksaan -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="3" onkeyup="my3()" name="pemeriksaan" placeholder="Masukkan " required>
                                    <label for="3">Pemeriksaan</label>
                                </div>

                                <!-- Jenis Penyakit -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="diagnosa" name="diagnosa[]" style="width: 100%;" multiple="multiple" required>
                                            <!-- <option selected>Pilih Jenis Penyakit</option> -->
                                            <?php while ($read = mysqli_fetch_array($penyakit)) { ?>

                                                <option value="<?= $read['nama_penyakit'] ?>"><?= $read['nama_penyakit'] ?></option>;
                                            <?php } ?>
                                        </select>
                                        <!-- <label for="diagnosa">Pilih Jenis Penyakit</label> -->
                                    </div>
                                </div>

                                <!-- Terapi -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="5" onkeyup="my5()" name="terapi" placeholder="Masukkan " required>
                                    <label for="5">Terapi</label>
                                </div>

                                <!-- RESEP -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="4" onkeyup="my4()" name="resep" placeholder="Masukkan " required>
                                    <label for="4">Resep</label>
                                </div>

                                <!-- Status -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="6" onkeyup="my6()" name="status" value="resep" placeholder="Masukkan " readonly>
                                    <label for="6">Status</label>
                                </div>

                                <div class="col-sm-10 text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
</body>
<!-- ======= Footer ======= -->
<?php require '../widgets/footer.php'; ?>