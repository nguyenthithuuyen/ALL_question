<?php
$array = [14, 4, 5, 1, 18, 6];
for ($i = 0; $i < (count($array) - 1); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
        }
    }
}
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . ' , ';
}