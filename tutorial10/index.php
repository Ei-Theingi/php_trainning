<?php
 session_start();
 $conn=mysqli_connect('localhost','root','mysql123456','db');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous"> 
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1> user login</h1>
         <form action="index.php" method="post">
         <div class="mt-3">
             <label>Email</label>
             <input type="email"class="form-control"  name="name">
        </div>
        <div class="mt-3">
        <label>Password</label>
         <input type="password" class="form-control"  name="pass">
       </div>
       <div class="mt-3">
         <input type="submit" name="login"  value="login"><br>
         <a href= "reset.php">reset password</a>
       </div>
        </div>
        </form>
    </div>
</div> 
<?php
if(isset($_POST['login'])){
 $name=$_POST['name'];
 $pass =$_POST['pass'];
 $_SESSION["name"]=$name;
 $_SESSION["pass"]=$pass;
 $query = mysqli_query($conn,"SELECT * FROM user WHERE name='$name' and password='$pass'");
   if(mysqli_num_rows($query) != 0){
       echo "<script type ='text/javascript'>location.href='home.php'</script>";
   }else{
       echo "<script type='text/javascript'>alert('user name or password invalid')</script>";
   }
}
if(isset($_POST['reset'])){
    
}
?> 
</body>
</html>