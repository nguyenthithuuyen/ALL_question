<?php
function CountNumber($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i]==$value){
            $count++;

        }

    }
    return $count;
}
$numbers=[1,1,1,2,3,4];
$value=1;
echo "Số lần xuất hiện của value là : ". CountNumber($numbers,$value);