<?php 

$sum = 0;

for ($j = 1; $j <= 30; $j++){
    if ($j % 2 == 0){
        $sum += $j;
    }
}


echo "The sum of all even integers between 1 and 30 is: $sum";

?>