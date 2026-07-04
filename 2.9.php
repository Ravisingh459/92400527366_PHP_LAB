<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL Query using MySQL Time and Date Functions
$sql = "SELECT 
            HOUR(NOW()) AS CurrentHour,
            MINUTE(NOW()) AS CurrentMinute,
            SECOND(NOW()) AS CurrentSecond,
            DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS FormattedDate,
            DATE_SUB(CURDATE(), INTERVAL 7 DAY) AS SevenDaysAgo";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>MySQL Date and Time Functions</h2>";

    echo "HOUR(): " . $row['CurrentHour'] . "<br>";
    echo "MINUTE(): " . $row['CurrentMinute'] . "<br>";
    echo "SECOND(): " . $row['CurrentSecond'] . "<br>";
    echo "DATE_FORMAT(): " . $row['FormattedDate'] . "<br>";
    echo "DATE_SUB() (7 Days Ago): " . $row['SevenDaysAgo'] . "<br>";
}

mysqli_close($conn);
?>