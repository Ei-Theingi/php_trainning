<?php
 for ( $row = 1 ; $row < 7 ; $row++)
 {  
   for( $space = $row ; $space < 7 ; $space++){
     echo "&nbsp;&nbsp;";
   }
   for( $col =(2* $row) - 1 ; $col > 0 ; $col--){
       echo "  * ";
    }
    echo "<br>";
 }
 for ( $row = 5 ; $row > 0 ; $row--)
 {  
   for( $space = $row ; $space < 7 ; $space++){
     echo "&nbsp;&nbsp;";
   }
   for( $col =(2* $row) - 1 ; $col > 0 ; $col --){
       echo "  * ";
    }
    echo "<br>";
 }
?>
