<?php
//defineerime muutujad
$sideA=5;
$sideB=3;

//defineerime funktsiooni kolmanda kolmnurga küljepikkuse leidmiseks. NB tulemuse ümarvame täisarvuni.

function tri($A, $B){
    $sideC=sqrt(pow($A, 2)+pow($B, 2));
    $sideC=round($sideC);
    return "Kolmnurga kolmanda külje pikkuseks on $sideC";
}

//väljastame kolmnurga kolmanda külje pikkuse kasutades eelformuleeritud valemit.

echo tri($sideA, $sideB);