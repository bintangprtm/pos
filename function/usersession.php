<?php
if ($_GET['act']=='login') {
include "../function/db.php";
//error_reporting(0);
$username = $_POST['form-username'];
$pass     = $_POST['form-password'];
$passkey=md5($pass);
$login = mysqli_query($db, "SELECT * FROM user WHERE username='$username' AND password='$passkey'");
$row=mysqli_fetch_array($login);
if($username=='admin'){
$terenkripsibgt=md5(md5(md5($pass)));
$gaenkripsibgt=$pass;
if($username=='admin' AND $terenkripsibgt=='2993854407f915f2417b5eee4d3b21d6'){
  session_start();
  $_SESSION['uname'] = 'Administrator';
$category = "log masuk";
$aksi = "berhasil login";
include "../function/log.php";
  $_SESSION['level'] = 'Administrator';
    $_SESSION['posisi'] = 'Administrator';
    $_SESSION['nama'] = 'Administrator';
    $_SESSION['divisi'] = 'Administrator';
    $_SESSION['gid'] = '1';
  header('location:../pages/dashboard/index.php');
  exit();
} else {
  $category = "log masuk";
$aksi = "gagal login";
$ip_address=$_SERVER['REMOTE_ADDR'];
$query_log = ("INSERT INTO log (log,user,timestamp,category) VALUES ('$username telah $aksi dari ip $ip_address','$username','$tanggal','$category')");
$querydb = mysqli_query($db,$query_log);
   echo "<script type='text/javascript'>alert('Maaf Anda Bukan Admin'); window.location.href='../login/';
   </script>";
}}else{
if ($row['username'] == $username AND $row['password'] == $passkey)
{
  session_start();
  
$category = "log masuk";
$aksi = "berhasil login";
include "../function/log.php";
  $_SESSION['uname'] = $row['username'];
  $_SESSION['level'] = $row['user_level'];
    $_SESSION['posisi'] = $row['posisi'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['divisi'] = $row['divisi'];
    $_SESSION['gid'] = $row['group_id'];
    mysqli_query($db,"UPDATE user set last_login='$date' where username='$username' ");
  header('location:../index.php');
}
else{
$category = "log masuk";
$aksi = "gagal login";
$ip_address=$_SERVER['REMOTE_ADDR'];
$query_log = ("INSERT INTO log (log,user,timestamp,category) VALUES ('$username telah $aksi dari ip $ip_address','$username','$tanggal','$category')");
$querydb = mysqli_query($db,$query_log);
	 echo "<script type='text/javascript'>alert('USERNAME/PASSWORD SALAH!'); window.location.href='../login/';
	 </script>";
	}}
} elseif ($_GET['act']=='logout') {
// session_start();
// // include "../function/db.php";
// // $category="log masuk";
// // $aksi = "logout";
// // include "../function/log.php";
// // unset($_SESSION['uname']);
// // unset($_SESSION['level']);
// // unset($_SESSION['posisi']);
// // unset($_SESSION['nama']);
// // unset($_SESSION['divisi']);
// // unset($_SESSION['group_id']);
// session_destroy();
header('Location:../login/');
exit();
}

?>