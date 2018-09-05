<?php
session_start();
$nama = $_SESSIONOFON["username"];
$divs = $_SESSIONOFON["divisi"];
$ip_address=$_SERVER['REMOTE_ADDR'];
if ($nama == null){
$query_log = ("INSERT INTO log (log,user,timestamp,category,divisi) VALUES ('$username telah $aksi dari ip $ip_address','$username','$date','$category','$divs')");
}else{
$query_log = ("INSERT INTO log (log,user,timestamp,category,divisi) VALUES ('$nama telah $aksi dari ip $ip_address','$nama','$date','$category','$divs')");
}
$querydb = mysqli_query($db,$query_log);
?>