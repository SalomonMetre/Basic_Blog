<?php

require_once("../connect.php");
$id=$_GET['id'];
$author=$_POST['author'];
$title=$_POST['title'];
$article=$_POST['article'];
$dop=$_POST['dop'];
$display=$_POST['display'];

$st="UPDATE article SET author='$author',title='$title',article='$article',datepub='$dop',display='$display' WHERE id='$id'";

if($dbConn->query($st)===TRUE){
  header("Location:viewArticles.php");
}else{
  echo "Error in updating the user!!!";
}



 ?>
