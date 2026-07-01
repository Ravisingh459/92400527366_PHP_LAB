<?php

echo "<h2>Type Casting using settype() and gettype()</h2>";

// Integer Variable
$var = 100;

echo "Original Value: $var <br>";
echo "Original Data Type: " . gettype($var) . "<br><br>";

// Convert Integer to String
settype($var, "string");
echo "After settype(\$var, 'string')<br>";
echo "Value: $var <br>";
echo "Data Type: " . gettype($var) . "<br><br>";

// Convert String to Float
settype($var, "float");
echo "After settype(\$var, 'float')<br>";
echo "Value: $var <br>";
echo "Data Type: " . gettype($var) . "<br><br>";

// Convert Float to Boolean
settype($var, "boolean");
echo "After settype(\$var, 'boolean')<br>";
echo "Value: $var <br>";
echo "Data Type: " . gettype($var) . "<br><br>";

// Convert Boolean to Integer
settype($var, "integer");
echo "After settype(\$var, 'integer')<br>";
echo "Value: $var <br>";
echo "Data Type: " . gettype($var) . "<br>";

?>