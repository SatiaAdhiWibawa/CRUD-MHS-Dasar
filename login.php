<?php
session_start();
require_once ('config.php');
$username=$_POST['username'];
$password=$_POST['password'];



$sql = "SELECT * FROM admin where username='$username' ";
$query = mysqli_query($db, $sql);
$rows=mysqli_num_rows($query);
$hasil=mysqli_fetch_array($query);

if ($rows == 0){
	echo "user belum terdaftar atau salah";
	echo "<a href=\"index.php\"> Kembali Ke halaman Login</a>";
	// jika user salah maka akan muncul user belum terdaftar, muncul link untuk ke halaman index.php
}else {
if ($password <> $hasil['password']) {
	echo "Password yang anda masukan salah";
	echo "<a href=\"index.php\"> back</a><br><br><br>";
	// jika password maka akan muncul salah, muncul link untuk ke halaman index.php
	
	}else{
		$_SESSION['username']= "$username";
		header('location:beranda.php');
		}
		// jika benar maka akan di arahkan ke beranda.php
}




?>