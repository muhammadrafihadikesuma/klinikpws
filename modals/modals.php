<!-- Modal Input Pasien -->
<div class="modal fade" id="inputPasien" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Input Pasien</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <?php
                require '../api/koneksi.php';
                $query = mysqli_query($koneksi, "SELECT max(id_pasien) as kodeTerbesar FROM tbl_pasien");
                $data = mysqli_fetch_array($query);
                $idPasien = $data['kodeTerbesar'];
                $urutan = (int) substr($idPasien, 10, 5);
                $urutan++;
                $huruf = "PWSPOLIPAS";
                $idPasien = $huruf . sprintf("%05s", $urutan);
                ?>

                <?php
                require '../api/koneksi.php';
                $id = $_SESSION['id'];
                $querys = mysqli_query($koneksi, " SELECT * FROM tbl_user WHERE id='$id'");
                while ($reads = mysqli_fetch_array($querys)) {
                    $id_authors = $reads['id'];
                    $authors = $reads['nama'];
                }
                ?>
                <section class="section">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <form action="../api/add_pasiens.php" method="POST">

                                    <!-- <input id="id_pasien"  type="hidden" class="form-control" /> -->
                                    <div class="mb-3"></div>
                                    <input id="id_author" name="id_author" value="<?php echo $id_authors ?>" type="hidden" class="form-control" />

                                    <!-- Kode Pasien -->
                                    <div class="col-12 position-relative">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="11" name="id_pasien" value="<?php echo $idPasien ?>" placeholder="Masukkan" readonly>
                                            <label for="11">Nomor Pasien</label>
                                        </div>
                                    </div>


                                    <!-- NIK -->
                                    <div class="col-12 position-relative">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="10" name="nik" placeholder="Nomor Induk Kependudukan" required>
                                            <label for="10">Nomor Induk Kependudukan</label>
                                        </div>
                                    </div>

                                    <!-- Nama Pasien -->
                                    <div class="col-12 position-relative">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="1" name="nama_pasien" onkeyup="my1()" placeholder="Nama Pasien" required>
                                            <label for="1">Nama Pasien</label>
                                        </div>
                                    </div>

                                    <!-- Jenis Kelamin -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="floatingJk" name="jk" required>
                                                <option selected disabled value>Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <label for="floatingJk">Pilih Jenis Kelamin</label>
                                        </div>
                                    </div>

                                    <!-- Tanggal Lahir -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="floatingDate" name="tgl_lahir" required>
                                            <label for="floatingDate">Tanggal Lahir</label>
                                            <div class="invalid-tooltip">
                                                Tanggal Lahir Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>

                                    <!--Status Pasien  -->
                                    <div class="col-12"></div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingStatus" name="status_pasien" required>
                                            <option selected disabled value>Pilih Status Pasien</option>
                                            <option value="Pekerja">Pekerja</option>
                                            <option value="Suami/Istri">Istri/Suami Pekerja</option>
                                            <option value="Anak Pekerja">Anak Pekerja</option>
                                            <option value="Umum">Umum</option>
                                        </select>
                                        <label for="floatingStatus">Status Pasien</label>

                                    </div>

                                    <!-- Nama Pekerja -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="2" name="nama_pekerja" onkeyup="my2()" placeholder="Nama Pekerja" required>
                                            <label for="2">Nama Pekerja</label>
                                        </div>
                                    </div>

                                    <!-- Jabatan Pekerja -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="jabatanPekerja" name="jabatan_pekerja" style="width: 100%;" data-placeholder="Pilih Jabatan">
                                                <option selected disabled value>Pilih Jabatan Pekerja</option>
                                                <option value="Act. Askep">Act. Askep</option>
                                                <option value="Act. Manager">Act. Manager</option>
                                                <option value="Adm. Kebun">Adm. Kebun</option>
                                                <option value="Analis Laboratorium">Analis Laboratorium</option>
                                                <option value="Anggota">Anggota</option>
                                                <option value="Askep">Askep</option>
                                                <option value="Assistant">Assistant</option>
                                                <option value="Bidan">Bidan</option>
                                                <option value="Bilal Masjid">Bilal Masjid</option>
                                                <option value="Danru">Danru</option>
                                                <option value="Danton">Danton Security</option>
                                                <option value="DED">Deputy Executive Director</option>
                                                <option value="DGM">Deputy General Manager</option>
                                                <option value="Dokter">Dokter Poliklinik</option>
                                                <option value="EP">Effluent Pond</option>
                                                <option value="Electrical">Electrical</option>
                                                <option value="ESD">ESD</option>
                                                <option value="ED">Executive Director</option>
                                                <option value="FC">Financial Controller</option>
                                                <option value="GM">General Manager</option>
                                                <option value="Guru">Guru</option>
                                                <option value="Head Sortasi">Head Sortasi</option>
                                                <option value="Imam Masjid">Imam Masjid</option>
                                                <option value="Kepala Gudang">Kepala Gudang</option>
                                                <option value="Kasir">Kasir</option>
                                                <option value="Keamanan">Keamanan</option>
                                                <option value="Kepala Mekanik">Kepala Mekanik</option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Kerani">Kerani</option>
                                                <option value="KTU">KTU</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Mandor">Mandor</option>
                                                <option value="Mekanik">Mekanik</option>
                                                <option value="Office Boy/Girl">Office Boy/Girl</option>
                                                <option value="Oil Man">Oil Man</option>
                                                <option value="Operator">Operator</option>
                                                <option value="Pemanen">Pemanen</option>
                                                <option value="Pembantu">Pembantu</option>
                                                <option value="Pemuat">Pemuat</option>
                                                <option value="Pengawas">Pengawas</option>
                                                <option value="Pengirim Produksi">Pengirim Produksi</option>
                                                <option value="Perawat">Perawat Poliklinik</option>
                                                <option value="Petugas">Petugas</option>
                                                <option value="Plt">Pelaksana Tugas</option>
                                                <option value="Sekretatis">Sekretaris ED & DED, Assistant Administrasi Kebun</option>
                                                <option value="SM">Senior Manager</option>
                                                <option value="Sortasi Tbs">Sortasi TBS</option>
                                                <option value="Staff">Staff </option>
                                                <option value="Supir">Supir</option>
                                                <option value="Training">Training</option>
                                                <option value="Tukang Kebun">Tukang Kebun</option>
                                                <option value="Wadanru">Wakil Komandan Regu</option>
                                                <option value="Welder">Welder</option>
                                                <option value="Umum">Umum</option>
                                            </select>
                                            <label for="jabatanPekerja"> Jabatan </label>
                                        </div>
                                    </div>

                                    <!-- Status Pekerja -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" id="floatingStatusPekerja" name="status_pekerja" required>
                                                <option selected disabled value>Pilih Status Pekerja</option>
                                                <option value="Executive">Executive</option>
                                                <option value="PB">Pegawai Bulanan</option>
                                                <option value="PGHT">Pegawai Harian Tetap</option>
                                                <option value="BHL">Buruh Harian Lepas</option>
                                                <option value="BRG">Borongan</option>
                                                <option value="Umum">UMUM</option>
                                            </select>
                                            <label for="floatingStatusPekerja">Status Pekerja</label>
                                        </div>
                                    </div>

                                    <!-- Estate Pekerja -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" id="floatingEstate" name="estate" required>
                                                <option selected disabled value>Pilih Estate Pekerja</option>
                                                <option value="RO">Regional Office</option>
                                                <option value="Pasir Salak">Pasir Salak</option>
                                                <option value="Pangkor">Pangkor</option>
                                                <option value="Grik">Grik</option>
                                                <option value="Pks">PKS</option>
                                                <option value="Umum">Umum</option>
                                            </select>
                                            <label for="floatingEstate">Estate Pekerja</label>
                                        </div>
                                    </div>

                                    <!-- Op Pekerja -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" id="floatingOp" name="op" required>
                                                <option selected disabled value>Pilih OP Pekerja</option>
                                                <option value="RO">Regional Office</option>
                                                <option value="PKS">PKS</option>
                                                <option value="OP 96">OP 96</option>
                                                <option value="OP 97A">OP 97A</option>
                                                <option value="OP 97B">OP 97B</option>
                                                <option value="OP 97C">OP 97C</option>
                                                <option value="OP 97D">OP 97D</option>
                                                <option value="OP 98A">OP 98A</option>
                                                <option value="OP 98B">OP 98B</option>
                                                <option value="OP 98C">OP 98C</option>
                                                <option value="OP 98D">OP 98D</option>
                                                <option value="OP 99">OP 99</option>
                                                <option value="OP 2003/2004">OP 2003/2004</option>
                                                <option value="OP 2005A">OP 2005A</option>
                                                <option value="OP 2005B">OP 2005B</option>
                                                <option value="OP 2006A">OP 2006A</option>
                                                <option value="OP 2006B">OP 2006B</option>
                                                <option value="OP 2007A">OP 2007A</option>
                                                <option value="OP 2007B">OP 2007B</option>
                                                <option value="OP 2008">OP 2008</option>
                                                <option value="Nursery">Nursery</option>
                                                <option value="Umum">Umum</option>
                                            </select>
                                            <label for="floatingEstate">OP Pekerja</label>
                                        </div>
                                    </div>

                                    <!-- No BPJS -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="3" name="no_bpjs" onkeyup="my3()" placeholder="Nomor BPJS" required>
                                            <label for="3">Nomor BPJS</label>
                                            <div class="invalid-tooltip">
                                                No BPJS Tidak Boleh Kosong!
                                            </div>
                                        </div>
                                    </div>

                                    <!-- No Hp -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="4" value="62" name="nohp_pekerja" onkeyup="my4()" placeholder="Nomor Handphone" required>
                                            <label for="4">Nomor Handphone</label>
                                            <div class="invalid-tooltip">
                                                No HP Tidak Boleh Kosong!
                                            </div>
                                        </div>
                                    </div>

                                    <!-- AUTHOR -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="5" name="author" value="<?php echo $authors; ?>" onkeyup="my5()" placeholder="Masukkan" readonly>
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
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>

<!-- Modal Input Penyakit-->
<div class="modal fade" id="inputPenyakit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Input Penyakit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                require '../api/koneksi.php';
                $query = mysqli_query($koneksi, "SELECT max(id_penyakit) as kodeTerbesar FROM tbl_penyakit");
                $data = mysqli_fetch_array($query);
                $idPenyakit = $data['kodeTerbesar'];
                $urutans = (int) substr($idPenyakit, 10, 5);
                $urutans++;
                $hurufs = "PWSPOLIPKT";
                $idPenyakit = $hurufs . sprintf("%05s", $urutans);
                ?>

                <form action="../api/add_penyakits.php" method="POST">

                    <!-- Nomor Penyakit -->
                    <div class="col-12"></div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="2" name="id_penyakit" value="<?php echo $idPenyakit; ?>" placeholder="Masukkan" readonly>
                        <label for="2">Nomor Penyakit</label>
                    </div>

                    <!-- Nama Penyakit -->
                    <div class="col-12"></div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="1" onkeyup="my1()" name="nama_penyakit" placeholder="Masukkan Nama Penyakit" required>
                        <label for="1">Nama Penyakit</label>
                    </div>

                    <!-- Deskripsi -->
                    <div class="col-12"></div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="6" name="deskripsi" data-enable-grammarly="false" placeholder="Masukkan Keluhan Pasien" style="height: 250px;" onkeyup="my6()" required></textarea>
                        <label for="6">Deskripsi</label>
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

<!-- Modal Input Pendaftaran -->
<div class="modal fade" id="inputPendaftaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Input Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Data Pasien</h5>

                                    <div class="card-body">
                                        <h6><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inputPasien">
                                                Input Pasien
                                            </button>
                                        </h6>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTablePendaftaran" width="100%" cellspacing="1">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>NO MR</th>
                                                        <th>NIK</th>
                                                        <th>NAMA PASIEN</th>
                                                        <th>JENIS KELAMIN</th>
                                                        <th>TANGGAL LAHIR</th>
                                                        <th>STATUS PASIEN</th>
                                                        <th>ESTATE</th>
                                                        <th>OP</th>
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
                                                        $tgl_lahir = $read['tgl_lahir'];
                                                        $status_pasien = $read['status_pasien'];
                                                        $estate = $read['estate'];
                                                        $op = $read['op'];

                                                    ?>

                                                        <td><?php echo  $no++;  ?></td>
                                                        <td><?php echo  $id_pasien;  ?></td>
                                                        <td><?php echo  $nik;  ?></td>
                                                        <td><?php echo  $nama_pasien;  ?></td>
                                                        <td><?php echo  $jk;  ?></td>
                                                        <td><?php echo  $tgl_lahir;  ?></td>
                                                        <td><?php echo  $status_pasien;  ?></td>
                                                        <td><?php echo  $estate;  ?></td>
                                                        <td><?php echo  $op;  ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Input Pendaftaran</h5>

                                    <?php
                                    require '../api/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT max(id_pendaftaran) as kodeTerbesar FROM tbl_pendaftaran");
                                    $data = mysqli_fetch_array($query);
                                    $idPendaftaran = $data['kodeTerbesar'];
                                    $urutan = (int) substr($idPendaftaran, 10, 5);
                                    $urutan++;
                                    $huruf = "PWSPOLIPDF";
                                    $idPendaftaran = $huruf . sprintf("%05s", $urutan);


                                    $id = $_SESSION['id'];
                                    $query = mysqli_query($koneksi, " SELECT * FROM tbl_user WHERE id='$id'");
                                    while ($read = mysqli_fetch_array($query)) {
                                        $id_author = $read['id'];
                                        $author = $read['nama'];
                                    }
                                    ?>

                                    <!-- General Form Elements -->
                                    <form action="../api/add_pendaftarans.php" method="POST">
                                        <!-- <input id="id_pendaftaran"  type="hidden" class="form-control" /> -->
                                        <input id="id_author" name="id_author" value="<?php echo $id_author ?>" type="hidden" class="form-control" />

                                        <!-- Nomor Pendaftaran -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="11" name="id_pendaftaran" value="<?php echo $idPendaftaran ?>" placeholder="Masukkan" readonly>
                                            <label for="11">Nomor Pendaftaran</label>
                                        </div>

                                        <!-- Nomor Pasien -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="space" name="id_pasien" placeholder="Masukkan Nama Pasien" required>
                                            <label for="space">Nomor Pasien</label>
                                        </div>

                                        <!-- Tanggal Pendaftaran -->
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingDate" name="tanggal_pendaftaran" required>
                                                <label for="floatingDate">Tanggal Pendaftaran</label>
                                            </div>
                                        </div>

                                        <!-- Tinggi Badan -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingTinggi" name="tinggi_badan" placeholder="Masukkan Tinggi Badan Dalam Format cm" required>
                                            <label for="floatingPasien">Tinggi Badan</label>
                                        </div>

                                        <!-- Berat Badan -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingBerat" name="berat_badan" placeholder="Masukkan Berat Badan" required>
                                            <label for="floatingPasien">Berat Badan</label>
                                        </div>

                                        <!-- Lingkat Perut -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingLingkar" name="lingkar_perut" placeholder="Masukkan Lingkar Perut" required>
                                            <label for="floatingPasien">Lingkar Perut</label>
                                        </div>

                                        <!-- Tensi Darah -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingTensi" name="tensi_darah" placeholder="Masukkan Tensi Darah" required>
                                            <label for="floatingPasien">Tensi Darah</label>
                                        </div>

                                        <!-- Suhu -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingSuhu" name="suhu" placeholder="Masukkan Suhu Tubuh" required>
                                            <label for="floatingPasien">Suhu Tubuh</label>
                                        </div>

                                        <!-- Nadi -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingNadi" name="nadi" placeholder="Masukkan Denyut Nadi" required>
                                            <label for="floatingPasien">Denyut Nadi</label>
                                        </div>

                                        <!-- Pernafasan -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingPernafasan" name="pernafasan" placeholder="Masukkan Pernafasan" required>
                                            <label for="floatingPasien">Pernafasan</label>
                                        </div>

                                        <!-- Keluhan Pasien -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="4" name="keluhan_pasien" onkeyup="my4()" data-enable-grammarly="false" placeholder="Masukkan Keluhan Pasien" style="height: 150px;" required></textarea>
                                            <label for="4">Keluhan Pasien</label>
                                        </div>

                                        <!-- Status -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingPernafasan" value="antri" name="status" placeholder="Masukkan Pernafasan" readonly>
                                            <label for="floatingPasien">Status</label>
                                        </div>

                                        <!-- AUTHOR -->
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="5" name="author" value="<?php echo $author; ?>" onkeyup="my5()" placeholder="Masukkan" readonly>
                                                <label for="5">Auhtor</label>
                                            </div>
                                        </div>

                                        <div class="row mb-3 text-center">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                            </div>

                                        </div>

                                    </form><!-- End General Form Elements -->
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
            </div>

        </div>
    </div>
</div>


<!-- Modal OBAT-->
<div class="modal fade" id="inputObat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Input Stock Obat</h5>
                                    <?php
                                    require '../api/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT max(id_obat) as kodeTerbesar FROM tbl_obat");
                                    $data = mysqli_fetch_array($query);
                                    $idObat = $data['kodeTerbesar'];
                                    $urutanss = (int) substr($idObat, 10, 5);
                                    $urutanss++;
                                    $hurufss = "PWSPOLIOBT";
                                    $idObat = $hurufss . sprintf("%05s", $urutanss);
                                    ?>


                                    <!-- General Form Elements -->
                                    <form action="../api/add_obats.php" method="POST">
                                        <!-- <input id="id_pendaftaran"  type="hidden" class="form-control" /> -->
                                        <input id="id_author" name="id_author" value="<?php echo $id_author ?>" type="hidden" class="form-control" />

                                        <!-- Nomor Obat -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="11" name="id_obat" value="<?php echo $idObat ?>" placeholder="Nomor Obat" readonly>
                                            <label for="11">Nomor Obat</label>
                                        </div>

                                        <!-- Nama Obat -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="1" name="nama_obat" placeholder="Nama Obat" onkeyup="my1()" required>
                                            <label for="1">Nama Obat</label>
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingDate" name="date" required>
                                                <label for="floatingDate">Tanggal Masuk</label>
                                            </div>
                                        </div>

                                        <!-- Stok Obat -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok Obat" required>
                                            <label for="stok">Stok Obat</label>
                                        </div>

                                        <!-- Barang Masuk -->
                                        <!-- <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="barangMasuk" name="barang_masuk" placeholder="Barang Masuk" required>
                                            <label for="barangMasuk">Barang Masuk</label>
                                        </div> -->

                                        <!-- Barang Keluar -->
                                        <!-- <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="barangKeluar" name="barang_keluar" placeholder="Barang Keluar" required>
                                            <label for="barangKeluar">Barang Keluar</label>
                                        </div> -->

                                        <!-- Satuan -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan" required>
                                            <label for="satuan">Satuan</label>
                                        </div>

                                        <!-- Harga -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                                            <label for="harga">Harga</label>
                                        </div>

                                        <!-- kategori -->
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" id="floatingJk" name="kategori" required>
                                                    <option selected disabled value>Pilih Kategori Obat</option>
                                                    <option value="Obat Keras">Obat Keras</option>
                                                    <option value="Obat Bebas">Obat Bebas</option>
                                                    <option value="Obat Bebas Terbatas">Obat Bebas Terbatas</option>
                                                </select>
                                                <label for="floatingJk">Kategori Obat</label>
                                            </div>
                                        </div>

                                        <!-- Deskripsi -->
                                        <div class="col-12"></div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="4" name="deskripsi" onkeyup="my4()" data-enable-grammarly="false" placeholder="Deksripsi" style="height: 150px;" required></textarea>
                                            <label for="4">Deksripsi</label>
                                        </div>

                                        <!-- AUTHOR -->
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="5" name="author" value="<?php echo $author; ?>" onkeyup="my5()" placeholder="Masukkan" readonly>
                                                <label for="5">Auhtor</label>
                                            </div>
                                        </div>

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
                </section>
            </div>
        </div>
    </div>
</div>