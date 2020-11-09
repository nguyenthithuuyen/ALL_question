<?php

include_once 'CoupleDance.php';
$dancer=new CoupleDance();
$male = new SplQueue();
$female = new SplQueue();
$male->enqueue("nam");
$male->enqueue("name");
$male->enqueue("na");
$male->enqueue("nai");
$female->enqueue('uyen');
$female->enqueue('tuy');
$female->enqueue('quay');
$female->enqueue('quen');
$female->enqueue('cai');
$female->enqueue('yen');
 print_r($dancer);