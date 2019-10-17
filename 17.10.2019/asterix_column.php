<?php
for($count=1; $count <= 20; $count++){
    if($count<10){
        echo $count.'&nbsp; &nbsp*';
        echo'<br>';
    }
    else{
        echo $count.'&nbsp;*';
        echo'<br>';
    }
}