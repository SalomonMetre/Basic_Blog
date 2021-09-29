<?php
 session_start();
 $guideEditor=$_SESSION['editor'];
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
  <p style=" font-family: courier; line-height: 50px; margin-left: 100px; margin-right:100px; font-size: 1.2em;">Dear <b><?php echo $guideEditor; ?></b>,you are one of our brilliant editors😊. <br> <br> The way you transmit your edit some articles is fantastic😎. You can read articles of many others and edit them, you cannnot manage the different editors and authors by changing their personal details because you are an edit. <br> <br>You can also log out when you want.</p>
  <div class="myFooter" style="text-align:center; font-weight: bolder;  ">
      @Salomon Metre Blog
  </div>
  </body>
</html>
