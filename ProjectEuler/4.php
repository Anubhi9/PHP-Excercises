<?php
 $allnumbers = array(); //array to hold all three digit numbers
 $products = array(); //array to whole all products of 3 digit numbers
 $palindromes= array(); // array to whole all palindromes 
 for($x = 1; $x <= 9; $x++){ 
     for($y = 0; $y <= 9; $y++){
         for($z = 0; $z <= 9; $z++){
             array_push($allnumbers, ($x.$y.$z)); //get all 3 digit numbers in the array
         }
     }
 }
 for($o = 0; $o < sizeof($allnumbers); $o++){
     for($j = 0; $j < sizeof($allnumbers); $j++){
         $k = $allnumbers[$o] * $allnumbers[$j]; //find out all products
         array_push($products, $k); //put them in the array
     }
 }

 function reverse($num) //function to get the reverse of a number
 {
     $reverse = 0; 
     while($num > 1){ //iterate till number is greater than 1
        $last = $num % 10; //single out the last digit
        $reverse = ($reverse * 10) + $last; //put it in the number
        $num = (int)$num/10; 
        }
      return $reverse; //get the reversed number
 }   
 for($l = 0; $l < sizeof($products); $l++){
     if($products[$l] == reverse(($products[$l]))){ //check if the product is a palindrome
      array_push($palindromes, $products[$l]);  //if it is put it in the array 
     }
 } 
echo max($palindromes); //get the largest palindrome
//906609
?>