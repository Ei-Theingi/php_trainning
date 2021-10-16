<?php
 for ( $x = 1 ; $x < 7 ; $x++)
 {  
   for( $y = $x ; $y < 7 ; $y++){
     echo "&nbsp;&nbsp;";
   }
   for( $z =(2* $x) - 1 ; $z > 0 ; $z --){
       echo "  * ";
    }
    echo "<br>";
 }
 for ( $x = 5 ; $x > 0 ; $x--)
 {  
   for( $y = $x ; $y < 7 ; $y++){
     echo "&nbsp;&nbsp;";
   }
   for( $z =(2* $x) - 1 ; $z > 0 ; $z --){
       echo "  * ";
    }
    echo "<br>";
 }
?>
