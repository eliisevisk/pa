<!doctype html>
<html lang="en">
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
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #input-group>input {
            width: 100%;
            height: 40px;
        }
        #input-group-radio{
            width:100%;
        }
        input:focus{
            background-color: lightyellow;
        }
    </style>
</head>
<body>
<form action="sojavagi_do.php" method="get">
    <div>
        <label for="nationality" id="nationality"></label>
        <select name="nationality" id="nationality">
            <option value="et" name="et">Eestlane</option>
            <option value="ru" name="ru">Venelane</option>
            <option value="fin" name="fin">Soomlane</option>
            <option value="swe" name="swe">Rootslane</option>
        </select>
    </div>
    <div id="input-group">
        <label for="age" id="age">Vanus</label>
        <input type="number" min=0 id="age" name="age" placeholder="Vanus">
    </div>
    <div id="input-group-radio">
        <h3>Haridustase</h3>
        <label for="edu-basic" id="edu-basic">Algharidus</label>
        <input type="radio" id="edu-basic" name="edu-basic" value="edu-basic">
        <label for="edu-middle" id="edu-middle">Põhiharidus</label>
        <input type="radio" id="edu-middle" name="edu-middle" value="edu-middle">
        <label for="edu-high" id="edu-high">Keskharidus</label>
        <input type="radio" id="edu-high" name="edu-high" value="edu-high">
        <label for="edu-higher" id="edu-higher">Kõrgharidus</label>
        <input type="radio" id="edu-higher" name="edu-higher" value="edu-higher">
    </div>
    <input id="subber" type="submit" value="Kinnita andmed">
</form>



<?php
?>

</body>
</html>

