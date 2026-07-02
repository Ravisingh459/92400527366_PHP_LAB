```php
<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "<h2>MySQL String Manipulation Functions</h2>";

// 1. LENGTH()
$query1 = "SELECT LENGTH('Hello World') AS Length_Result";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);
echo "<b>1. LENGTH(): </b>" . $row1['Length_Result'] . "<br><br>";

// 2. CONCAT()
$query2 = "SELECT CONCAT('Hello', ' ', 'World') AS Concat_Result";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);
echo "<b>2. CONCAT(): </b>" . $row2['Concat_Result'] . "<br><br>";

// 3. CONCAT_WS()
$query3 = "SELECT CONCAT_WS('-', '2025', '08', '05') AS ConcatWS_Result";
$result3 = mysqli_query($conn, $query3);
$row3 = mysqli_fetch_assoc($result3);
echo "<b>3. CONCAT_WS(): </b>" . $row3['ConcatWS_Result'] . "<br><br>";

// 4. TRIM(), RTRIM(), LTRIM()
$query4 = "SELECT 
            TRIM('   PHP Programming   ') AS Trim_Result,
            RTRIM('PHP Programming   ') AS RTrim_Result,
            LTRIM('   PHP Programming') AS LTrim_Result";
$result4 = mysqli_query($conn, $query4);
$row4 = mysqli_fetch_assoc($result4);

echo "<b>4. TRIM(): </b>" . $row4['Trim_Result'] . "<br>";
echo "<b>RTRIM(): </b>" . $row4['RTrim_Result'] . "<br>";
echo "<b>LTRIM(): </b>" . $row4['LTrim_Result'] . "<br><br>";

// 5. LPAD(), RPAD(), LOCATE()
$query5 = "SELECT 
            LPAD('PHP', 10, '*') AS LPad_Result,
            RPAD('PHP', 10, '*') AS RPad_Result,
            LOCATE('World', 'Hello World') AS Locate_Result";
$result5 = mysqli_query($conn, $query5);
$row5 = mysqli_fetch_assoc($result5);

echo "<b>5. LPAD(): </b>" . $row5['LPad_Result'] . "<br>";
echo "<b>RPAD(): </b>" . $row5['RPad_Result'] . "<br>";
echo "<b>LOCATE(): </b>" . $row5['Locate_Result'] . "<br>";

mysqli_close($conn);
?>
```
