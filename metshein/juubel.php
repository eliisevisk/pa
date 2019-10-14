<?php

$yr = $_GET['yr'];
$res = 2019 - $yr;

if($res % 5 == 0){
    echo '<div style="display: flex; justify-content: center;position: relative; top:300px;font-size: 30px; font-weight: 600;">Tegemist on juubeliaastaga! Palju õnne!</div>';
}
else if($res % 10 == 0){
    echo '<div style="display: flex; justify-content: center;position: relative; top:300px;font-size: 30px; font-weight: 600;">Tegemist on juubeliaastaga! Palju õnne!</div>';
}
else {
    echo '<div style="display: flex; justify-content: center;position: relative; top:300px;font-size: 30px; font-weight: 600;">Tegemist ei ole juubeliaastaga</div>';
}


echo '<div style="position: relative; top: 400px; text-align: center;"><br><br><hr><br><a href="arvamis_input.php" style="text-decoration: none;">Sisesta sünniaasta uuesti</a></div>';