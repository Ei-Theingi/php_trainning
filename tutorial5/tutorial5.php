 <!DOCTYPE html>
 <html lang="en">
 <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
 </head>
 <body>
<form action="" method="post">
<input type="file" name="file"><br>
<input type="submit" name="submit">
</form> 
<?php
if(isset($_POST['submit'])){
$file = $_POST['file'];
$directory ="folder/";
$dir =opendir($directory);
$filename =[];
while(($file ==readdir($dir)) !== false){
    $filename=$directory.$file;
    $type =filetype($filename);
    if($type !== 'file') continue;
    $filename[] =$filename;
    echo ($file);
}
closedir($dir);
}
?> 
 </body>
 </html>