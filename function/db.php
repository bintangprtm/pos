<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
 $file=file_get_contents($_SERVER['DOCUMENT_ROOT']."/crui165.txt");
$array=explode("|", $file)  ; 
$server = $array[0] ;
$username = $array[1] ;
$password = $array[2] ;
$database = $array[3];
$db=mysqli_connect("$server","$username","$password","$database");
$date=date("Y-m-d H:i:s");



?>
