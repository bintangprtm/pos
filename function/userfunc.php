<?php 
include 'db.php';
$service=$_GET['service'];
$id=$_GET['id'];
$empid=$_POST['empid'];
$username=$_POST['username'];
$pass=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$editor=$_SESSION['nama'];
$name=$_POST['groupname'];
$isactive=$_POST['mode'];
$flag=$_POST['flag'];
if($service=="adduser"){
$query="INSERT INTO m01_user (`EmpID`, `Username`, `Password`, `FirtsName`, `LastName`, `Email`, `CreateBy`,`UpdateBy`) VALUES ('$empid', '$username', '$password', '$firstname', '$lastname', '$email','$editor','$editor')";
$category = "User Manage";
$aksi = "Add User $username";
$page="userlist";
}elseif($service=="edituser"){
	$query="UPDATE m01_user SET `EmpID`='$empid',`Username`='$username',`Password`='$password',`FirstName`='$firstName',`LastName`='$lastName',`Email`='$email',`UpdateBy`='$editor'  WHERE  `ID`=$id";
	$category = "User Manage";
$aksi = "Edit User $username";
$page="userlist";
}elseif ($service=="deluser") {
	$query="DELETE FROM m01_user WHERE  `ID`=$id";
	$category = "User Manage";
$aksi = "Delete User $username";
$page="userlist";
}elseif($service=="addgroup"){
$query="INSERT INTO m01_groupauthority (`Name`, `IsActive`, `Flag`) VALUES ('$name', '$isactive', '$flag')";
$category = "Group Manage";
$aksi = "Add Group $name";
$page="grouplist";
}elseif($service=="editgroup"){
	$query="UPDATE m01_groupauthority SET `Name`='$name', `IsActive`='$isactive', `Flag`='$flag' WHERE  `ID`=$id";
$category = "Group Manage";
$aksi = "Edit Group $name";
$page="grouplist";
}elseif($service=="delgroup") {
	$query="DELETE FROM m01_groupauthority WHERE  `ID`=$id;";
$category = "Group Manage";
$aksi = "Delete Group $name";
$page="grouplist";
}
include 'log.php';
$result=mysqli_query($db,$query);
header('location:../pages/dashboard/index.php?page='.$page);
?>