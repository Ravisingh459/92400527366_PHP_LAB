<?php
$numbers = array(12, 45, 7, 89, 23, 56);

$max = $numbers[0];
$min = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $max) {
        $max = $num;
    }

    if ($num < $min) {
        $min = $num;
    }
}

echo "Maximum number: " . $max . "<br>";
echo "Minimum number: " . $min;
?>