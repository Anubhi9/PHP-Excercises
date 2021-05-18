<?php
 function LargestPrimeFactor($number){
    $x = 2;
     while($x < $number){  //until our iterator hits the number       
        $quotient= $number/$x; //check if its perfect division
         if(is_int($quotient) == true){ //if its whole number
            $number = $number/$x;  // divide the number
        } 
        $x++; //else increment 
    }
    return $x; //return the number since in this break condition it's been 
    //found to be the LPF
    }
    echo LargestPrimeFactor(600851475143);
    //6857
?>