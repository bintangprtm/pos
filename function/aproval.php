<?php 
include "db.php";
$id=$_POST['id'];
$aksi=$_POST['aksi'];
$user=$_SESSION['username'];
$comment=$_POST['comment'];
$namalengkap=$_SESSION['nama'];


$cekharga=mysqli_query($db,"SELECT * FROM data_barang where id_form='$id'");
while ($st=mysqli_fetch_array($cekharga)) {
$hrg=$st[jumlah]*$st[harga_satuan];
$hrgakr+=$hrg;
}

if ($hrgakr > 20000000) {
	
$cekprogres=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM data_pengajuan where form_code='$id'"));
if($cekprogres['progres']=='1'){$pgs='2';}elseif($cekprogres['progres']=='2'){$pgs='3';}if($cekprogres['progres']=='3'){$pgs='4';}elseif($cekprogres['progres']=='4'){$pgs='5';};
if ($aksi=="accept") {
$updatestatus=mysqli_query($db,"UPDATE data_pengajuan SET progres='$pgs' , last_action='aproved by $namalengkap' , last_act_by='$namalengkap' where form_code='$id' ");
$to_db=mysqli_query($db,"INSERT INTO aproval (id_form,status,comment,act_by,act_at) VALUES ('$id','aproved','$comment','$user','$date')");


$formcoe=$id;

include "mailfunc.php";

$category="aproval";
$aksi = "aproved form $id";
$name = $username;
include "log.php";
header('location:../index.php');



} elseif ($aksi=="rejected") {
$updatestatus=mysqli_query($db,"UPDATE data_pengajuan SET progres='rejected' , last_action='rejected by $namalengkap' , last_act_by='$namalengkap' ");
$to_db=mysqli_query($db,"INSERT INTO aproval (id_form,status,comment,act_by,act_at) VALUES ('$id','rejected','$comment','$user','$date')");

$category="aproval";
$aksi = "rejected form $id";
$name = $username;
include "log.php";
header('location:../index.php');

}
} else {
$cekprogres=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM data_pengajuan where form_code='$id'"));
if($cekprogres['progres']=='1'){$pgs='2';}elseif($cekprogres['progres']=='2'){$pgs='4';}if($cekprogres['progres']=='3'){$pgs='4';}elseif($cekprogres['progres']=='4'){$pgs='5';};
if ($aksi=="accept") {
$updatestatus=mysqli_query($db,"UPDATE data_pengajuan SET progres='$pgs' , last_action='aproved by $namalengkap' , last_act_by='$namalengkap' where form_code='$id' ");
$to_db=mysqli_query($db,"INSERT INTO aproval (id_form,status,comment,act_by,act_at) VALUES ('$id','aproved','$comment','$user','$date')");


$formcoe=$id;

include "mailfunc.php";

$category="aproval";
$aksi = "aproved form $id";
$name = $username;
include "log.php";
header('location:../index.php');



} elseif ($aksi=="rejected") {
$updatestatus=mysqli_query($db,"UPDATE data_pengajuan SET progres='rejected' , last_action='rejected by $namalengkap' , last_act_by='$namalengkap' ");
$to_db=mysqli_query($db,"INSERT INTO aproval (id_form,status,comment,act_by,act_at) VALUES ('$id','rejected','$comment','$user','$date')");

$category="aproval";
$aksi = "rejected form $id";
$name = $username;
include "log.php";
header('location:../index.php');

}
}
?>