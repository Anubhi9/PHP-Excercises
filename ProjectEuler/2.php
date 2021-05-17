<?php
function EvenFibonacciSum($limit) {
  $fn = 0; 
  $sn = 1;
  $num = 0;
  $x = 0; //initialise counter
  $EvenNumbers = array(); //array to hold even fibonacci numbers
while ($x < $limit) {
   $num = $fn + $sn; 
   if($num % 2 == 0){ //if even
     array_push($EvenNumbers, $num); //add to the array
   }
    $fn = $sn;
    $sn = $num;
    $x = $fn + $sn;
  }
 return array_sum($EvenNumbers);
}
echo EvenFibonacciSum(4000000);
?>