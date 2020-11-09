<?php
$arr=[2,3,5,2,4,3];
function xoatrung($arr){
    $newArr=[];
    $j=0;
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i]==$arr[$i+1]){
            $newArr[$j]=$arr[$i];
            $j++;

        }
    }
    return $newArr;
}
var_dump(xoatrung($arr));