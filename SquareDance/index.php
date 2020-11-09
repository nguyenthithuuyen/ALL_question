<?php
include_once "Dancer.php";
$male = new SplQueue();
$female = new SplQueue();
$dancerMale1 = new Dancer('male', 'Duc');
$male->enqueue($dancerMale1->getName());
$dancerMale2 = new Dancer('male', 'Tuan');
$male->enqueue($dancerMale2->getName());
$dancerMale3 = new Dancer('male', 'Toan');
$male->enqueue($dancerMale3->getName());
$dancerMale4 = new Dancer('male', 'Quan');
$male->enqueue($dancerMale4->getName());
$dancerFemale1 = new Dancer('female', 'Quyen');
$female->enqueue($dancerFemale1->getName());
$dancerFemale2 = new Dancer('female', 'Nga');
$female->enqueue($dancerFemale2->getName());
$dancerFemale3 = new Dancer('female', 'Ngan');
$female->enqueue($dancerFemale3->getName());
while (!$male->isEmpty() && !$female->isEmpty()) {
    echo 'Day la mot cap vit gioi:' . $male->dequeue() . '-';
    echo $female->dequeue() . '<br>';
}
$dancerFemale4 = new Dancer('female', 'Uyen');
$female->enqueue($dancerFemale4->getName());
$dancerFemale5 = new Dancer('female', 'Tuyet');
$female->enqueue($dancerFemale5->getName());
$dancerFemale6 = new Dancer('female', 'Thuong');
$female->enqueue($dancerFemale6->getName());
while (!$male->isEmpty() && !$female->isEmpty()) {
    $male->dequeue();
    $female->dequeue();
}
while (!$male->isEmpty()) {
    echo 'Nguoi dang doi la :' . $male->dequeue() . ' ';
}
while (!$female->isEmpty()) {
    echo 'Nguoi dang doi la :' . $female->dequeue() . ' ' . '<br>';
}
