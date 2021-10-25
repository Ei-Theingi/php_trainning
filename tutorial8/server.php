<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'mysql123456';
$db_name = 'student';
$db=mysqli_connect($db_host,$db_user,$db_pass ,$db_name);
if(!$db){
  die("connection failed:" .mysqli_connect_error());
}
$rno="";
$name = "";
$email ="";
$address="";
$id =0;
$edit_state=false;
if(isset($_POST['save'])){
  $rno=$_POST['rno'];
  $name =$_POST['name'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  mysqli_query($db,"INSERT INTO students (rno,name,email,address) VALUES ('$rno','$name','$email', '$address')");
  $_SESSION['msg']="Address saved";
  header('location:index.php');
}
if(isset($_POST['update'])){
  $id = mysqli_real_escape_string($db,$_POST['id']);
  $rno = mysqli_real_escape_string($db,$_POST['rno']);
  $name=mysqli_real_escape_string($db,$_POST['name']);
  $email=mysqli_real_escape_string($db,$_POST['email']);
  $address=mysqli_real_escape_string($db,$_POST['address']);
  $query=mysqli_query($db,"UPDATE students SET  rno='$rno' , name='$name', email='$email', address='$address' WHERE id=$id");
  echo($query);
  header('location:index.php');
}
if(isset($_GET['del'])){
  $id =$_GET['del'];
  mysqli_query($db,"DELETE FROM students WHERE id=$id");
  $_SESSION['msg']="Address deleted!";
  header('location: index.php');
}
$results =mysqli_query($db,"SELECT * FROM students");
?>//end