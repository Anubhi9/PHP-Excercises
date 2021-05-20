<?php
function prime($m){
    $r = 2;
    $j = 1;
    $c = 0;
    while($j < $m){
   for($x = 2; $x < $r; $x++){
       if(($r % $x) == 0){
           $c++;
       } 
    }
    if($c < 1){ 
        return $r;
        $j++;  
   }
   $r++;
}
}
echo prime(10001);  
?>
