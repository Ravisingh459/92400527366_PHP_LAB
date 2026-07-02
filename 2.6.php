<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator Using User Defined Functions</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php

// User Defined Functions
function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    if ($b == 0)
        return "Division by zero is not allowed!";
    else
        return $a / $b;
}

// Processing Form Data
if(isset($_POST['calculate']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch($operation)
    {
        case "add":
            $result = add($num1, $num2);
            break;

        case "sub":
            $result = subtract($num1, $num2);
            break;

        case "mul":
            $result = multiply($num1, $num2);
            break;

        case "div":
            $result = divide($num1, $num2);
            break;
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>