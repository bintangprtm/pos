<?php
include 'db.php';
$group=$_GET['group'];
$nm=$_SESSION['nama'];
$arrayid=implode(',', $_POST['auth']);
mysqli_query($db,"UPDATE m01_groupprivileges set Permission='1' , UpdateBy='$nm' where GroupID='$group' AND MenuID in ($arrayid)");
mysqli_query($db,"UPDATE m01_groupprivileges set Permission='0' , UpdateBy='$nm' where GroupID='$group' AND MenuID NOT in ($arrayid)");
$category = "Update Privileges";
$grp=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM m01_groupauthority where ID=$group"));
$aksi = "update privileges for group $grp[Name]";
include 'log.php';
  
  header('location:../pages/dashboard/index.php?page=grouplist');


 ?>