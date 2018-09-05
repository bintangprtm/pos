<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "menu";
$db=mysqli_connect("$server","$username","$password","$database");
$date=date("Y-m-d H:i:s");

?>