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
$id = $_SESSION['id'];
$query = mysqli_query($koneksi, " SELECT * FROM tbl_user WHERE id='$id'");
while ($read = mysqli_fetch_array($query)) {
    $id_author = $read['id'];
    $author = $read['nama'];
}
?>

<?php
require '../api/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_pasien WHERE id_pasien='$id'");
while ($edit = mysqli_fetch_array($query)) {
    # code...
    $id_pasien = $edit['id_pasien'];
    $nama_pasien = $edit['nama_pasien'];
    $jk = $edit['jk'];
    $no_bpjs = $edit['no_bpjs'];
    $tgl_lahir = $edit['tgl_lahir'];
    $status_pasien = $edit['status_pasien'];
    $nama_pekerja = $edit['nama_pekerja'];
    $jabatan_pekerja = $edit['jabatan_pekerja'];
    $status_pekerja = $edit['status_pekerja'];
    $nohp_pekerja = $edit['nohp_pekerja'];
    $estate = $edit['estate'];
    $op = $edit['op'];
    $author = $edit['author'];
}
?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>FORM EDIT PASIEN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../pages/pasien.php">Data Pasien</a></li>
                    <li class="breadcrumb-item active">Edit Pasien</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Pasien | NAMA : <?php echo $nama_pasien ?></h5>

                            <!-- General Form Elements -->
                            <form action="../api/add_pasiens.php" method="POST">

                                <input id="id_pasien" name="id_pasien" value="<?php echo $id_pasien ?>" type="text" class="form-control" />
                                <input id="id_author" name="id_author" value="<?php echo $id_author ?>" type="text" class="form-control" />

                                <!-- Nama Pasien -->
                                <div class="col-12 position-relative">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="1" name="nm" onkeyup="my1()" value="<?php echo $nama_pasien; ?>" placeholder="Masukkan Nama Pasien" required>
                                        <label for="1">Nama Pasien</label>
                                        <div class="invalid-tooltip">
                                            Nama Pasien Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="floatingJk" name="jk" required>
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option <?php if ($jk == 'laki') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="laki">Laki - Laki</option>
                                            <option <?php if ($jk == 'perempuan') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="perempuan">Perempuan</option>
                                        </select>
                                        <label for="floatingJk">Pilih Jenis Kelamin</label>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingDate" name="tgl_lahir" value="<?php echo $tgl_lahir ?>" required>
                                        <label for="floatingDate">Tanggal Lahir</label>
                                        <div class="invalid-tooltip">
                                            Tanggal Lahir Tidak Boleh Kosong
                                        </div>
                                    </div>
                                </div>

                                <!--Status Pasien  -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" aria-label="Default select example" id="floatingStatus" name="status" required>
                                        <option selected disabled value>Pilih Status Pasien</option>
                                        <option <?php if ($status_pasien == 'pekerja') {
                                                    # code...
                                                    echo 'selected';
                                                } ?> value="pekerja">Pekerja</option>
                                        <option <?php if ($status_pasien == 'suami/istri') {
                                                    # code...
                                                    echo 'selected';
                                                } ?> value="suami/istri">Istri/Suami Pekerja</option>
                                        <option <?php if ($status_pasien == 'anak pekerja') {
                                                    # code...
                                                    echo 'selected';
                                                } ?> value="anak pekerja">Anak Pekerja</option>
                                        <option <?php if ($status_pasien == 'umum') {
                                                    # code...
                                                    echo 'selected';
                                                } ?> value="umum">Umum</option>
                                    </select>
                                    <label for="floatingStatus">Status Pasien</label>

                                </div>

                                <!-- Nama Pekerja -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="2" name="nama_pekerja" value="<?php echo $nama_pekerja ?>" onkeyup="my2()" placeholder="Masukkan Nama Pekerja" required>
                                        <label for="2">Nama Pekerja</label>
                                        <div class="invalid-tooltip">
                                            Nama Pekerja Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>

                                <!-- Jabatan Pekerja -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingJabatan" name="jabatan_pekerja" style="width: 100%;" data-placeholder="Pilih Jabatan">
                                            <option selected>Jabatan Pekerja</option>

                                            <option <?php if ($jabatan_pekerja == 'act. askep') {
                                                # code...
                                                echo 'selected';
                                            } ?> value="act. askep">Act. Askep</option>

                                            <option value="Act. manager">Act. Manager</option>

                                            <option value="adm. kebun">Adm. Kebun</option>

                                            <option value="analis laboratorium">Analis Laboratorium</option>

                                            <option value="anggota">Anggota</option>

                                            <option value="askep">Askep</option>

                                            <option value="assistant">Assistant</option>

                                            <option value="bidan">Bidan</option>

                                            <option value="bilal masjid">Bilal Masjid</option>

                                            <option value="danru">Danru</option>

                                            <option value="danton">Danton Security</option>

                                            <option value="ded">Deputy Executive Director</option>

                                            <option value="dgm">Deputy General Manager</option>

                                            <option value="dokter">Dokter Poliklinik</option>

                                            <option value="ep">Effluent Pond</option>

                                            <option value="electrical">Electrical</option>

                                            <option value="esd">ESD</option>

                                            <option value="ed">Executive Director</option>

                                            <option value="fc">Financial Controller</option>

                                            <option value="gm">General Manager</option>

                                            <option value="guru">Guru</option>

                                            <option value="head sortasi">Head Sortasi</option>

                                            <option value="imam masjid">Imam Masjid</option>

                                            <option value="kepala gudang">Kepala Gudang</option>

                                            <option value="kasir">Kasir</option>

                                            <option value="keamanan">Keamanan</option>

                                            <option value="kepala mekanik">Kepala Mekanik</option>

                                            <option value="kepala sekolah">Kepala Sekolah</option>

                                            <option value="kerani">Kerani</option>

                                            <option value="ktu">KTU</option>

                                            <option value="manager">Manager</option>

                                            <option value="mandor">Mandor</option>

                                            <option value="mekanik">Mekanik</option>

                                            <option value="office boy/girl">Office Boy/Girl</option>

                                            <option value="oil man">Oil Man</option>

                                            <option value="operator">Operator</option>

                                            <option value="pemanen">Pemanen</option>

                                            <option value="pembantu">Pembantu</option>

                                            <option value="pemuat">Pemuat</option>

                                            <option value="pengawas">Pengawas</option>

                                            <option value="pengirim produksi">Pengirim Produksi</option>

                                            <option value="perawat">Perawat Poliklinik</option>

                                            <option value="petugas">Petugas</option>

                                            <option value="plt">Pelaksana Tugas</option>

                                            <option value="sekretatis">Sekretaris ED & DED, Assistant Administrasi Kebun</option>

                                            <option value="sm">Senior Manager</option>

                                            <option value="sortasi tbs">Sortasi TBS</option>

                                            <option value="staff">Staff </option>

                                            <option value="supir">Supir</option>

                                            <option value="training">Training</option>

                                            <option value="tukang kebun">Tukang Kebun</option>

                                            <option value="wadanru">Wakil Komandan Regu</option>

                                            <option value="welder">Welder</option>

                                            <option value="umum">Umum</option>
                                        </select>
                                        <!-- <label for="floatingJabatan"> Jabatan </label> -->
                                    </div>
                                </div>

                                <!-- Status Pekerja -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingStatusPekerja" name="status_pekerja" required>
                                            <option selected disabled value>Pilih Status Pekerja</option>
                                            <option <?php if ($status_pekerja == 'executive') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="executive">Executive</option>
                                            <option <?php if ($status_pekerja == 'pb') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="pb">PB</option>
                                            <option <?php if ($status_pekerja == 'pght') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="pght">PGHT</option>
                                            <option <?php if ($status_pekerja == 'bhl') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="bhl">BHL</option>
                                            <option <?php if ($status_pekerja == 'brg') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="brg">BRG</option>
                                            <option <?php if ($status_pekerja == 'umum') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="umum">UMUM</option>
                                        </select>
                                        <label for="floatingStatusPekerja">Status Pekerja</label>
                                    </div>
                                </div>

                                <!-- Estate Pekerja -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingEstate" name="estate" required>
                                            <option selected disabled value>Pilih Estate Pekerja</option>

                                            <option <?php if ($estate == 'ro') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="ro">Regional Office</option>

                                            <option <?php if ($estate == 'psalak') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="psalak">Pasir Salak</option>

                                            <option <?php if ($estate == 'pangkor') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="pangkor">Pangkor</option>

                                            <option <?php if ($estate == 'grik') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="grik">Grik</option>

                                            <option <?php if ($estate == 'pks') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="pks">PKS</option>

                                            <option <?php if ($estate == 'umum') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="umum">Umum</option>
                                        </select>
                                        <label for="floatingEstate">Estate Pekerja</label>
                                    </div>
                                </div>

                                <!-- Op Pekerja -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingOp" name="op" required>
                                            <option selected disabled value>Pilih OP Pekerja</option>

                                            <option <?php if ($op == 'ro') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="ro">RO</option>

                                            <option <?php if ($op == 'pks') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="pks">PKS</option>

                                            <option <?php if ($op == 'op96') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op96">OP 96</option>

                                            <option <?php if ($op == 'op97a') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op97a">OP 97A</option>

                                            <option <?php if ($op == 'op97b') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op97b">OP 97B</option>

                                            <option <?php if ($op == 'op97c') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op97c">OP 97C</option>

                                            <option <?php if ($op == 'op97d') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op97d">OP 97D</option>

                                            <option <?php if ($op == 'op98a') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op98a">OP 98A</option>

                                            <option <?php if ($op == 'op98b') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op98b">OP 98B</option>

                                            <option <?php if ($op == 'op98c') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op98c">OP 98C</option>

                                            <option <?php if ($op == 'op98d') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op98d">OP 98D</option>

                                            <option <?php if ($op == 'op99') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op99">OP 99</option>

                                            <option <?php if ($op == 'op20034') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op20034">OP 2003/2004</option>

                                            <option <?php if ($op == 'op2005a') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op2005a">OP 2005A</option>

                                            <option <?php if ($op == 'op2005b') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op2005b">OP 2005B</option>

                                            <option <?php if ($op == 'op2006a') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op2006a">OP 2006A</option>

                                            <option <?php if ($op == 'op2006b') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op2006b">OP 2006B</option>

                                            <option <?php if ($op == 'op2007a') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op2007a">OP 2007A</option>

                                            <option <?php if ($op == 'op2007b') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op2007b">OP 2007B</option>

                                            <option <?php if ($op == 'op2008') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="op2008">OP 2008</option>

                                            <option <?php if ($op == 'nursery') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="nursery">Nursery</option>

                                            <option <?php if ($op == 'umum') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="umum">Umum</option>
                                        </select>
                                        <label for="floatingEstate">OP Pekerja</label>
                                    </div>
                                </div>

                                <!-- No BPJS -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="3" name="bpjs" value="<?php echo $no_bpjs ?>" onkeyup="my3()" placeholder="Masukkan" required>
                                        <label for="3">Nomor BPJS</label>
                                        <div class="invalid-tooltip">
                                            No BPJS Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>

                                <!-- No Hp -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="4" name="nohp" value="<?php echo $nohp_pekerja ?>" onkeyup="my4()" placeholder="Masukkan" required>
                                        <label for="4">Nomor Handphone</label>
                                        <div class="invalid-tooltip">
                                            No HP Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>

                                <!-- AUTHOR -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="5" name="author" value="<?php echo $author; ?>" onkeyup="my5()" placeholder="Masukkan" readonly>
                                        <label for="5">Auhtor</label>
                                    </div>
                                </div>

                                <!-- Button Submit -->
                                <div class="row mb-3 text-center">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>

                                </div>

                            </form>
                            <!-- End General Form Elements -->

                        </div>
                    </div>
                </div>

            </div>
            </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require '../widgets/footer.php'; ?>