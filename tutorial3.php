<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method = "post">
    <input type = "date" name="date" >
    <input type = "submit" name="submit">
  </form> 
  <?php
   if(isset($_POST['submit'])){
     $birthday = $_POST['date'];
     echo "Your birthday is: $birthday <br>";
     $dob = new DateTime($birthday);
     $today = new DateTime();
     $age = date_diff ( $today , $dob);
     echo "Your age is: $age->y";
   }
  ?>
</body>
</html>
