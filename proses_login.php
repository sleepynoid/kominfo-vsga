<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from tester where username='$username' and password='$password'");

if ($login == True) {

	header("location:home.php");
} else {
	header("location:gatau.html");
	echo "login gagal";
}
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);
echo $data['username'];

if ($cek > 0) {
	$_SESSION['username']= $username;
	$_SESSION['password']= $password;

	header("location:home.php");

	if ($data['username'] == $username and $data['password'] == $password) {

		header("location:home.php");
	} else {
		header("location:gatau.html");
		echo "login gagal";
	}
} else {
	header("location:gatau.html");
}
?>