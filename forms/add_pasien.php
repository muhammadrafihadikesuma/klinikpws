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
			<h1>FORM INPUT PASIEN</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.php">Home</a></li>
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

								<input id="id_pasien" name="id_pasien" value="<?php echo $idPasien ?>" type="hidden" class="form-control" />

								<!-- Nama Pasien -->
								<div class="col-12 position-relative">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="1" name="nm" onkeyup="my1()" placeholder="Masukkan Nama Pasien" required>
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
											<option value="laki">Laki - Laki</option>
											<option value="perempuan">Perempuan</option>
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
									<select class="form-select" aria-label="Default select example" id="floatingStatus" name="status" required>
										<option selected disabled value>Pilih Status Pasien</option>
										<option value="pekerja">Pekerja</option>
										<option value="suami_istri">Istri/Suami Pekerja</option>
										<option value="anak Pekerja">Anak Pekerja</option>
										<option value="umum">Umum</option>
									</select>
									<label for="floatingStatus">Status Pasien</label>

								</div>

								<!-- Nama Pekerja -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="1" name="nama_pekerja" onkeyup="my1()" placeholder="Masukkan Nama Pekerja" required>
										<label for="1">Nama Pekerja</label>
										<div class="invalid-tooltip">
											Nama Pekerja Tidak Boleh Kosong!
										</div>
									</div>
								</div>

								<!-- Jabatan Pekerja -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<select class="form-select" id="floatingJabatan" name="jabatan" style="width: 100%;" data-placeholder="Pilih Jabatan">
											<option selected>Jabatan Pekerja</option>
											<option value="1">Act. Askep ESD</option>
											<option value="2">Act. Askep Nursery </option>
											<option value="3">Act. Mgr Pangkor</option>
											<option value="4">Act. Mgr Pasir Salak</option>
											<option value="5">Adm. Kebun</option>
											<option value="6">Agt. Keamanan</option>
											<option value="7">Analis Laboratorium</option>
											<option value="8">Anggota</option>
											<option value="9">Askep</option>
											<option value="10">Askep Grik I & Ast.Lap. OP'05 A</option>
											<option value="11">Askep Grik II & Ast.Lap. OP'06 A</option>
											<option value="12">Askep Humas</option>
											<option value="13">Askep Operational dan Maintenance</option>
											<option value="14">Askep Pangkor I & Ast. Lap. OP'98 B</option>
											<option value="15">Askep Pangkor II & Ast. Lap. OP'99</option>
											<option value="16">askep Pasir Salak I & Ast. Lap. OP'97 B</option>
											<option value="17">Askep Pasir Salak II & Ast. Lap OP'98 D</option>
											<option value="18">Askep Produksi</option>
											<option value="19">Assistant Accounting</option>
											<option value="20">Assistant Accounting II</option>
											<option value="21">Assistant Admin Palembang</option>
											<option value="22">Assistant Elektrikal</option>
											<option value="23">Assistant Finance</option>
											<option value="24">Assistant Lapangan OP'06 B</option>
											<option value="25">Assistant Lapangan OP'2007 A</option>
											<option value="26">Assistant Lapangan OP'2007 B</option>
											<option value="27">Assistant Lapangan OP'2008</option>
											<option value="28">Assistant Lapangan OP'96</option>
											<option value="29">Assistant Lapangan OP'97 A</option>
											<option value="30">Assistant Lapangan OP'97 C</option>
											<option value="31">Assistant Lapangan OP'98 A</option>
											<option value="32">Assistant Lapangan OP'98 C</option>
											<option value="33">Assistant Lapangan OP'98 D</option>
											<option value="34">Assistant Marketing</option>
											<option value="35">Assistant MTC</option>
											<option value="36">Assistant Personalia</option>
											<option value="37">Assistant Poliklinik</option>
											<option value="38">Assistant Proses PKS</option>
											<option value="39">Assistant QC Air Boiler, WT & Limbah</option>
											<option value="40">Assistant QC Peng. Produksi</option>
											<option value="41">Assistant Sortasi</option>
											<option value="42">Assistant Sustainability</option>
											<option value="43">Assistant Task Force</option>
											<option value="44">Assistant Transport</option>
											<option value="45">Assistant Workshop</option>
											<option value="46">Bidan Poliklinik BC-RO</option>
											<option value="47">Bidan Poliklinik Grik</option>
											<option value="48">Bidan Poliklinik PKS</option>
											<option value="49">Bilal Masjid</option>
											<option value="50">Danru</option>
											<option value="51">Danru Keamanan</option>
											<option value="52">Danton Security</option>
											<option value="53">Deputy Executive Director</option>
											<option value="54">Dokter Poliklinik</option>
											<option value="55">Driver FC</option>
											<option value="56">Effluent Pond</option>
											<option value="57">Electrical</option>
											<option value="68">ESD</option>
											<option value="59">Executive Director</option>
											<option value="60">Financial Controller</option>
											<option value="61">General Manager</option>
											<option value="62">Guru</option>
											<option value="63">Head Sortasi</option>
											<option value="64">Imam Masjid</option>
											<option value="65">Kepala Gudang</option>
											<option value="66">Kasir</option>
											<option value="67">Keamanan Jetty</option>
											<option value="68">Kemanan PKS</option>
											<option value="69">Kepala Mekanik</option>
											<option value="70">Kepala Sekolah PWS 1</option>
											<option value="71">Kepala Sekolah PWS 2</option>
											<option value="72">Kerani BBM & Pupuk</option>
											<option value="73">Kerani Divisi</option>
											<option value="74">Kerani ESD</option>
											<option value="75">Kerani Fin & Acct RO</option>
											<option value="76">Kerani Gudang</option>
											<option value="77">Kerani Gudang Grik</option>
											<option value="78">Kerani Gudang Induk</option>
											<option value="79">Kerani Gudang Induk & Spare Part</option>
											<option value="80">Kerani Kantor</option>
											<option value="81">Kerani MTC</option>
											<option value="82">Kerani Nursery</option>
											<option value="83">Kerani Panen</option>
											<option value="84">Kerani Pembukuan</option>
											<option value="85">Kerani Timbangan</option>
											<option value="86">Kerani Transport</option>
											<option value="87">Kerani Workshop</option>
											<option value="88">KTU</option>
											<option value="89">Manager ESD</option>
											<option value="90">Manager Finance & Accounting</option>
											<option value="91">Manager Grik</option>
											<option value="92">Manager Personalia, Humas & Umum </option>
											<option value="93">Mandor 1</option>
											<option value="94">Mandor Jalan dan Bangunan</option>
											<option value="95">Mandor Transport</option>
											<option value="96">Mandor Transport Grik</option>
											<option value="97">Mekanik</option>
											<option value="98">Mekanik Bubut</option>
											<option value="99">Mekanik Genset</option>
											<option value="100">Mekanik Maintenance</option>
											<option value="101">Office Boy</option>
											<option value="102">Office Girl</option>
											<option value="103">Oil Man</option>
											<option value="104">Operator Albert-Whelloader</option>
											<option value="105">Operator Backhoe Loader</option>
											<option value="106">Operator Boiler</option>
											<option value="107">Operator Dump Truck</option>
											<option value="108">Operator Exc Kobelco</option>
											<option value="109">Operator Exc Long Arm</option>
											<option value="110">Operator Excavator</option>
											<option value="111">Operator Front Loader</option>
											<option value="112">Operator Genset</option>
											<option value="113">Operator Genset Jetty</option>
											<option value="114">Operator Genset OP'2006 A</option>
											<option value="115">Operator Genset OP'2007 B</option>
											<option value="116">Operator Kernel Station</option>
											<option value="117">Operator Klarifikasi</option>
											<option value="118">Operator Loading Ramp</option>
											<option value="119">Operator Mesin Air</option>
											<option value="120">Operator Mesin Rumput</option>
											<option value="122">Operator Mid Mounted Greder</option>
											<option value="123">Operator Mini Transport</option>
											<option value="124">Operator Motor Greader</option>
											<option value="125">Operator Mounted Greader</option>
											<option value="126">Operator Nut & Karnel Station </option>
											<option value="127">Operator Power House</option>
											<option value="128">Operator Proses</option>
											<option value="129">Operator Proses - Clarifikasi</option>
											<option value="130">Operator Proses - Sterilizer</option>
											<option value="131">Operator Regional Office</option>
											<option value="132">Operator Shovel</option>
											<option value="133">Operator Sprayder</option>
											<option value="134">Operator Thereshing/Pressing</option>
											<option value="135">Operator Trippler</option>
											<option value="136">Operator Traktor</option>
											<option value="137">Operator Water Pump</option>
											<option value="138">Operator Whelloader</option>
											<option value="130">Operator Water Treatment</option>
											<option value="140">Operator Genset Grik</option>
											<option value="121">Pemanen</option>
											<option value="141">Pembantu Elektrik</option>
											<option value="142">Pembantu Operator Boiler</option>
											<option value="143">Pembantu Operator Genset</option>
											<option value="144">Pembantu Operator Klarifikasi</option>
											<option value="145">Pembantu Operator Press</option>
											<option value="146">Pembantu Operator Tippler</option>
											<option value="147">Pembantu Operator Loading Ramp</option>
											<option value="148">Pembantu Sortasi TBS</option>
											<option value="149">Pembantu Operator Tippler</option>
											<option value="150">Pembantu Sortasi Tandan Buah Sawit</option>
											<option value="151">Pembersih Pabrik</option>
											<option value="152">Pemuat</option>
											<option value="152">Pengawas Alat Berat</option>
											<option value="152">Pengawas Elektrikal</option>
											<option value="152">Pengawas Maintenance</option>
											<option value="152">Pengirim Produksi</option>
											<option value="152">Penjaga Keamanan</option>
											<option value="152">Penjaga Keamanan Barak & Gudang</option>
											<option value="152">Penjaga keamanan Divisi</option>
											<option value="160">Perawat Poliklinik Grik</option>
											<option value="161">Perawat Poliklinik RO</option>
											<option value="162">Petugas Alat</option>
											<option value="163">Petugas Nursery</option>
											<option value="164">Petugas Panen</option>
											<option value="165">Petugas Pengiriman</option>
											<option value="166">Petugas Perawatan</option>
											<option value="167">Petugas Proses Shift</option>
											<option value="168">Petugas Sortasi</option>
											<option value="169">Petugas Water Traetmen</option>
											<option value="170">Pelaksana Tugas SM Nursery</option>
											<option value="171">Sekretaris ED & DED, Assistant Administrasi Kebun</option>
											<option value="172">Senior Manager Kebun</option>
											<option value="173">Senior Manager</option>
											<option value="174">Sortasi TBS</option>
											<option value="175">Staff & Pengurus Kantor Palembang</option>
											<option value="176">Staff IT</option>
											<option value="177">Staff IT dan Accounting</option>
											<option value="178">Staff Kantor Pembantu Jakarta</option>
											<option value="179">Staff Pajak dan Keuangan</option>
											<option value="180">Staff Personalia</option>
											<option value="181">Staff Purchasing</option>
											<option value="182">Supir</option>
											<option value="183">Supir Ambulance</option>
											<option value="184">Supir DGM I</option>
											<option value="191">Supir DGM II</option>
											<option value="185">Supir DT Pool</option>
											<option value="186">Supir DT Pool</option>
											<option value="187">Supir DT Pool B. Camp RO</option>
											<option value="188">Supir Dump truck</option>
											<option value="189">Supir ED</option>
											<option value="190">Supir General Manager</option>
											<option value="192">Supir Manager Grik</option>
											<option value="193">Supir Manager Pangkor</option>
											<option value="194">Supir Manager ESD</option>
											<option value="195">Supir Manager Pasir Salak</option>
											<option value="196">Supir Mobil Bus Palembang</option>
											<option value="197">Supir Mobil Manager Acct.</option>
											<option value="198">Supir Mobil Manager Personalia& Umum</option>
											<option value="199">Supir Mobil Patroli</option>
											<option value="200">Supir Mobil Poll</option>
											<option value="201">Supir Senior Manager</option>
											<option value="202">Training Assisteen OP 2003/2004</option>
											<option value="203">Training Assisten OP 2005 B</option>
											<option value="204">Training Mandor</option>
											<option value="205">Training Mandor I</option>
											<option value="206">Training Asisten Gudang</option>
											<option value="207">Tukang Kebun</option>
											<option value="208">Wakil Komandan Regu</option>
											<option value="209">Welder</option>
											<option value="210">Umum</option>
										</select>
										<!-- <label for="floatingJabatan"> Jabatan </label> -->
									</div>
								</div>

								<!-- Status Pekerja -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<select class="form-select" aria-label="Default select example" id="floatingStatusPekerja" name="golongan" required>
											<option selected disabled value>Pilih Status Pekerja</option>
											<option value="executive">Executive</option>
											<option value="pb">PB</option>
											<option value="pght">PGHT</option>
											<option value="bhl">BHL</option>
											<option value="brg">BRG</option>
											<option value="umum">UMUM</option>
										</select>
										<label for="floatingStatusPekerja">Status Pekerja</label>
									</div>
								</div>

								<!-- Estate Pekerja -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<select class="form-select" aria-label="Default select example" id="floatingEstate" name="estate" required>
											<option selected disabled value>Pilih Estate Pekerja</option>
											<option value="ro">Regional Office</option>
											<option value="psalak">Pasir Salak</option>
											<option value="pangkor">Pangkor</option>
											<option value="grik">Grik</option>
											<option value="pks">PKS</option>
											<option value="umum">Umum</option>
										</select>
										<label for="floatingEstate">Estate Pekerja</label>
									</div>
								</div>

								<!-- Op Pekerja -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<select class="form-select" aria-label="Default select example" id="floatingOp" name="op" required>
											<option selected disabled value>Pilih OP Pekerja</option>
											<option value="ro">RO</option>
											<option value="pks">PKS</option>
											<option value="op96">OP 96</option>
											<option value="op97a">OP 97A</option>
											<option value="op97b">OP 97B</option>
											<option value="op97c">OP 97C</option>
											<option value="op97d">OP 97D</option>
											<option value="op98a">OP 98A</option>
											<option value="op98b">OP 98B</option>
											<option value="op98c">OP 98C</option>
											<option value="op98d">OP 98D</option>
											<option value="op99">OP 99</option>
											<option value="op20034">OP 2003/2004</option>
											<option value="op2005a">OP 2005A</option>
											<option value="op2005b">OP 2005B</option>
											<option value="op2006a">OP 2006A</option>
											<option value="op2006b">OP 2006B</option>
											<option value="op2007a">OP 2007A</option>
											<option value="op2007b">OP 2007B</option>
											<option value="op2008">OP 2008</option>
											<option value="nursery">Nursery</option>
											<option value="umum">Umum</option>
										</select>
										<label for="floatingEstate">OP Pekerja</label>
									</div>
								</div>

								<!-- No BPJS -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="floatingBpjs" name="bpjs" onkeyup="myFunction2()" placeholder="Masukkan Nomor BPJS" required>
										<label for="floatingBpjs">Nomor BPJS</label>
										<div class="invalid-tooltip">
											No BPJS Tidak Boleh Kosong!
										</div>
									</div>
								</div>

								<!-- No Hp -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="floatingHp" name="nohp" onkeyup="myFunction3()" placeholder="Masukkan No Handphone" required>
										<label for="floatingHp">Nomor Handphone</label>
										<div class="invalid-tooltip">
											No HP Tidak Boleh Kosong!
										</div>
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