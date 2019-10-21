<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="dice.php" method="get">
    <input type="submit" name="dice" id="dice" value="Veereta!" /> <br>
</form>


<?php
//defineerime funktsiooni

function roll(){
    $dice = rand(1,6);
    return "Täringul on number $dice";
}


if(array_key_exists('dice',$_GET)){
  echo '<br>'.roll().'<br><br><hr><hr>';
 }

?>

</body>
</html>
