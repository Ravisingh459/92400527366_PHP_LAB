<?php

echo "<h2>1. array_change_key_case()</h2>";
$student = array("Name"=>"Ravi", "CITY"=>"Bhuj", "COURSE"=>"BCA");

echo "<b>Original Array:</b><br>";
print_r($student);

echo "<br><b>Keys in Lowercase:</b><br>";
print_r(array_change_key_case($student, CASE_LOWER));

echo "<br><b>Keys in Uppercase:</b><br>";
print_r(array_change_key_case($student, CASE_UPPER));


echo "<hr><h2>2. array_chunk()</h2>";
$months = array(
    "January","February","March","April",
    "May","June","July","August",
    "September","October","November","December"
);

$chunks = array_chunk($months, 3);

echo "<pre>";
print_r($chunks);
echo "</pre>";


echo "<hr><h2>3. array_count_values()</h2>";
$colors = array("Red","Blue","Red","Green","Blue","Red");

echo "<pre>";
print_r(array_count_values($colors));
echo "</pre>";


echo "<hr><h2>4. array_pop()</h2>";
$fruits = array("Apple","Banana","Mango","Orange");

echo "Original Array:<br>";
print_r($fruits);

$removed = array_pop($fruits);

echo "<br>Removed Element: ".$removed."<br>";
echo "Array After array_pop():<br>";
print_r($fruits);


echo "<hr><h2>5. array_push()</h2>";
$numbers = array(10, 20, 30);

echo "Original Array:<br>";
print_r($numbers);

array_push($numbers, 40, 50);

echo "<br>Array After array_push():<br>";
print_r($numbers);


echo "<hr><h2>6. array_unshift()</h2>";
$cities = array("Ahmedabad","Rajkot","Surat");

echo "Original Array:<br>";
print_r($cities);

array_unshift($cities, "Bhuj");

echo "<br>Array After array_unshift():<br>";
print_r($cities);


echo "<hr><h2>7. array_shift()</h2>";
$animals = array("Dog","Cat","Lion","Tiger");

echo "Original Array:<br>";
print_r($animals);

$first = array_shift($animals);

echo "<br>Removed First Element: ".$first."<br>";
echo "Array After array_shift():<br>";
print_r($animals);

?>