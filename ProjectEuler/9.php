<?php
for($a = 1; $a < 500; $a++){
    for($b = 1; $b < 500; $b++){
        for($c = 1; $c < 500; $c++){
            if(pow($a,2) + pow($b,2) == pow($c,2)){ //check sum of squares of first two numbers
                if($a + $b + $c == 1000){ //check sum of all 3
                    echo $a*$b*$c; 
                    break;
                }
            }
        }
    }
}

?>