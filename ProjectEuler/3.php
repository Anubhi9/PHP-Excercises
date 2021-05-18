<?php
 function LargestPrimeFactor($number){
    $x = 2;
    
    while($x <= $number){
        $quotient= $number/$x;
        if($quotient == 1){
            echo $number;
            break;
         }
        elseif(is_int($quotient) == true){
            $number = $number/$x; 
        } else {
           $x++;
        } 
        }
    }
    echo LargestPrimeFactor(600851475143);
?>