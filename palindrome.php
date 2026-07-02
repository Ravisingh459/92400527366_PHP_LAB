<?php
$num = 121;
$temp = $num;
$rev = 0;

while($num > 0)
{
    $rem = $num % 10;
    $rev = ($rev * 10) + $rem;
    $num = (int)($num / 10);
}

if($temp == $rev)
{
    echo "$temp is a Palindrome Number";
}
else
{
    echo "$temp is Not a Palindrome Number";
}
?>