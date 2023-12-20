<?php 
session_start();
 
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
    echo "<script>alert('Login Berhasil.');window.location='../homepage.php';</script>";
}else{
	echo "<script>alert('Username dan Password Salah.');window.location='../index.php';</script>";
}
?>