<?php

require_once("connect.php");
$name=$_POST['name'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$email=$_POST['email'];
$usertype=$_POST['usertype'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$nat=$_POST['nat'];

if($pass!==$cpass){
  echo "passwords did not match!";
  header("Location:index.php");
}

$hpass=password_hash($pass,PASSWORD_DEFAULT);

$st="INSERT INTO users(name,username,password,email,usertype,dob,gender,nationality) VALUES('$name','$username','$pass','$email','$usertype','$dob','$gender','$nat')";

if($dbConn->query($st)===TRUE){
  echo "Successfully saved to the database!";
  header("Location:index.php");
}else{
  echo "Error in saving the detailsin the database";
  header("Location:index.php");
}



 ?>
