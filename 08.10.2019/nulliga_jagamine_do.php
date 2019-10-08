<?php

$divable = $_GET['number1'];
$diver = $_GET['number2'];
$res = $divable / $diver;
//if(!empty($divable) AND !empty($diver)){
//    if (!$res OR $diver=='0') {
//        echo 'Nulliga ei saa jagada<br><hr><br>';
//        echo'<a href="nulliga_jagamine.php">Tagasi sisestamisse</a>';
//    } else {
//        echo 'Jagades arvu ' . $divable . ' arvuga ' . $diver . ', saame tulemuseks ' .round($res, 2).'<br><hr><br>';
//        echo'<a href="nulliga_jagamine.php">Tagasi sisestamisse</a>';
//    }
//}
//else{
//    echo'Täida kõik väljad<br><hr>';
//    echo'<a href="nulliga_jagamine.php">Tagasi sisestamisse</a>';
//}
if(strlen($divable)>0 AND strlen($diver)>0){
    if($diver==0){
        echo 'Nulliga ei saa jagada<br><hr><br>';
        echo'<a href="nulliga_jagamine.php">Tagasi sisestamisse</a>';
    }
    else {
        echo 'Jagades arvu ' . $divable . ' arvuga ' . $diver . ', saame tulemuseks ' . round($res, 2) . '<br><hr><br>';
        echo '<a href="nulliga_jagamine.php">Tagasi sisestamisse</a>';
    }
}
else{
    echo'<br>Täida kõik väljad!<br><hr><br>';
    echo '<a href="nulliga_jagamine.php">Tagasi sisestamisse</a>';

}


?>