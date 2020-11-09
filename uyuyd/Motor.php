<?php
$count = 1;
while ($count < 10)
{
    echo "The count is: " . $count . "\n";
    if ($count === 4) {
        break;
    }
    $count += 1;
}