<?php 
session_start();
 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
    echo "<script>alert('Login Berhasil.');window.location='../data.php';</script>";
}else{
	echo "<script>alert('Username dan Password Salah.');window.location='../login.php';</script>";
}
?>