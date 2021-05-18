<?php
function difference($num){
$sum = 0;
$square = 0;
$n =0;
for($x = 1; $x <= $num; $x++){ //iteration through all numbers
    $sum += pow($x,2); //calculate sum of square of numbers
    $n+= $x; //calculate sum of all numbers
}
$square = pow($n, 2); //get square of sum of all numbers
return ($square - $sum); //get the difference
}


echo difference(100);
//25164150
?>