<?php
//define max num of elements
$maxCount=1000000000;
//define count for loop
$count=1;
//define sum of elements
$sum=0;

while($count<=$maxCount){
    $element=1/(2*$count-1);
    if($count%2!=0){
        $sum= $sum+$element;
    }
    else{
        $sum = $sum -$element;
    }
    $count++;
}
echo 'Arvutatud Pii ='.($sum*4).'<br>';
echo 'Kontroll Pii ='.pi();

