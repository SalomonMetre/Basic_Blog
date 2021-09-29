<?php

require_once("../connect.php");
$id=$_GET['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$usertype=$_POST['usertype'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$nationality=$_POST['nat'];

$st="UPDATE users SET name='$name',username='$username',email='$email',usertype='$usertype',dob='$dob',gender='$gender',nationality='$nationality' WHERE id='$id'";

if($dbConn->query($st)===TRUE){
  header("Location:manageUsers.php");
}else{
  echo "Error in updating the user!!!";
}



 ?>
