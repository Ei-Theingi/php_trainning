<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'mysql123456';
$db_name = 'student';
$db=mysqli_connect($db_host,$db_user,$db_pass ,$db_name);
$results =mysqli_query($db,"SELECT * FROM students");

if($results){
echo "<table>";
echo"<tr>";
echo" <th>Rno</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo"</tr>";
while ($row = $results -> fetch_assoc()){
    $row1=$row['rno'];
    $row2=$row['name'];
    $row3=$row['email'];
    $row4=$row['address'];
    echo"<tr>";
    echo"<td> $row1</td>";
    echo"<td> $row2</td>";
    echo"<td> $row3</td>";
    echo"<td> $row4</td>";
}
echo "</table>";
}//end
?>

    


