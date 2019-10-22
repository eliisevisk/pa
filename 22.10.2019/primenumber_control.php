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
        $result=true;

    }
    else{
        $result=false;
    }
    return $result;
//    if($result=true){
//        return "$number is prime number";
//    }
//    else{
//        return"$number is not prime number";
//    }
}


//this is a void function which means it doesnt have a 'return' element at the end.
//use the defined function;
echo isPrimeNumber(rand(1,1000));

//define function which uses te boolean result of isPrimeNumber and
//show the text - is prime or is not prime with the number value;


function isPrimeNumberDescription($number, $isPrime){
    if($isPrime){
        return "$number is a prime number";
    }
    else{
        return "$number is not a prime number";
    }
}
$number=rand(1, 1000);
echo isPrimeNumberDescription(2, isPrimeNumber(2));