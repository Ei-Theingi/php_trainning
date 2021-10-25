<?php
include('server.php');
if (isset ($_GET['edit'])){
  $id =$_GET["edit"];
  $edit_state=true;
  $rec = mysqli_query($db,"SELECT * FROM students WHERE id='$id'");
  $record =mysqli_fetch_array($rec);
  $rno=$record['rno'];
  $name=$record['name'];
  $email = $record['email'];
  $address=$record['address'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous"> 
</head>
<body>
  <?php if(isset($_SESSION['msg'])):?>
    <div class ="msg">
      <?php 
        echo $_SESSION['msg'];
        unset  ($_SESSION['msg']);
        ?>
        </div>
        <?php endif ?>
<table class=" mx-auto border " style="width:700px">
    <tr>
        <th>Rno</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th colspan="2">Action</th>
   </tr>
   <?php while ($row = mysqli_fetch_array($results)){?>
    <tr>
      <td><?php echo $row['rno'];?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row ['email']?></td>
      <td><?php echo $row['address']?><td>
      <td><a  href="index.php?edit=<?php echo $row['id'];?>">Edit</a></td>
       <td><a  href="server.php?del=<?php echo $row['id'];?>">Delete</a></td>
   </tr>
  <?php }?>
</table>
<div class="container" >
  <div class="row">
    <div class="col-8">
     <form action="server.php" method="post">
       <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class = "mt-3">
      <label for="rno" >Rno</label>
    <input type = "text" class="form-control"   name = "rno" placeholder="Enter Roll no." value ="<?php echo $rno;?>">
    </div>
    <div class = "mt-3">
      <label for = "name"  >Name</label>
      <input type = "text" class="form-control" name = "name" placeholder="Enter Name"  value ="<?php echo $name;?>">
    </div>
    <div class = "mt-3">
      <label for = "email">Email</label>
      <input type = "email" class="form-control" name = "email" placeholder= "Enter your email" value="<?php echo $email;?>">
    </div>
    <div class = "mt-3">
      <label >Address</label>
      <textarea cols="30" class="form-control" rows="3" name="address" placeholder="Enter Address" > <?php echo   $address;?></textarea><br>
  </div>
  <div class = "mt-3">
    <?php if($edit_state == false): ?>
  <button class="btn btn-primary " name="save">Save</button> 
    <?php else: ?>
  <button class = "btn btn-danger" name="update">Update</button>
    <?php endif ?>
  </div>
    </form>
  </div>
</div>

//end
</body>
</html>