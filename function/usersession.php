<?php
if ($_GET['act']=='login') {
include "../function/db.php";
//error_reporting(0);
$username = $_POST['form-username'];
$pass     = $_POST['form-password'];
$passkey=md5(md5(md5($pass)));
if($username=='superadmin'){
$terenkripsibgt=md5(md5(md5($pass)));
$gaenkripsibgt=$pass;
if($username=='superadmin' AND $terenkripsibgt=='2993854407f915f2417b5eee4d3b21d6'){
  session_start();
  $_SESSION['uname'] = 'Administrator';
  $_SESSION['EmpID'] = 'Administrator';
    $_SESSION['posisi'] = 'Administrator';
    $_SESSION['nama'] = 'Administrator';
    $_SESSION['gid'] = '1';
    $category = "log masuk";
$aksi = "berhasil login";
include "log.php";
  header('location:../pages/dashboard/index.php');
  exit();
} else {
  $category = "log masuk";
$aksi = "gagal login";
$ip_address=$_SERVER['REMOTE_ADDR'];
include 'log.php';
   echo "<script type='text/javascript'>alert('Maaf Anda Bukan Admin'); window.location.href='../pages/login/';
   </script>";
}}else{
  $login = mysqli_query($db, "SELECT * FROM user WHERE username='$username' AND password='$passkey'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $passkey)
{
  session_start();
  
  $_SESSION['uname'] = $row['Username'];
  $_SESSION['empid'] = $row['EmpID'];
    $_SESSION['nama'] = $row['FirstName'];
    $_SESSION['gid'] = $row['GroupID'];
$category = "log masuk";
$aksi = "berhasil login";
include "log.php";

    mysqli_query($db,"UPDATE m01_user set LastLogin='$date' where Username='$username' ");
  header('location:../pages/dashboard/index.php');
}
else{
$category = "log masuk";
$aksi = "gagal login";
include 'log.php';
	 echo "<script type='text/javascript'>alert('USERNAME/PASSWORD SALAH!'); window.location.href='../pages/login';
	 </script>";
	}}
} elseif ($_GET['act']=='logout') {
 session_start();
include "../function/db.php";
 $category="log masuk";
$aksi = "logout";
include "../function/log.php";
unset($_SESSION['uname']);
unset($_SESSION['level']);
unset($_SESSION['nama']);
unset($_SESSION['group_id']);
session_destroy();
header('Location:../pages/login/');
exit();
}

?>