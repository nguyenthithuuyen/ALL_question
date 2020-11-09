<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $user=[
        'name'=>$name,
        'email'=>$email,
        'number'=>$number
    ];
}
