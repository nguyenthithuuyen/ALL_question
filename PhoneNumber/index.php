<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đoán Số Điện Thoại</title>
</head>
<body>
<form method="post">
    <label>
        <textarea name="input"></textarea>
    </label>
    <input type="submit" value="Submit" name = "submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]== "POST") {
    $textarea = $_POST["input"];
    $viettel = array();
    $vinaphone = array();
    $mobile = array();
    //tach chuoi thanh array
    $viet = ["086", "096", "097", "098", "032", "033", "034", "035", "036", "037", "038", "039"];
    $vina = ["088", "091", "094", "083", "084", "085", "081", "082"];
    $mobi = ["089", "090", "093", "070", "079", "077", "076", "078"];
    echo "Phone Number";
    echo "<pre>";
    $textarea  = explode(",",$textarea);
    var_dump($textarea);
    for($i = 0 ; $i < count($textarea);$i++) {
        $number = str_split($textarea[$i],3);
        if(in_array($number[0],$viet)) {
            array_push($viettel,$textarea[$i]);
        } elseif (in_array($number[0],$vina)) {
            array_push($vinaphone,$textarea[$i]);
        }elseif (in_array($number[0],$mobi)) {
            array_push($mobile,$textarea[$i]);
        }
    }
    echo "<h2>Viettle</h2>";
    echo "<pre>";
    print_r($viettel);
    echo "<h2>Vina</h2>";
    echo "<pre>";
    print_r($vinaphone);
    echo "<h2>Mobiphone</h2>";
    echo "<pre>";
    print_r($mobile);
}
?>
</body>
</html>