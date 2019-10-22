<?php
//define function tableHeader;
// function uses 4 parameters >>> header text values;
// function output is table header with text values;
//additional challenge:
//         header output text value must be realised using a for-loop

function tableHeader($col1, $col2, $col3, $col4){
    echo '<thead style="border: 1px solid black; border-collapse:collapse; padding:10px;">
            <tr>';
    for($cll=1; $cll<5; $cll++){
        echo '<th style="border:3px solid gray; border-collapse: collapse;padding:10px;">'.${col.$cll}.'</th>';
        }
    echo '</tr>
          </thead>';
}


function tableBody($rowNumber, $xcolNumber){
    echo '<tbody style="border: 3px solid lightgray; border-collapse:collapse;">';
    for($row=1; $row<=$rowNumber;$row++){
        echo'<tr>';
            for($col=1; $col<=$xcolNumber; $col++){
                echo'<td style="border: 3px solid lightgray; border-collapse:collapse;padding:10px; width: 80px; height: 80px; background-color:rgb('.rand(0,255).', '.rand(0,255).', '.rand(0,255).');">';
                //echo rand(10, 99);
                echo'</td>';
            }
        echo'</tr>';
    }
    echo'</tbody>';
}


function table($rowNumber, $xcolNumber){
    echo '<table style="border: 1px solid black; border-collapse:collapse;text-align:center;">';
    echo tableHeader('see', 'on', 'tabeli', 'header');
    echo tableBody($rowNumber, $xcolNumber);
    echo '</table>';
}

echo table(4,4);