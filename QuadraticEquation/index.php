<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "QuadraticEquation.php";
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $quata=new QuadraticEquation($a,$b,$c);
    echo $quata->getRoot();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <Viet phuong trinh bac 2></title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Hệ số bậc 2: a</td>
            <td><input type="text" name="a"  /></td>
        </tr>
        <tr>
            <td>Hệ số bậc 1: b</td>
            <td><input type="text" name="b"  /></td>
        </tr>
        <tr>
            <td>Hệ số tự do: c</td>
            <td><input type="text" name="c"  /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
</body>
</html>
