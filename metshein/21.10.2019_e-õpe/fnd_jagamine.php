<?php
// defineerime muutujad
$first = $_GET['first'];
$sec = $_GET['sec'];


//defineerime jagamisfunktsiooni;
function divide($first, $sec){
    $result=$first/$sec;
    $res=round($result, 2);
    return $res;
}


if(strlen($first)>0 AND strlen($sec)>0){
    if($sec==0){
        echo 'Nulliga ei saa jagada<br><hr><br>';
        echo'<a href="jagamine_input.php">Tagasi sisestamisse</a>';
    }
    else {
        echo 'Jagades arvu ' . $first . ' arvuga ' . $sec . ', saame tulemuseks ' . divide($first, $sec) . '<br><hr><br>';
        echo '<a href="jagamine_input.php">Tagasi sisestamisse</a>';
    }
}
else{
    echo'<br>Täida kõik väljad!<br><hr><br>';
    echo '<a href="jagamine_input.php">Tagasi sisestamisse</a>';

}


?>
