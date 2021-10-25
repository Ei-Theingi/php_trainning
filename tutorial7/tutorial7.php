<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form  method="post"  name="generatecode"> 
<div class= "form-row">
<input type = "text" name="text" id="text">
<input type = "submit" name = "generate"  value="GENERATE QR CODE">
</div>
</form>
<?php
if(isset($_POST['generate'])){
 include('phpqrcode/qrlib.php');
 $text =$_POST['text'];
 QRcode::png($text);
}
?>
</body>
</html>