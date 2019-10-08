<?php

$nat=$_GET['nationality'];
$age=(int)$_GET['age'];
$edu=$_GET['edu'];

// control if data is empty
if(strlen($age) > 0){
    if($nat=='et' and $age>=18 and $edu!='edu-basic'){
        echo'<br>Sobilik kaitseväe teenistuseks <br><hr>';
    }
    else{
        echo'<br>Ei ole sobilik kaitseväe teenistuseks <br><hr>';
    }
}

if(empty($age)){
    echo '<br>Täitke kõik lahtrid!<br><hr>';
}

?>