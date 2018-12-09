<?php
include 'db.php';
$service=$_GET['service'];
$id=$_GET['id'];
$description=$_POST['description'];
$parentid=$_POST['parentid'];
$iconcode=$_POST['iconcode'];
$linkpage=$_POST['linkpage'];
$editor=$_SESSION['nama'];
if ($service=='add') {
	mysqli_query($db,"INSERT INTO m01_menusystem (Description,ParentID,IconCode,LinkPage) VALUES ('$description','$parentid','$iconcode','$linkpage')");
	$ambilmenu=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM m01_menusystem WHERE Description='$description' AND LinkPage='$linkpage'"));
	$ambilgrup=mysqli_query($db,"SELECT ID FROM m01_groupauthority");
	while ($ambilid=mysqli_fetch_array($ambilgrup)){
	mysqli_query($db,"INSERT INTO m01_groupprivileges (GroupID,MenuID,Permission,CreateBy,UpdateBy) VALUES ('$ambilid[ID]','$ambilmenu[ID]','0','$editor','$editor')");
}
	$category = "Menu Manage";
	$aksi = "Add Menu $description";
	$page="menu";
}elseif ($service=='edit') {
	# code...
}elseif ($service=='delete') {
	$ambilmenu=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM m01_menusystem WHERE ID=$id"));
	mysqli_query($db,"DELETE FROM m01_menusystem WHERE id=$id");
	mysqli_query($db,"DELETE FROM m01_groupprivileges WHERE MenuID=$id");
$category = "Menu Manage";
	$aksi = "Delete Menu $ambilmenu[Description]";
	$page="menu";
}
include 'log.php';
header('location:../pages/dashboard/index.php?page='.$page);
?>