<?php
//defineerime funktsiooni

function isPrimeNumber($number){
    $result='';
    if($number < 2){
       $result='Antud arv ei kuulu sobivasse vahemikku<br>';
    }
    else{
        $divider=2;
        while($number % $divider != 0){
            $divider++;
        }
    }
    if ($number==$divider){
        $result=$number.' on algarv<br>';
        $sum += $number;
    }
    else{
        $result =$number.' ei ole algarv<br>';
    }
    return $result;
}

//this is a void function which means it doesnt have a 'return' element at the end.
//use the defined function;
echo isPrimeNumber(rand(1,1000));