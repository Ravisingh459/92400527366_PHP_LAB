<?php
// 1. Numeric Array for Monday to Saturday
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Numeric Array (Days)</h3>";
print_r($days);

echo "<br><br>";

// 2. Associative Array for Months and Total Days
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>Associative Array (Months and Days)</h3>";
foreach ($months as $month => $daysCount) {
    echo $month . " => " . $daysCount . "<br>";
}

echo "<br>";

// 3. Multidimensional Array for Laptops
$laptops = array(
    "Dell" => array(
        array("Model" => "Inspiron 15", "Price" => 55000),
        array("Model" => "Vostro 14", "Price" => 60000)
    ),
    "HP" => array(
        array("Model" => "Pavilion 15", "Price" => 58000),
        array("Model" => "Victus", "Price" => 75000)
    )
);

echo "<h3>Multidimensional Array (Laptops)</h3>";

foreach ($laptops as $company => $models) {
    echo "<b>Company: $company</b><br>";
    
    foreach ($models as $laptop) {
        echo "Model: " . $laptop["Model"] .
             " | Price: ₹" . $laptop["Price"] . "<br>";
    }
    
    echo "<br>";
}
?>