<?php 
$service=$GET['service'];
$id=$_GET['id'];
$empid=$_POST['empid'];
$username=$_POST['username'];
$pass=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$editor=$_SESSION['nama'];
if($service=="adduser"){
$query="INSERT INTO m01_user (`EmpID`, `Username`, `Password`, `FirtsName`, `LastName`, `Email`, `CreateBy`,`UpdateBy`) VALUES ('$empid', '$username', '$password', '$firstname', '$lastname', '$email','$editor','$editor')";
}elseif($service="edituser"){
	$query="UPDATE m01_user SET `EmpID`='$empid',`Username`='$username',`Password`='$password',`FirstName`='$firstName',`LastName`='$lastName',`Email`='$email',`UpdateBy`='$editor'  WHERE  `ID`=$id";

}elseif ($service="deluser") {
	$query="DELETE FROM m01_user WHERE  `ID`=$id;";
}
$result=mysqli_query($db,$query);
?>