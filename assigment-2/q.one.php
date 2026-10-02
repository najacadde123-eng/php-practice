
<!DOCTYPE html>
<html>
<head>
    <title>one</title>
</head>
<body>

<h2>One-Dimensional Array</h2>

<?php

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// Print all elements
echo "<h3>All Array Elements:</h3>";
print_r($numbers);

// Calculate totals
$total = 0;
$evenTotal = 0;
$oddTotal = 0;

$min = $numbers[0];
$max = $numbers[0];

foreach ($numbers as $number) {
    $total += $number;

    if ($number % 2 == 0) {
        $evenTotal += $number;
    } else {
        $oddTotal += $number;
    }

    if ($number < $min) {
        $min = $number;
    }

    if ($number > $max) {
        $max = $number;
    }
}

// Find positions of minimum and maximum
$minPositions = array();
$maxPositions = array();

foreach ($numbers as $index => $number) {
    if ($number == $min) {
        $minPositions[] = $index + 1;
    }

    if ($number == $max) {
        $maxPositions[] = $index + 1;
    }
}

// Display results
echo "<h3>Total of all elements: $total</h3>";
echo "<h3>Total of even elements: $evenTotal</h3>";
echo "<h3>Total of odd elements: $oddTotal</h3>";

echo "<h3>Minimum element: $min</h3>";
echo "Positions: " . implode(", ", $minPositions);

echo "<h3>Maximum element: $max</h3>";
echo "Positions: " . implode(", ", $maxPositions);

?>

</body>
</html>