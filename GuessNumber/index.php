<?php
function binarySearch(array $numbers,  $needle) {
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return TRUE;
        }
    }
    return FALSE;
}
$numbers = range(1, 100, 1);

$number = 12;
if (binarySearch($numbers, $number) !== FALSE) {
    echo "$number Found \n";
} else {
    echo "$number Not found \n";
}
