<?php
$arr = array("1", "2", "3", "4", "5", "4", "2", "1");

for ($i = 0; $i < count($arr); $i++) {
    $temp = $arr[$i];
    $j = $i;
    for ($k = 0; $k < count($arr); $k++) {
        if ($k != $j) {
            if ($temp == $arr[$k]) {
                echo $temp."<br>";
                $arr[$k]=" ";
            }
        }
    }
}

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " <br><br>";
}
