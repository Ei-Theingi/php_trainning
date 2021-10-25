<?php  session_start();   
 ?>
<html>
<head>
<title> Login Page   </title>
</head>
<body>
<h1>Login User name and Password </h1>
<form action="" method="POST">
<input type="email" name="email" placeholder="enter your email"> <br><br>
<input type="password" name="pass" placeholder="Enter Your Password"><br><br>
<button type="submit" name="login">LOGIN </button>
</form>
<?php
if(isset($_POST['login'])){   
    $email = $_POST['email'];
    $pass = $_POST['pass'];
     if($email == "user@gmail.com" && $pass == "123456"){ 
       $_SESSION['email']=$email;
       $_SESSION['pass']=$pass;
        header('location:home.php');
       }
       else
       {
           echo "invalid email or Password";        
       }
    }


?>
</body>
</html>