<?php
require '../api/koneksi.php';

$id_pasien=$_POST['id_pasien'];
$id_author=$_POST['id_author'];
$nik=$_POST['nik'];
$nama_pasien=$_POST['nama_pasien'];
$jk=$_POST['jk'];
$no_bpjs=$_POST['no_bpjs'];
$tgl_lahir=$_POST['tgl_lahir'];
$status_pasien=$_POST['status_pasien'];
$nama_pekerja=$_POST['nama_pekerja'];
$jabatan_pekerja=$_POST['jabatan_pekerja'];
$status_pekerja=$_POST['status_pekerja'];
$nohp_pekerja=$_POST['nohp_pekerja'];
$estate=$_POST['estate'];
$op=$_POST['op'];
$author=$_POST['author'];

$check_nik = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_pasien WHERE nik = '$nik'"));

if ($check_nik > 0) {
    # code...
    echo '<script> 
    alert ("NIK TELAH TERDAFTAR DI DATABASE, LANJUTKAN KE FORM INPUT PENDAFTARAN..!!");
	window.location.href="../forms/add_pasien.php";
    </script>';
} else {
    # code...
    $send=mysqli_query($koneksi, "INSERT into tbl_pasien VALUES('$id_pasien',
    '$id_author',
    '$nik',
    '$nama_pasien',
    '$jk',
    '$no_bpjs',
    '$tgl_lahir',
    '$status_pasien',
    '$nama_pekerja',
    '$jabatan_pekerja',
    '$status_pekerja',
    '$nohp_pekerja',
    '$estate',
    '$op',
    '$author'
    )")or die(mysqli_error($connection));


header("location:../pages/pasien.php");
}
