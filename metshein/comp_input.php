<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            display:flex;
            justify-content: center;
            position: relative;
            top: 280px;
        }
        form{
            display: flex;
            width: 300px;
            flex-direction: column;
            align-items: center;
            border: 3px solid lightgray;
            border-radius: 10%;
        }
        input{
            width: 90%;
            height: 30px;
            border: none;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
<form action="comp.php" method="get">
    <label for="first" id="numlabel">Sisestage kaks täisarvu</label>
    <input id="first" name="first" placeholder="Esimene täisarv">
    <input id="sec" name="sec" placeholder="Teine täisarv">
    <input type="submit" value="Võrdlema!">
</form>

<?php
?>

</body>
</html>
