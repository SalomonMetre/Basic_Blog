<?php

require_once("../connect.php");
$id=$_GET['id'];
$delete="DELETE FROM users WHERE id='$id'";

if($dbConn->query($delete)===TRUE){
  header("Location:manageUsers.php");
}else{
  echo "Error in deleting the user!!!";
}


 ?>
