<?php
echo "<table border 1px solid>";
for ( $row = 1 ; $row < 9 ; $row ++){
    echo "<tr>";
    for ( $col =1 ; $col < 9 ; $col ++){
       $result = $row + $col ;
     if($result % 2 == 0){
         echo "<td width = 30px height= 40px bgcolor = #333333> </td>";
     }else{
         echo "<td width = 30px height= 40px bgcolor = #ffffff> </td>";
     }
    }
}
?>
