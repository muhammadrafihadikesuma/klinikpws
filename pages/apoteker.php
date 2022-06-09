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
			<h1>DATA APOTEKER</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.php">Home</a></li>
					<li class="breadcrumb-item active">Data Apoteker</li>
				</ol>
			</nav>
		</div><!-- End Page Title -->

		<section class="section">
			<div class="row">
				<div class="col-lg-12">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Data Apoteker</h5>

							<!-- Table with stripped rows -->
							<table class="table datatable">
								<thead>
									<tr>
										<th>#</th>
										<th>NO MR</th>
										<th>NAMA</th>
										<th>KELUHAN</th>
										<th>PEMERIKSAAN</th>
										<th>DIAGNOSA</th>
										<th>TERAPI</th>
										<th>RESEP</th>
										<th style="text-align:center;">Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									require  "../api/koneksi.php";
									$sql = mysqli_query($koneksi, "SELECT * FROM tbl_diagnosa WHERE status='Resep' ORDER BY id_pendaftaran  Desc LIMIT 200") or die("error karena" . mysqli_error($koneksi));
									$no = 1;
									while ($a = mysqli_fetch_array($sql)) {
										$id = $a['id_diagnosa'];
										$d1 = $a['id_pasien'];
										$d2 = $a['id_pendaftaran'];
										$d3 = $a['pemeriksaan'];
										$d4 = $a['diagnosa'];
										$d5 = $a['terapi'];
										$d6 = $a['resep'];
										$d7 = $a['status'];
										$d8 = $a['diagnosa2'];

									?>
										<tr style="font-size:12px;" ;>
											<td style="width:2%" ;><?php echo $no++;  ?></td>

											<?php
											echo $noantrian = substr($id, 11, 4);
											?>
											</td>

											<td style="width:3%; text-align:left;"><?php echo  $d1;  ?></td>
											<td style="width:7%; text-align:left;">
												<?php
												require  "../api/koneksi.php";
												$sql4 = mysqli_query($koneksi, "SELECT * FROM tbl_pasien WHERE id_pasien='$d1'") or die("error karena " . mysqli_error($koneksi));
												while ($a4 = mysqli_fetch_array($sql4)) {
													echo $e4 = $a4['nama_pasien'];
													//echo $d1;
												}
												?>
											</td>

											<?php
											require  "../api/koneksi.php";
											$sql5 = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran='$d2' ") or die("error karena " . mysqli_error($koneksi));
											while ($a5 = mysqli_fetch_array($sql5)) {
												$keluhan = $a5['keluhan_pasien'];
												//echo $d1;
											}
											?>
											<td style="width:10%; text-align:left;"><?php echo  $keluhan;  ?></td>
											<td style="width:10%; text-align:left;"><?php echo  $d3;  ?></td>
											<td style="width:10%; text-align:left;">
												<?php
												require  "../api/koneksi.php";
												$sql4 = mysqli_query($koneksi, "SELECT * FROM tbl_penyakit WHERE id='$d4'") or die("error karena " . mysqli_error($koneksi));
												while ($a4 = mysqli_fetch_array($sql4)) {
													echo $e4 = $a4['nama_penyakit'];
													//echo $d1;
												}
												echo " - ";
												$sql5 = mysqli_query($koneksi, "SELECT * FROM tbl_penyakit WHERE id='$d8'") or die("error karena " . mysqli_error($koneksi));
												while ($a5 = mysqli_fetch_array($sql5)) {
													echo $e5 = $a5['nama_penyakit'];
													//echo $d1;
												}
												?>
											</td>
											<td style="width:10%; text-align:left;"><?php echo  $d5;  ?></td>
											<td style="width:15%; text-align:left;"><?php echo  $d6;  ?></td>
											<td style="width:7%; text-align:center;">

												<a href="sekred.php?page=proses_batal_rekam&id=<?php echo $id; ?>&idp=<?php echo $d2; ?>" class="label label-sm label-info"> Batal</a>
												<a href="sekred.php?page=print_surat_sakit&id=<?php echo $id; ?>" class="label label-sm label-success"> Print</a>
												<a href="sekred.php?page=proses_input_rekam&id=<?php echo $id; ?>" class="label label-sm label-danger"> Selesai</a>



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