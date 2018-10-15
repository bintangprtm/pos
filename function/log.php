<?php
session_start();
$nama = $_SESSION["uname"];
$gidd=$_SESSION["gid"];
$slctgrp=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM m01_groupauthority where ID=$gidd"));
$group=$slctgrp['Name'];
$ip_address=$_SERVER['REMOTE_ADDR'];
if ($nama == null){
$query_log = ("INSERT INTO m01_loghistory (`log`,`user`,`category`,`group`) VALUES ('$username telah $aksi dari ip $ip_address','$username','$category','$group')");
}else{
$query_log = ("INSERT INTO m01_loghistory (`log`,`user`,`category`,`group`) VALUES ('$nama telah $aksi dari ip $ip_address','$nama','$category','$group')");
}
$querydb = mysqli_query($db,$query_log);
?>