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
</style>

  </head>
  <body>
  <div class="container">
    <div class="row" id="myrow">
     <div class="col-8">
       <form class="myform" action="adAdminP.php" method="post">
        <h3 style="text-align:left;">ADD ADMIN</h3>
       <label for="name">Name</label>
       <input type="text" name="name" value="" placeholder="Enter your name">
       <label for="username">Username</label>
       <input type="text" name="username" value="" placeholder="Enter your username">
       <label for="pass">Password</label>
       <input type="password" name="pass" value="" placeholder="Enter your password">
       <label for="cpass">Confirm password</label>
       <input type="password" name="cpass" value="" placeholder="Confirm your password">
       <label for="email">E-mail address</label>
       <input type="email" name="email" value="" placeholder="Enter your email address">
       <label for="usertype" id="usertype">User Type</label>
       <select class="" name="usertype" id="usertype">
         <option value="">--------------</option>
         <option value="Administrator">Administrator</option>
       </select>
       <label for="dob">Date of Birth</label>
       <input type="date" name="dob" value="">
       <label for="gender">Gender</label>
       <select class="" name="gender" id="gender">
        <option value="">-----------</option>
        <option value="prefer not say">Prefer not to say</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select> <br>
       <label for="nat">Nationality</label>
       <input type="text" name="nat" value="" placeholder="Enter your nationality"> <br>
       <input type="submit" name="" value="ADD ADMIN" style=" background-color: rgb(0,0,400);"> <br>
     </form>
     </div>
    </div>
  </div>
  </body>
</html>
