<?php

$str = "Hello World PHP Programming";

echo "<h2>1. strlen()</h2>";
echo "String: " . $str . "<br>";
echo "Length of String: " . strlen($str);

echo "<hr><h2>2. strpos()</h2>";
echo "Position of 'World': " . strpos($str, "World");

echo "<hr><h2>3. str_word_count()</h2>";
echo "Number of Words: " . str_word_count($str);

echo "<hr><h2>4. strrev()</h2>";
echo "Reversed String: " . strrev($str);

echo "<hr><h2>5. strtolower()</h2>";
echo "Lowercase String: " . strtolower($str);

echo "<hr><h2>6. strtoupper()</h2>";
echo "Uppercase String: " . strtoupper($str);

?>