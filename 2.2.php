<!DOCTYPE html>
<html>
<head>
    <title>Array Sorting in PHP</title>
</head>
<body>

<form method="post">
    Enter array elements (comma separated):
    <input type="text" name="numbers" required>
    <input type="submit" value="Sort Array">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["numbers"];

    // Convert input string into array
    $array = explode(",", $input);

    // Remove extra spaces
    $array = array_map('trim', $array);

    // Sort array in ascending order
    sort($array);

    echo "<h3>Sorted Array:</h3>";
    echo implode(", ", $array);
}
?>

</body>
</html>