<?php
require '../api/koneksi.php';

$a=$_POST['id_pasien'];
$b=$_POST['nm'];
$c=$_POST['jk'];
$d=$_POST['bpjs'];
$e=$_POST['tgl_lahir'];
$f=$_POST['status'];
$g=$_POST['nama_pekerja'];
$h=$_POST['jabatan'];
$i=$_POST['golongan'];
$j=$_POST['nohp'];
$k=$_POST['estate'];
$l=$_POST['op'];



$send=mysqli_query($koneksi, "INSERT into tbl_pasien VALUES('$a',
                                                            '$b',
                                                            '$c',
                                                            '$d',
                                                            '$e',
                                                            '$f',
                                                            '$g',
                                                            '$h',
                                                            '$i',
                                                            '$j',
                                                            '$k',
                                                            '$l'
                                                            )")or die(mysqli_error($connection));
	

header("location:../pages/pasien.php");

?>