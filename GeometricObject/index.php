<?php
include_once 'GeometricObject.php';
include_once 'Circle.php';

$circle=new Circle('red','circle',4);
    echo 's :'.$circle->getArea().'<br>'.'p :'.$circle->getPerimeter();
