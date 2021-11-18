<?php
session_start();

include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($host, "SELECT * FROM user WHERE username = '$username' AND password='$password'");
$row = mysqli_fetch_array($data);
if ($row['username'] == $username AND $row['password'] == $password)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:index2.php');
}
else{
  echo "<script>
  		alert
  		('Maaf, Username dan Password Anda Salah!');
		window.location='halamanlogin.php'</script>";
}
?>