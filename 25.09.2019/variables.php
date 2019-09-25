<?php
//php standards recommendations
// muutuja tuleb defineerida
// fikseeritakse muutuja nimi ja omistatakse sellele väärtused

//$muutujaNimi = value;

//väärtused (value) on meie andmed.
//väärtused - andmed - andmetüübid
//tekst(string) - info jutumärkides
// Täisarvud(integer)- 2, 5, 7, 10, -22, jne.
// Komaarvud e reaalarvud(float) - 3.5, 6.7, 7.9, -58.44, jne

$eesnimi="Eliise";
$perenimi="Visk";
$email="eliise.visk@khk.ee";
$vanus=23; //aastad, täisarv
$pikkus=1.71; //meetrid, reaalarv
$kaal=67; //kg, täisarv


print 'Eesnimi: '.$eesnimi.'<br>';
print 'Perenimi: '.$perenimi.'<br>';
print 'E-mail: <a href="mailto:'.$email.'">'.$email.'</a><br>';
print 'Vanus: '.$vanus.'<br>';
print 'Pikkus: '.$pikkus.'<br>';
print 'Kaal: '.$kaal.'<br>';


//muutujate dünaamiline defineerimine
$kmi = $kaal / ($pikkus * $pikkus);
echo 'Kehamassiideks on:'.$kmi.'<br>';