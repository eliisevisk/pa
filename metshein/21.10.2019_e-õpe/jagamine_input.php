<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            display: flex;
            justify-content: center;

        }
        #input_group{
            position: relative;
            top: 280px;
            width: 300px;
            height: 140px;
            border: 2px solid darkgray;
            border-radius: 20px;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
        }
        #submitter{
            width:100%;
            height: 30px;
            background-color: lightcyan;
            border-radius: 2px;
        }

    </style>
    <title>Jagamine numbriga</title>
</head>
<body>
<form action="fnd_jagamine.php" method="get">
    <div id="input_group">
        <label for="first">Sisesta 1. number</label>
        <input type="number" name="first" id="first">
        <label for="sec">Sisesta 2. number</label>
        <input type="number" name="sec" id="sec">
        <input id="submitter" type="submit" value="Jagame!">
    </div>

</form>


<?php

?>

</body>
</html>
