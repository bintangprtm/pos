<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
 $file=file_get_contents($_SERVER['DOCUMENT_ROOT']."/crui165.txt");
$array=explode("|", $file)  ; 
$server = 'localhost' ;
$username = 'root' ;
$password = '' ;
$database = 'bkstechpos';
$db=mysqli_connect("$server","$username","$password","$database");
$date=date("Y-m-d H:i:s");



?>
