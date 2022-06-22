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
$query = mysqli_query($koneksi, " SELECT * FROM tbl_user WHERE id='$id'");
while ($read = mysqli_fetch_array($query)) {
	$id_author = $read['id'];
	$author = $read['nama'];
}
?>


<body>

	<main id="main" class="main">

		<div class="pagetitle">
			<h1>FORM INPUT PASIEN</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../pages/home.php">Home</a></li>
					<li class="breadcrumb-item"><a href="../pages/pasien.php">Data Pasien</a></li>
					<li class="breadcrumb-item active">Input Pasien</li>
				</ol>
			</nav>
		</div><!-- End Page Title -->

		<section class="section">
			<div class="row">
				<div class="col-lg-12">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Input Pasien</h5>

							<!-- General Form Elements -->
							<form action="../api/add_pasiens.php" method="POST">

								<!-- <input id="id_pasien"  type="hidden" class="form-control" /> -->

								<input id="id_author" name="id_author" value="<?php echo $id_author ?>" type="hidden" class="form-control" />
																
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
										<input type="number" class="form-control" id="10" name="nik" placeholder="Masukkan" required>
										<label for="10">Nomor Induk Kependudukan</label>
									</div>
								</div>

								<!-- Nama Pasien -->
								<div class="col-12 position-relative">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="1" name="nama_pasien" onkeyup="my1()" placeholder="Masukkan Nama Pasien" required>
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
										<input type="text" class="form-control" id="2" name="nama_pekerja" onkeyup="my2()" placeholder="Masukkan Nama Pekerja" required>
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
										<!-- <label for="floatingJabatan"> Jabatan </label> -->
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
										<input type="text" class="form-control" id="3" name="no_bpjs" onkeyup="my3()" placeholder="Masukkan" required>
										<label for="3">Nomor BPJS</label>
										<div class="invalid-tooltip">
											No BPJS Tidak Boleh Kosong!
										</div>
									</div>
								</div>

								<!-- No Hp -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="4" name="nohp_pekerja" onkeyup="my4()" placeholder="Masukkan" required>
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
		</section>
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php require '../widgets/footer.php'; ?>