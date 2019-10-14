<?php

$first = $_GET['first'];
$sec = $_GET['sec'];

if (!empty($_GET['first']) AND !empty($_GET['sec'])) {
    if ($first > $sec) {
        echo '<div style="display: flex; justify-content: center;position: relative; top:300px;font-size: 30px; font-weight: 600;">'.$first.' on suurem kui '.$sec.'</div>';
    } else if ($first < $sec) {
        echo '<div style="display: flex; justify-content: center;position: relative; top:300px;font-size: 30px; font-weight: 600;">'.$first.' on väiksem kui '.$sec.'</div>';
    } else {
        echo '<div style="display: flex; justify-content: center;position: relative; top:300px;font-size: 30px; font-weight: 600;">'.$first.' on võrdne arvuga '.$sec.'</div>';
    }
}
else{
    echo '<div style="display: flex; justify-content: center;position: relative; top:300px;font-size: 30px; font-weight: 600;"> Palun täitke kõik väljad! </div>';

}