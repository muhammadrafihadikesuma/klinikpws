<?php

require '../api/koneksi.php';

$id_diagnosa = $_POST['id_diagnosa'];
$id_pasien = $_POST['id_pasien'];
$id_pendaftaran = $_POST['id_pendaftaran'];
$pemeriksaan = $_POST['pemeriksaan'];
$diagnosa = implode(", ", $_POST['diagnosa']);
$terapi = $_POST['terapi'];
$resep = $_POST['resep'];
$status = $_POST['status'];
$tgl_diagnosa = $_POST['tgl_diagnosa'];

$edit = mysqli_query($koneksi, "UPDATE tbl_pendaftaran SET 
                                                           status='resep'
                                                           WHERE id_pendaftaran='$id_pendaftaran'");

$send = mysqli_query($koneksi, "INSERT INTO tbl_diagnosa VALUES( '$id_diagnosa',
                                                                    '$id_pasien',
                                                                    '$id_pendaftaran',
                                                                    '$pemeriksaan',
                                                                    '$diagnosa.',
                                                                    '$terapi',
                                                                    '$resep',
                                                                    '$status',
                                                                    '$tgl_diagnosa')");

header("location: ../pages/diagnosa.php");
