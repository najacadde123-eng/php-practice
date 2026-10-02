<?php

// 1. Greatest and smallest of three numbers
echo "<h3>Question 1</h3>";

$a = 10;
$b = 25;
$c = 15;

echo "Greatest: " . max($a, $b, $c) . "<br>";
echo "Smallest: " . min($a, $b, $c) . "<br>";


// 2. Divisible by 3 and 5
echo "<h3>Question 2</h3>";

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "$num is divisible by 3 and 5";
} else {
    echo "$num is not divisible by both";
}


// 3. Odd and even numbers
echo "<h3>Question 3</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i is Even<br>";
    } else {
        echo "$i is Odd<br>";
    }
}


// 4. Divisible by 2 and 5
echo "<h3>Question 4</h3>";

$num = 20;

if ($num % 2 == 0 && $num % 5 == 0) {
    echo "$num is divisible by 2 and 5";
} else {
    echo "$num is not divisible by both";
}


// 5. Reverse a number
echo "<h3>Question 5</h3>";

$num = 12345;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}

echo "Reversed number: $reverse";


// 6. LCM
echo "<h3>Question 6</h3>";

$a = 12;
$b = 18;
$lcm = max($a, $b);

while ($lcm % $a != 0 || $lcm % $b != 0) {
    $lcm++;
}

echo "LCM: $lcm";


// 7. HCF
echo "<h3>Question 7</h3>";

$a = 12;
$b = 18;
$hcf = 1;

for ($i = 1; $i <= min($a, $b); $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF: $hcf";


// 8. Multiplication table
echo "<h3>Question 8</h3>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}


// 9. One-dimensional array
echo "<h3>Question 9</h3>";

$numbers = array(10, 15, 20, 25, 30);

print_r($numbers);
echo "<br>";

echo "Total: " . array_sum($numbers) . "<br>";

$evenSum = 0;
$oddSum = 0;

foreach ($numbers as $n) {
    if ($n % 2 == 0) {
        $evenSum += $n;
    } else {
        $oddSum += $n;
    }
}

echo "Even sum: $evenSum<br>";
echo "Odd sum: $oddSum<br>";
echo "Maximum: " . max($numbers) . "<br>";
echo "Minimum: " . min($numbers) . "<br>";


// 10. Associative array
echo "<h3>Question 10</h3>";

$colors = array(
    "Light" => array("Red", "Green", "Blue"),
    "Normal" => array("Red", "Green", "Blue"),
    "Dark" => array("Red", "Green", "Blue")
);

print_r($colors);
echo "<br>";

var_dump($colors);


// 11. Student information
echo "<h3>Question 11</h3>";

$students = array(
    array("id" => "CA221", "name" => "Ali", "age" => 20),
    array("id" => "CA222", "name" => "Ahmed", "age" => 21),
    array("id" => "CA223", "name" => "Hassan", "age" => 22)
);

foreach ($students as $student) {
    echo "ID: " . $student["id"] . "<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br><br>";
}

print_r($students);

?>