<?php

require_once("connect.php");
$username=$_POST['username'];
$pass=$_POST['pass'];
$hpass=password_hash($pass,PASSWORD_DEFAULT);

$st="SELECT *FROM users WHERE username='$username' LIMIT 1";

$res=$dbConn->query($st);

if($res->num_rows<1){
  echo '<script>';
  echo 'alert("User does not exist!")';
  echo '</script>';
  echo "<script>window.close();</script>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="" style="text-align:center; margin-top:20%;">
      <a href="signin.php" style="background-color: blue; color:white; font-size:1.3em; padding:30px; border-radius:20px;font-family: courier;word-spacing: 5px;text-decoration: none;  ">Click here to retry</a>
    </div>
  </body>
</html>
<?php
}else{
$row=$res->fetch_assoc();
$usertype=$row['usertype'];

if($row['password']===$pass){
 if($usertype==="Administrator"){
  session_start();
  $_SESSION['admin']=$username;
  header("Location:admin/index.php");
 }
 elseif ($usertype==="Editor") {
   session_start();
   $_SESSION['editor']=$username;
  header("Location:editor/index.php");
 }
elseif($usertype==="Author"){
  session_start();
  $_SESSION['author']=$username;
 header("Location:author/index.php");
 }
 else{
   echo "User does not exist";
 }
}
}
?>
