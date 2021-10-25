
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous"> 
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-5 m-auto">
           <form action="update.php" method="post">
           <h1>Reset  Password </h1>
            <input type="password" class="form-control mt-5" name="fpass" placeholder="Enter Password">
            <input type="password" class="form-control mt-3 mb-3" name="spass" placeholder="Confirm Password">
           <input type="submit" name="upd" value="Update password">
           </form>

        </div>
    </div>
</div>
<?php
$conn=mysqli_connect('localhost','root','mysql123456','db');

if(isset($_POST['upd'])){
    
    $pass1=$_POST['fpass'];
    $pass2=$_POST['spass'];
    $email=$_POST['email'];
    
    if($pass1 != $pass2){
        echo"your password does not match";
       
    }else{
        $password=md5('$pass1');
        $query="UPDATE user SET password='$password' WHERE name='$email'";
        $res=mysqli_query($conn,$query);
        if($res === FALSE){
            die(mysqli_error($conn));
            echo"incorrect";
        }
        else{
            echo "<script type ='text/javascript'>location.href='index.php'</script>";
            echo "<script type='text/javascript'>alert('password update successful')</script>";
            
    }
    }
}
?>
</body>
</html>