<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL Query using MySQL Date Functions
$sql = "SELECT 
            DAYOFWEEK(CURDATE()) AS DayOfWeek,
            WEEKDAY(CURDATE()) AS WeekDay,
            DAYOFMONTH(CURDATE()) AS DayOfMonth,
            DAYOFYEAR(CURDATE()) AS DayOfYear,
            DAYNAME(CURDATE()) AS DayName";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>MySQL Date Functions</h2>";
    echo "DAYOFWEEK(): " . $row['DayOfWeek'] . "<br>";
    echo "WEEKDAY(): " . $row['WeekDay'] . "<br>";
    echo "DAYOFMONTH(): " . $row['DayOfMonth'] . "<br>";
    echo "DAYOFYEAR(): " . $row['DayOfYear'] . "<br>";
    echo "DAYNAME(): " . $row['DayName'] . "<br>";
}

mysqli_close($conn);
?>