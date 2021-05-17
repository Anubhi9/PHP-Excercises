<?php
$num = 0;
for($x = 0; $x < 1000; $x++){
    if($x % 3 == 0 or $x % 5 == 0){
        $num = $num + $x;
    }
}
echo $num;
?>