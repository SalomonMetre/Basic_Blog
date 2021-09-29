<?php

require_once("../connect.php");
$id=$_GET['id'];
$delete="DELETE FROM article WHERE id='$id'";

if($dbConn->query($delete)===TRUE){
  header("Location:viewArticles.php");
}else{
  echo "Error in deleting the user!!!";
}


 ?>
