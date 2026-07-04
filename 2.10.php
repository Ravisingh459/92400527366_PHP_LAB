<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL Query using MySQL Date and Time Functions
$sql = "SELECT
            CURDATE() AS CurrentDate,
            CURTIME() AS CurrentTime,
            UNIX_TIMESTAMP() AS UnixTimeStamp,
            FROM_UNIXTIME(UNIX_TIMESTAMP()) AS ConvertedDateTime";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>MySQL Date and Time Functions</h2>";

    echo "CURDATE(): " . $row['CurrentDate'] . "<br>";
    echo "CURTIME(): " . $row['CurrentTime'] . "<br>";
    echo "UNIX_TIMESTAMP(): " . $row['UnixTimeStamp'] . "<br>";
    echo "FROM_UNIXTIME(): " . $row['ConvertedDateTime'] . "<br>";
}

mysqli_close($conn);
?>