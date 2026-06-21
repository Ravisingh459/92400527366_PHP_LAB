<?php
$month = date("n");

if($month == 6)
{
    echo "Current Month is June";
}
else
{
    echo "Current Month is not June";
}
?>

<?php
$month = date("n");

switch($month)
{
    case 6:
        echo "Current Month is June";
        break;

    default:
        echo "Current Month is not June";
}
?>