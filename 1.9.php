<?php
// Number of elements
echo "Enter the number of elements: ";
$n = (int) readline();

$array = [];

// Input array elements
for ($i = 0; $i < $n; $i++) {
    echo "Enter element " . ($i + 1) . ": ";
    $array[$i] = readline();
}

echo "\nOriginal Array: ";
print_r($array);

// Reverse the array
$reversedArray = array_reverse($array);

echo "\nReversed Array: ";
print_r($reversedArray);
?>