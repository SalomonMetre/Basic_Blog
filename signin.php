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
  background-image: url("images/bg1.jpg");
  color:black;
  padding: 10px;
}
.myform input,#usertype,#gender,label{
  display: block;
  border-radius: 20px;
  padding: 10px;
  width:300px;
  height:60px;
  font-weight: bolder;
}
.myform label{
  font-size: 1.2em;
  font-family: courier;
}
#linkLogin a{
  color:white;
}
</style>
  </head>
  <body>
  <div class="container">
    <div class="row" id="myrow">
     <div class="col-8">
       <form class="myform" action="signinP.php" method="post">
        <h3 style="text-align:left;">Sign In</h3>
       <label for="username">Username</label>
       <input type="text" name="username" value="" placeholder="Enter your username">
       <label for="pass">Password</label>
       <input type="password" name="pass" value="" placeholder="Enter your password"> <br>
       <input type="submit" name="" value="SIGN IN" style=" background-color: rgb(0,0,400);"> <br>
      <span id="linkLogin" style=" font-family: courier; font-weight: bolder; color:black;font-size: 1.1em; ">If you do not have an account,<a href="index.php">Register here</a></span>
     </form>
     </div>
    </div>
  </div>
  </body>
</html>
