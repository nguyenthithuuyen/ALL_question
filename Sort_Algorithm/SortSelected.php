<?php
function SelectionSortAscending($mang)
{
    // Đếm tổng số phần tử của mảng
    $sophantu = count($mang);

    // Lặp để sắp xếp
    for ($i = 0; $i < $sophantu - 1; $i++) {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < $sophantu; $j++) {
            if ($mang[$j] < $mang[$min]) {
                $min = $j;
            }
        }

        // Sau khi có vị trí nhỏ nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
    }

    // Trả về mảng đã sắp xếp
    return $mang;
}

$my_array = [14, 4, 5, 1, 18, 6];
echo "Original Array :\n";
echo implode(', ', $my_array);
echo '<br>';
echo "\nSorted Array :\n";
echo implode(', ', SelectionSortAscending($my_array)) . PHP_EOL;