<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
if (isset($_SESSION['email']) && isset($_SESSION['pass'])){
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION['pass'];
echo "<br>";
echo "Login Success <br>";
echo "<a href='logout.php'> Logout</a> "; 
}
else 
{
    header('location:index.php');
}
?>
</body>//end