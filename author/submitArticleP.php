<?php

require_once("../connect.php");
$author=$_POST['author'];
$title=$_POST['title'];
$article=$_POST['article'];
$dop=$_POST['dop'];
$display=$_POST['display'];

$st="INSERT INTO article(author,title,article,datepub,display) VALUES ('$author','$title','$article','$dop','$display')";

if($dbConn->query($st)===TRUE){
  echo "Successfully saved to the database!";
  header("Location:index.php");
}else{
  echo "Error in saving the details in the database";
}

 ?>
