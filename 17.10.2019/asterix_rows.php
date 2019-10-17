<?php

for($row=1; $row <= 5; $row++){
    echo $row.'&nbsp';
    if ($row<10){
        echo'&nbsp;&nbsp;';
    }
    for($col = 1; $col <= (5-$row); $col++){
        echo'&nbsp;&nbsp;&nbsp;';
    }
    for($col = 1; $col <= (2*$row-1); $col++){
        echo'*';
        echo '&nbsp;';
    }

    echo'<br>';
}
