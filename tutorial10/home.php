<?php
session_start();
echo "<h1> Welcome</h1>";
echo $_SESSION['name'];
echo "<br>";
echo "<a href='logout.php'> Logout</a> "; 
?>//end