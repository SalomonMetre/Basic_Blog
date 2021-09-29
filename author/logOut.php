<?php

session_start();
echo '<script>';
echo 'alert("Successul logout!")';
echo '</script>';
echo "<script>window.close();</script>";
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <div style="text-align:center; margin-top:20%;"> <a href="../signin.php" style=" background-color: blue; color:white; font-size:1.3em; padding:30px; border-radius:20px;font-family: courier;word-spacing: 5px;text-decoration: none;  ">Click here to continue</a> </div>
  </body>
</html>
