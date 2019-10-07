
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
            font-family:'Tahoma', Serif;
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
            <th>Võrdväärne tehe</th>
            <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <!--Sum operator-->
        <td> x = x + 2 </td>
        <td> x += 2 </td>
        <td> '.$x.'+= 2</td>
        <td> '.($x+=2).'</td>
        </tr>';
$x=8;
echo'        
        <tr>
        <!--Subtraction operator-->
        <td> x = x - 2 </td>
        <td> x -= 2 </td>
        <td> '.$x.' -= 2</td>
        <td> '.($x -= 2).'</td>
        </tr>';
$x=8;
echo '        
        <tr>
        <!--Multiplication operator-->
        <td> x = x * 2 </td>
        <td> x *= 2 </td>
        <td> '.$x.' *= 2</td>
        <td> '.($x *= 2).'</td>
        </tr>';
$x=8;
echo'        
        <tr>
        <!--Divison operator-->
        <td> x = x / 2 </td>
        <td> x /= 2 </td>
        <td> '.$x.' /= 2</td>
        <td>'.($x /= 2).'</td>
        </tr>';
$x=8;
echo'        
        <tr>
        <!--Residual operator-->
        <td> x = x % 2 </td>
        <td> x %= 2</td>
        <td> '.$x.' %= 2</td>
        <td> '.($x %= 2).'</td>
        </tr>
        </tbody>
    </table>
    ';
?>
</body>
</html>
