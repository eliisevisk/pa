<?php

//define variables

$celsius = 5;

//use  F=(9/5)*C+32. Vastus vormindatakse 2 kohta pärast koma;
$fahrenheit = (9/5)*$celsius + 32;
//output
//var_dump($fahrenheit); ===> FLOAT
//printf % ... ===> print format %s, %d, %f..... etc
printf('Celsius: %d&deg;C - Fahrenheit: %0.2f&degF',$celsius, $fahrenheit);
