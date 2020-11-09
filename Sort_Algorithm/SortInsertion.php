<?php
function InsertionSort($mang)
{
    $length = count($mang);

    // Lặp qua từng phần tử của mảng để sắp xếp
    for ($i = 0; $i < $length; $i++) {
        // Lặp từ phần tử thứ $i, ví dụ $i = 6
        // thì sẽ lặp từ phần tử số 6 trở về 0 để kiểm tra
        $loop = $i;

        // Lưu lại giá trị của $mang[$i] để khỏi bị mất
        $current = $mang[$i];

        // điều kiện dừng là $loop <= 0 (tức là hết mảng) hoặc
        // phần tử thứ $loop - 1 bé hơn phần tử thứ $i (vì đã tìm đc đúng vị trí)
        // nếu một trong 2 điều kiện đó đúng thì sẽ dừng vòng lặp
        while ($loop > 0 && ($mang[$loop - 1] > $current)) {
            // Di dời các phần tử lên 1 bậc
            $mang[$loop] = $mang[$loop - 1];
            $loop -= 1;
        }

        // Gán giá trị $current vào vị trí tìm được
        $mang[$loop] = $current;
    }

    return $mang;
}
$my_array = [14, 4, 5, 1, 18, 6];
echo "Original Array :\n";
echo implode(', ', $my_array);
echo '<br>';
echo "\nSorted Array :\n";
echo implode(', ', InsertionSort($my_array)) ;