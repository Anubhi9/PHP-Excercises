<?php 
function convert($sec){
   $hours = floor($sec/3600); //find hours by dividing given seconds by 3600
   $remsec = $sec - ($hours * 3600); // find remaining seconds 
   $min = floor(($remsec/60)); // find minutes by dividing remaining sec by 60
   $seconds = $remsec - ($min * 60); // find seconds

$result = array("$hours", "$min", "$seconds");
return $result;  // return hours, min and seconds
} 


$time = convert(7876);  
echo $time[2] ." seconds ". $time[1]." min ".$time[0]." hours"; 
?>