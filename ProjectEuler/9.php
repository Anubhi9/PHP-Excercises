<?php  
    $start = microtime(true);
for($a = 1; $a < 500; $a++){
    for($b = 1; $b < 500; $b++){
         $c = 1000 - ($a + $b);
            if(pow($a,2) + pow($b,2) == pow($c,2))//check sum of squares of first two numbers
                    echo $a*$b*$c . "\n"; 
            }
        }
$time_elapsed_secs = microtime(true) - $start;
echo $time_elapsed_secs;

?>