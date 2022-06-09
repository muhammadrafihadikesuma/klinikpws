<!-- ======= Header ======= -->
<?php include 'widgets_header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include 'widgets_sidebar.php'; ?>
<!-- End Sidebar-->

<?php
include 'api_koneksi.php';
$query = mysqli_query($koneksi, "SELECT max(id_pendaftaran) as kodeTerbesar FROM tbl_pendaftaran");
$data = mysqli_fetch_array($query);
$idPendaftaran = $data['kodeTerbesar'];
$urutan = (int) substr($idPendaftaran, 10, 5);
$urutan++;
$huruf = "PWSPOLIPDF";
$idPendaftaran = $huruf . sprintf("%04s", $urutan);
?>

<body>

	<main id="main" class="main">

		<div class="pagetitle">
			<h1>FORM INPUT PENDAFTARAN</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.php">Home</a></li>
					<li class="breadcrumb-item"><a href="data_pendaftaran.php">Data Pendaftaran</a></li>
					<li class="breadcrumb-item active">Pendaftaran</li>
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
							<form action="api_pendaftarans.php" method="POST">

								<!-- Nomor Mr -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
								<input id="id_pasien" name="id_pendaftaran" value="<?php echo $idPendaftaran ?>" type="hidden" class="form-control" />
									<input type="text" class="form-control" id="floatingPasien" name="id_pasien" placeholder="Masukkan Nama Pasien" required>
									<label for="floatingPasien">Nomor MR</label>
								</div>

								<!-- Tanggal Pendaftaran -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<input type="date" class="form-control" id="floatingDate" name="tgl_pendaftaran" required>
										<label for="floatingDate">Tanggal Pendaftaran</label>
									</div>
								</div>

								<!-- Tinggi Badan -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingTinggi" name="tinggi" placeholder="Masukkan Tinggi Badan Dalam Format cm" onkeyup="myFunction2()" required>
									<label for="floatingPasien">Tinggi Badan</label>
								</div>

								<!-- Berat Badan -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingBerat" name="berat" placeholder="Masukkan Berat Badan" onkeyup="myFunction3()" required>
									<label for="floatingPasien">Berat Badan</label>
								</div>

								<!-- Lingkat Perut -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingLingkar" name="lingkar" placeholder="Masukkan Lingkar Perut" onkeyup="myFunction4()" required>
									<label for="floatingPasien">Lingkar Perut</label>
								</div>

								<!-- Tensi Darah -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingTensi" name="tensi" placeholder="Masukkan Tensi Darah" onkeyup="myFunction5()" required>
									<label for="floatingPasien">Tensi Darah</label>
								</div>

								<!-- Suhu -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingSuhu" name="suhu" placeholder="Masukkan Suhu Tubuh" onkeyup="myFunction6()" required>
									<label for="floatingPasien">Suhu Tubuh</label>
								</div>

								<!-- Nadi -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingNadi" name="nadi" placeholder="Masukkan Denyut Nadi" onkeyup="myFunction7()" required>
									<label for="floatingPasien">Denyut Nadi</label>
								</div>

								<!-- Pernafasan -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingPernafasan" name="nafas" placeholder="Masukkan Pernafasan" onkeyup="myFunction8()" required>
									<label for="floatingPasien">Pernafasan</label>
								</div>

								<!-- Keluhan Pasien -->
								<div class="col-12"></div>
								<div class="form-floating mb-3">
									<textarea class="form-control"  id="floatingKeluhan" name="keluhan"  data-enable-grammarly="false" placeholder="Masukkan Keluhan Pasien" style="height: 150px;" onkeyup="myFunction9()" required></textarea>
									<label for="floatingKeluhan">Keluhan Pasien</label>
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


				</form><!-- End General Form Elements -->

			</div>
			</div>

			</div>
			</div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include 'widgets_footer.php'; ?>