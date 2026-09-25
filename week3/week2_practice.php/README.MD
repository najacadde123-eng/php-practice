# Week 2 PHP Practice

## About

This project contains PHP practice exercises covering loops and arrays.
The examples use `echo`, `print_r()`, and `var_dump()` to display
results.

## Topics Covered

1.  Find the greatest and smallest of three numbers.
2.  Check whether a number is divisible by 3 and 5.
3.  Display odd and even numbers using a loop.
4.  Check whether a number is divisible by 2 and 5.
5.  Reverse a number.
6.  Find the Least Common Multiple (LCM).
7.  Find the Highest Common Factor (HCF).
8.  Print multiplication tables using nested loops.
9.  Work with a one-dimensional array: total, even/odd sums, minimum,
    and maximum.
10. Display a multidimensional associative array.
11. Display student information using an array of associative arrays.

## PHP Functions Used

-   `echo` --- displays text and values.
-   `print_r()` --- displays arrays in a readable format.
-   `var_dump()` --- displays values along with their data types.

## Requirements

-   XAMPP with Apache
-   A code editor such as Visual Studio Code
-   A web browser

## How to Run

1.  Save the PHP file as `week2_practice.php`.

2.  Place it inside a folder under `C:\xampp\htdocs\`.

3.  Start **Apache** in the XAMPP Control Panel.

4.  Open the file in your browser using a URL like:

    `http://localhost/your-folder/week2_practice.php`

    Replace `your-folder` with the actual folder name.

## Example

``` php
<?php
$colors = array("Red", "Green", "Blue");

echo "Colors: ";
print_r($colors);

echo "<br>";
var_dump($colors);
?>
```

## Note

This is a learning exercise. Student names, IDs, and sample values can
be changed for your own practice.
