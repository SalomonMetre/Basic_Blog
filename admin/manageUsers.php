<?php
 session_start();
 $guideAdmin=$_SESSION['admin'];
 require_once("../connect.php");
 $st="SELECT *FROM users WHERE usertype='Editor' OR usertype='Author'";
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
      <a href="manageUsers.php"style="float:left;">Manage Authors and Editors</a>
      <a href="viewArticles.php"style="float:left;">View Articles</a>
      <a href="logOut.php" style="float:right;">Log out</a>
      <a href="" style="float:right;"> <?php echo $guideAdmin ?>Logged In---Admin</a>
  </div>
  <h1 style="margin-left:100px; margin-right:100px;">Manage Users here</h1>
  <p style=" font-family: courier; line-height: 50px; margin-left: 100px; margin-right:100px; font-size: 1.2em;">Dear <b><?php echo $guideAdmin; ?></b>,here is where you can manage authors and editors.  <br> <br>All those operations will be possible in this table below😊😊. We are sure you will make necessary changes with the details of our authors and editors. </p>
  <div class="" style="margin-left:100px; margin-right:100px;">
    <table class="table table-bordered" style="background-color:black;color:white;">
    <tr style="background-color:rgb(0,0,200); font-family: courier;">
      <td>Name</td>
      <td>Username</td>
      <td>E-mail</td>
      <td>User type</td>
      <td>Date of birth</td>
      <td>Gender</td>
      <td>Nationality</td>
      <td colspan="2">Operations</td>
    </tr>
    <?php
    while ($row=$Res->fetch_assoc()) {
     $id=$row['id'];
     $name=$row['name'];
     $username=$row['username'];
     $email=$row['email'];
     $usertype=$row['usertype'];
     $dob=$row['dob'];
     $gender=$row['gender'];
     $nationality=$row['nationality'];
     ?>
     <tr>
       <td><?php echo $name; ?></td>
       <td><?php echo $username; ?></td>
       <td><?php echo $email; ?></td>
       <td><?php echo $usertype; ?></td>
       <td><?php echo $dob; ?></td>
       <td><?php echo $gender; ?></td>
       <td><?php echo $nationality; ?></td>
       <td> <a href="editUsers.php?id=<?php echo $id; ?>" style="border-radius:10px;background-color:yellow;color:black;padding:10px; font-weight: bolder;">Edit</a></td>
       <td> <a href="delUsers.php?id=<?php echo $id; ?>"  style="border-radius:10px;background-color:yellow;color:black;padding:10px; font-weight:bolder;">Delete</a> </td>
     </tr>
     <?php
     }
      ?>
    </table>
  </div>
  <div class="myFooter" style="text-align:center; font-weight: bolder;  ">
      @Salomon Metre Blog
  </div>
  </body>
</html>
