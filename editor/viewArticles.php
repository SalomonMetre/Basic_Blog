<?php

session_start();
$guideEditor=$_SESSION['editor'];
require_once("../connect.php");
$st="SELECT *FROM article WHERE display='Yes'";
$Res=$dbConn->query($st);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  border-radius: 10px;
}
.myNav{
  width:1370px;
  background-color: black;
  float: left;
  padding:40px;
  text-decoration: none;
  color:white;
  margin-bottom:20px;
}
.myNav a{
  padding:20px;
  background-color: black;
  text-decoration: none;
  color:black;
  margin:20px;
  border-radius: 20px;
  font-weight: bolder;
  background-color: white;
}
.myNav a:hover{
  border-radius: 20px;
  background-color: yellow;
  font-size: 1.1em;
  font-family: courier;
}
.myFooter{
  width:1370px;
  background-color: black;
  float: left;
  padding:40px;
  text-decoration: none;
  color:white;
  margin-top:20px;
}
</style>
  </head>
  <body>
  <div class="myNav">
      <a href="index.php" style="float:left;">Home</a>
      <a href="viewArticles.php"style="float:left;">View Articles</a>
      <a href="logOut.php" style="float:right;">Log out</a>
      <a href="" style="float:right;"> <?php echo $guideEditor ?> Logged In---Editor</a>
  </div>
  <h1 style="margin-left:100px; margin-right:100px;">Welcome to our blog!</h1>
  <p style=" font-family: courier; line-height: 50px; margin-left: 100px; margin-right:100px; font-size: 1.2em;">Dear <b><?php echo $guideEditor; ?></b>,here is where you can read the different articles published and edit them. These articles touch many aspects of our lives and treat many amazing scientific topics. <br> <br>  Enjoy your editing 😊😊🔆</p> <hr>
   <?php
   while ($row=$Res->fetch_assoc()) {
     $id=$row['id'];
     $author=$row['author'];
     $title=$row['title'];
     $article=$row['article'];
    ?>
   <p style=" font-family: courier; line-height: 30px; margin-left: 100px; margin-right:100px; font-size: 1.2em;">
   <span style="background-color:black;color:white; padding:10px; margin-bottom:10px;" ><b>Title:</b><i><?php echo $title; ?></i></h></span> By: <b><?php echo $author; ?> </b> <br> <br>
   <?php echo $article; ?> <br>
   <a href="editArticle.php?id=<?php echo $id; ?>" style="border-radius:10px; width:400px; padding:5px; background-color:blue; color:white">Edit</a> <hr>
    </p>
   <?php
    }
    ?>
  <div class="myFooter" style="text-align:center; font-weight: bolder;  ">
      @Salomon Metre Blog
  </div>
  </body>
</html>
