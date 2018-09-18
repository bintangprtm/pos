<?php 
include "db.php";
$namabarang=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$jenis_pengajuan = strtoupper(implode("-",$_POST['jenis_pengajuan']));
$jadwal_pemasangan = $_POST['jadwal_pemasangan'];
$jadwal_pembelian = $_POST['jadwal_pembelian'];
$pj_teknis = $_POST['pj_teknis'];
$pj_pembelian = $_POST['pj_pembelian'];
$mata_anggaran = $_POST['mata_anggaran'];
$nilai_anggaran = $_POST['nilai_anggaran'];
$terpakai = $_POST['terpakai'];
$sisa_anggaran = $_POST['sisa_anggaran'];
$maksud = $_POST['maksud'];
$keterangan = $_POST['keterangan'];
$saran = $_POST['saran'];
$tax=$_POST['tax'];
$last_action="Pengajuan di input oleh user";
$uslev=$_SESSION['level'] ;
$posisi=$_SESSION['posisi'];
$person=$_SESSION['nama'];
$div=$_SESSION['divisi'];
$dtfrm=date("Ym");
$created_at=date("d M Y");
$rdm=rand(00, 99);
$formcoe="PO-".$div."-".$dtfrm."".$rdm;
$mysql=("INSERT INTO data_pengajuan (unit_kerja,form_code,created_by,jenis_pengajuan,jadwal_pemasangan,jadwal_pembelian,maksud,saran,keterangan,pj_teknis,pj_pembelian,mata_anggaran,nilai_anggaran,terpakai,created_at,sisa_anggaran,progres,last_action,last_act_by,tax) VALUES ('$div','$formcoe','$person','$jenis_pengajuan','$jadwal_pemasangan','$jadwal_pembelian','$maksud','$saran','$keterangan','$pj_teknis','$pj_pembelian','$mata_anggaran','$nilai_anggaran','$terpakai','$created_at','$sisa_anggaran','1','$last_action','$person','$tax')");
$result=mysqli_query($db,$mysql);


for($i=0;$i<count($namabarang);$i++)
 {
  if($namabarang[$i]!="" && $harga[$i]!="" && $jumlah[$i]!="")
  {
   mysqli_query($db,"insert into data_barang (nama_barang,harga_satuan,jumlah,id_form) values('$namabarang[$i]','$harga[$i]','$jumlah[$i]','$formcoe')");	 
  }
 }
include "mailfunc.php";
$category="pengajuan";
$aksi = "menginput form $formcoe";
$name = $username;
include "log.php";

header('location:../index.php');

 
?>