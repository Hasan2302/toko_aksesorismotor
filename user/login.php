<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($host, "SELECT * FROM user where username='$username' and password='$password'");
$cek = mysqli_fetch_array($login);

if($row['username'] == $username AND $row['password'] == $password){
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	header('location:admin/index2.php');
}else{
	echo"
	<script>
	alert('maaf,username dan password anda salah');
	window.location='index.php'</script>";
}
?>