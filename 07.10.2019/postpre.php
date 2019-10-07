<?php
//define variables
$x = 10;
echo 'x = '.$x.'<br><hr>';
$y = $x++;

// if we use $y = ++$x as preoperator then x will be increased by 1 and then added as y's new value
// if we use $y = $x++ as postoperator then x will be increased after ist original value has been omitted to the Y value;
echo 'y ='.$y.'<br>';
echo 'x ='.$x.'<br>';
echo '<br><br><hr>';
//same with -- post or preoperator;
$x = 10;
echo 'x = '.$x.'<br><hr>';
$y = $x--;
echo 'y ='.$y.'<br>';
echo 'x ='.$x.'<br>';