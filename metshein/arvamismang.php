<?php

$mArv = 50;
$kArv = $_GET['arv'];
switch ($mArv) {
    case ($kArv < $mArv):
        echo '<div style="position: relative; top: 300px; display: flex; justify-content: center; font-weight: 500; font-size: 30px;"> Arv on liiga väike! </div>';
        break;
    case ($kArv > $mArv):
        echo '<div style="position: relative; top: 300px; display: flex; justify-content: center; font-weight: 500; font-size: 30px;"> Arv on liiga suur! </div>';
        break;
    default:
        echo '<div style="position: relative; top: 300px; display: flex; justify-content: center; font-weight: 500; font-size: 30px;"> Õige, arvasid ära! </div>';
}

echo '<div style="position: relative; top: 400px; text-align: center;"><br><br><hr><br><a href="arvamis_input.php" style="text-decoration: none;">Tagasi arvamisse</a></div>';