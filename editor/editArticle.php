<?php

require_once("../connect.php");
$id=$_GET['id'];
$st="SELECT *FROM article WHERE id='$id'";
$Res=$dbConn->query($st);
$row=$Res->fetch_assoc();

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
.myform{
  margin-left:400px;
  margin-top:10px;
  margin-bottom: 10px;
  background-image: url("../images/bg1.jpg");
  color:black;
  padding: 10px;
}
.myform input,label{
  display: block;
  border-radius: 10px;
  padding: 10px;
  width:300px;
  height:60px;
  font-weight: bolder;
}
.myform label{
  font-size: 1.2em;
  font-family: courier;
}
#article{
  font-weight:bolder;
  height:170px;
  width:300px;
  text-weight:bolder;
}
.displayhide{
 width:300px;
 font-weight: bolder;
}
</style>

  </head>
  <body>
  <div class="container">
    <div class="row" id="myrow">
     <div class="col-8">
       <form class="myform" action="editArticleP.php?id=<?php echo $id; ?>" method="post">
        <h3 style="text-align:left;">Edit your article</h3>
       <label for="author">Author</label>
       <input type="text" name="author" value="<?php echo $row['author']; ?>" placeholder="Enter your name">
       <label for="title">Title</label>
       <input type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="Enter the title of your article">
       <label for="article">Article Content</label>
       <textarea name="article" rows="40" id="article" placeholder="Enter the full content of your article"><?php echo $row['article']; ?></textarea>
       <label for="dop">Date of Publication</label>
       <input type="date" name="dop" id="dop"value="<?php echo $row['datepub']; ?>"> <br>
       <label for="display">Do you want people to see your article?</label>
       <select class="displayhide" name="display">
         <option value="<?php echo $row['display']; ?>">--------</option>
         <option value="Yes">Yes</option>
         <option value="No">No</option>
       </select> <br> <br>
       <input type="submit" name="" value="EDIT" style=" background-color: rgb(0,0,400);"> <br>
     </form>
     </div>
    </div>
  </div>
  </body>
</html>
