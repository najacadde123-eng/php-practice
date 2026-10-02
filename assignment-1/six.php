<!DOCTYPE html>
<html>
<head>
    <title>six</title>
</head>
<body>

<?php

$a = 8;
$b = 12;

$max = ($a > $b) ? $a : $b;

while (true) {
    if ($max % $a == 0 && $max % $b == 0) {
        echo "LCM of $a and $b is: " . $max;
        break;
    }
    $max++;
}

?>

</body>
</html>