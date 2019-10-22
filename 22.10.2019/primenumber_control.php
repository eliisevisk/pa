<?php
//defineerime funktsiooni

function isPrimeNumber($number){
    if($number < 2){
        echo'Antud arv ei kuulu sobivasse vahemikku<br>';
    }
    else{
        $divider=2;
        while($number % $divider != 0){
            $divider++;
        }
    }
    if ($number==$divider){
        echo$number.' on algarv<br>';
        $sum += $number;
    }
    else{
        echo$number.' ei ole algarv<br>';
    }
}
//use the defined function;
isPrimeNumber(rand(1,1000));