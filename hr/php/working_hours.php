<?php

function dump_hours($hours_res) {
    $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    echo '<table class="table table-striped table-responsive"><tbody>';
    $ctr = 0;
    $binary_switch = 0;
    $flag = false;
    //$binary switch is a var which can have 3 values: 1, 10, 110 (closed, 1 shift, double shift)
    //additionally there's a $flag variable which tells the program if we previously had double shifting system
    //it aint stupid if it works :)
    while ($row_h = $hours_res->fetch_assoc()) {
        if ($row_h['open'] == 'null') {$binary_switch++;}
        if ($row_h['open'] != 'null') {$binary_switch += 10;}
        if ($row_h['open2'] != 'null') {$binary_switch += 100;}
        if ($binary_switch == 1) {echo '<tr class="danger">';}
        else {echo '<tr>';}
        echo '<td>'.$days[$ctr].'</td>';
        switch ($binary_switch) {
            case 1: 

                if ($flag == true) {echo '<td colspan="4">Closed</td>';}
                else {echo '<td colspan="2">Closed</td>';}
                break;

            case 10:

                if ($flag == true) {
                    echo '<td colspan="2">'.$row_h['open'].'</td>';
                    echo '<td colspan="2">'.$row_h['close'].'</td>';
                }
                else {
                    echo '<td>'.$row_h['open'].'</td>';
                    echo '<td>'.$row_h['close'].'</td>';
                }
                break;

            case 110:

                echo '<td>'.$row_h['open'].'</td>';
                echo '<td>'.$row_h['close'].'</td>';
                echo '<td>'.$row_h['open2'].'</td>';
                echo '<td>'.$row_h['close2'].'</td>';
                break;
        }
        echo '</tr>';
        if ($binary_switch > 100) {$flag = true;}
        $binary_switch = 0;
        $ctr++;
    }
    echo '</tbody></table>';
}