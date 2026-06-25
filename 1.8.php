<?php
$n = (int) readline("Enter the number of elements: ");

$array = [];

for ($i = 0; $i < $n; $i++) {
    $array[$i] = readline("Enter element " . ($i + 1) . ": ");
}

echo "\nArray elements are:\n";
foreach ($array as $value) {
    echo $value . " ";
}
?>