<!DOCTYPE html>
<html>

<head>
	<title>POLIKLINIK PWS</title>

	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}

		table tr .text2 {
			text-align: right;
			font-size: 16px;
		}

		table tr .text {
			text-align: center;
			font-size: 16px;
		}

		table tr td {
			font-size: 13px;
		}
	</style>
	<link href="../assets/img/apple-touch-icon-new.png" rel="apple-touch-icon">
	<link href="../assets/img/favicon-new.png" rel="icon">

</head>

<body>
	<?php
	require '../api/koneksi.php';
	$id = $_GET['id'];
	$no =1;
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_diagnosa WHERE id_diagnosa = '$id' ");
	while ($read = mysqli_fetch_array($query)) {
		# code...
		$id_diagnosa = $read['id_diagnosa'];
		$id_pasien = $read['id_pasien'];
		$diagnosa = $read['diagnosa'];
	}

	$query_pasien = mysqli_query($koneksi, "SELECT * FROM tbl_pasien WHERE id_pasien = '$id_pasien' ");
	while ($reads = mysqli_fetch_array($query_pasien)) {
		# code...
		$nama_pasien = $reads['nama_pasien'];
		$jabatan_pekerja = $reads['jabatan_pekerja'];
		$jk =$reads['jk'];
		$status_pekerja = $reads['status_pekerja'];
	}

	$query_pendaftaran = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran WHERE id_pasien = '$id_pasien' ");
	while ($readss = mysqli_fetch_array($query_pendaftaran)) {
		# code...
		$tanggal_pendaftaran = $readss['tanggal_pendaftaran'];
	}

	?>
	<center>
		<table>
			<tr>
				<td><img src="../assets/img/apple-touch-icon-new.png" width="90" height="90"></td>
				<td>
					<center>
						<font size="6"><b>POLIKLINIK</b></font><br>
						<font size="6"><b>PT. PINANG WITMAS SEJATI</b></font><br>
						<font size="3">Desa Mangsang, Kecamatan Bayung Lencir, Kabupaten Musi Banyuasin</font><br>
						<font style="font-size: 15px">Provinsi Sumatera Selatan. WA : 0811-7837-948 , E-mail : poliklinikpws@gmail.com</font>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr style="width:610px; height: 3px; background-color: black;">
				</td>
			</tr>
			<table>
				<center>
					<tr>
						<td style="font-size: 20px;"><u><b> SURAT KETERANGAN SAKIT</b> </u></td>
					</tr>
					<tr>

						<td style="font-size: 16px;">
							<center>
								No <?php echo $no++; ?> /POL - PWS/SKS/ ... / 2022
							</center>
						</td>
					</tr>


				</center>

			</table>
		</table>

		<br>
		<br>
		<table width="625">
			<tr>
				<td>
					<font style="font-size: 16px;">Yang Bertanda Tangan Dibawah Ini Menerangkan Bahwa :</font>
				</td>
			</tr>
		</table>
		<br>
		</table>
		<table style="padding-left: 20px;">

			<tr>
				<td style="font-size: 16px;">Nama</td>
				<td style="width: 535px; font-size: 16px;">: <b><?php echo $nama_pasien; ?></b></td>
			</tr>
			<tr>
				<td style="font-size: 16px;">Pekerjaan</td>
				<td style="font-size: 16px;">: <?php echo $jabatan_pekerja; ?></td>
			</tr>
			<tr>
				<td style="font-size: 16px;">Diagnosa</td>
				<td style="font-size: 14px; text-align: initial;">: <?php echo $diagnosa; ?></td>
			</tr>
			<tr>
				<td style="font-size: 16px;">Jam Berobat</td>
				<td style="font-size: 16px;">: <?php echo $tanggal_pendaftaran; ?> </php></td>
			</tr>
			<tr>
				<td style="font-size: 16px;">Jenis Kelamin</td>
				<td style="font-size: 16px;">: <?php echo $jk; ?></td>
			</tr>
			<tr>
				<td style="font-size: 16px;">Umur</td>
				<td style="font-size: 16px;">: 26 Tahun</td>
			</tr>
			<tr>
				<td style="font-size: 16px;">Golongan</td>
				<td style="font-size: 16px;">: <?php echo $status_pekerja; ?></td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td>
					<font style="font-size: 16px; text-align: justify;"> Dari Pemeriksaan Kami Dalam Keadaan Sakit dan Perlu Diberikan Istirahat Selama … (…....) Hari Terhitung Dari
						Tanggal ….................. Sampai Dengan …....................
						<br>
						<br>Demikian Surat Keterangan Ini Dibuat Dengan Sebenarnya dan Untuk Dipergunakan Semestinya.
					</font>
				</td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td style="width: 10000px;  padding-top: 1 px; font-size: 16px;">
					<b style="font-size: 20px;">Catatan </b>
					<br>
					<br>
					<b>
						1 : Setelah Menerima Surat Ini Wajib Langsung Menyerahkan Ke Kantor Divisi.
						<br>
						2 : ...........
					</b>
				</td>
				<td width="430"><br><br><br><br></td>
				<td style="width: 5000px; text-align: center; font-size: 16px;">
					PT. PWS, <?php echo $tanggal_pendaftaran; ?><br><br><br><br>
					<u><b>dr. Fahmi Fachruddinsyah</b></u>
					<br>
					<font style="font-size: 14px;">SIP No. 0169/SIPDP/DPMPTSP-IV/2021</font>
				</td>
			</tr>
		</table>
	</center>
</body>

</html>