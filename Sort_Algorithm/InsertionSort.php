<?php
function insertionSort($array){
    for($i=0;$i<count($array);$i++){
        $val=$array[$i];
        $j=$i-1;
        while ($j>=0&&$array[$j]>$val){
            $array[$j+1]=$array[$j];
            $j--;
        }
        $array[$j+1]=$val;
    }
    return $array;
}
$my_array = [14, 4, 5, 1, 18, 6];
echo "Original Array :\n";
echo implode(', ', $my_array);
echo '<br>';
echo "\nSorted Array :\n";
echo implode(', ', insertionSort($my_array)) ;