<?php
 session_start();
 $guideAuthor=$_SESSION['author'];
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
  margin:5px;
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
      <a href="submitArticle.php"style="float:left;">Submit Articles</a>
      <a href="viewArticles.php"style="float:left;">View Your Articles</a>
      <a href="viewOthArticles.php"style="float:left;">View Others' articles</a>
      <a href="logOut.php" style="float:right;">Log out</a>
      <a href="" style="float:right;"> <?php echo $guideAuthor ?> Logged In---Author</a>
  </div>
  <h1 style="margin-left:100px; margin-right:100px;">Welcome to our blog!</h1>
  <p style=" font-family: courier; line-height: 50px; margin-left: 100px; margin-right:100px; font-size: 1.2em;">Dear <b><?php echo $guideAuthor; ?></b>,you are one of our brilliant authors😊. <br> <br> The way you transmit your messge via articles is outstanding😎. You can also read other articles of other authors, you cannnot manage the different editors and authors by changing their details because you are a simple author. <br> <br>You can also log out when you want. You can also submit your article <a href="submitArticle.php">here</a></p>
  <div class="myFooter" style="text-align:center; font-weight: bolder;  ">
      @Salomon Metre Blog
  </div>
  </body>
</html>
