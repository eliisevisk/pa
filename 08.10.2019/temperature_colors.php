<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperatuuride kastid</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        .cold, .warm, .moder{
            border: 2px solid black;
            border-radius: 10px;
            width: 300px;
            height: 80px;
            text-align: center;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            top: 260px;
        }
    </style>
</head>
<body>

<?php
$temp=rand(-65, 40);

if($temp<=0){
    echo '<div class="cold" style="background-color: lightblue">Temperatuur on ' .$temp.'&deg C <br></div>';
}
else if(0 < $temp and $temp < 10){
    echo '<div class="moder" style="background-color: lightgreen">Temperatuur on ' .$temp.'&deg C <br></div>';
}
else if($temp>10){
    echo '<div class="warm" style="background-color: lightyellow">Temperatuur on ' .$temp.'&deg C <br></div>';
}
?>
</body>
</html>
