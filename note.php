<?php  
function notecount($sum){
    $notes = array(2000, 500, 100, 50, 20, 10, 5, 2, 1); //array to hold value of notes
    $notenum = array(); // empty array to hold number of notes needed
    for($x = 0; $x < count($notes) ; $x++){ //iteration
    if($sum >= 0){ // if the amount is greater than 0 the loop will continue
        $r = intval($sum/$notes[$x]); // find out how many number of notes are needed for each value
        array_push( $notenum, $r); //add that number to the empty array
        $sum = $sum - $notenum[$x]*$notes[$x]; // amount remained 
    }
}
echo implode(",", $notenum); // print the array holding number of notes needed
}
notecount(15397); // call function notecount
?>




?>