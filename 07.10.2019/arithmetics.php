<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aritmeetilised operaatorid</title>
    <style>
        body{
            font-family:'arial';
        }
        table,td,th{
            border: 2px solid black;
            border-collapse: collapse;
        }
        th{
            background-color: lightgoldenrodyellow;

        }
        td{
            text-align:center;
            padding: 3px;
        }
        tr:nth-child(even){
            background-color: lightgray;
        }
    </style>

</head>
<body>


<?php

/** file name arightmetics.php. matemaatiliste fn omistamine jm. */

//define variables

$x=8;
$y=2;

//arithmetic operators

$sum = $x + $y;
$subtr = $x - $y;
$div = $x / $y;
$mult = $x * $y;
$residual = $x % $y;

// output table

echo
    '
    <table>
        <thead>
            <tr>
            <th>Operaator</th>
            <th>Nimetus</th>
            <th>Näide</th>
            <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <!--Sum operator-->
        <td> x + y </td>
        <td> Liitmine </td>
        <td> '.$x.' + '.$y.'</td>
        <td> '.$sum.'</td>
        </tr>
        <tr>
        <!--Divison operator-->
        <td> x - y </td>
        <td> Lahutamine </td>
        <td> '.$x.' - '.$y.'</td>
        <td> '.$subtr.'</td>
        </tr>
        <tr>
        <!--Multiplication operator-->
        <td> x * y </td>
        <td> Korrutamine </td>
        <td> '.$x.' * '.$y.'</td>
        <td> '.$mult.'</td>
        </tr>
        <tr>
        <!--Divison operator-->
        <td> x / y </td>
        <td> Jagamine </td>
        <td> '.$x.' / '.$y.'</td>
        <td> '.$div.'</td>
        </tr>
        <tr>
        <!--Residual operator-->
        <td> x % y </td>
        <td> Jääk </td>
        <td> '.$x.' % '.$y.'<br>5%2</td>
        <td> '.$residual.'<br>'.(5%2).'</td>
        </tr>
        </tbody>
    </table>
    ';
?>
</body>
</html>
