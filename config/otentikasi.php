<?php
include('config.php');
session_start();
 
//tangkap data dari form login
$email = $_POST['email'];
$password = $_POST['password'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
$q = mysql_query("select * from user where email='$email' and password='$password'");
 
if (mysql_num_rows($q) == 1) {
    //kalau username dan password sudah terdaftar di database
	$_SESSION['email'] = $email;
    header('location:index.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=1');
}
?>