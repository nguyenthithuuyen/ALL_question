<?php
include_once 'LinkedList.php';
$linkedList = new LinkedList();

$linkedList->insertFirst('Uyen');
$linkedList->insertFirst('Thuong');
$linkedList->insertFirst('Tuyet');
$linkedList->insertLast('Lam');
$linkedList->insertLast('Duc');
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo "<br>";
echo implode ('-' , $linkData);
var_dump($linkData);
print_r($linkedList);