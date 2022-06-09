<?php
session_start(); 

require '../api/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query=$koneksi->query("SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");
$data=mysqli_fetch_array($query);

if ($data==TRUE)
{	
	$_SESSION['username']    = $username;
	header("location:../pages/index.php");	
}
 else 
 {
	echo "<script>location='login.php'; </script>";	
}
?>