<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>three</title>
</head>
<body>
<?php
echo "<h3>Odd Numbers from 2 to 20</h3>";

for ($i = 3; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "<h3>Even Numbers from 35 to 7</h3>";

for ($i = 34; $i >= 7; $i -= 2) {
    echo $i . " ";
}
?>
</body>
</html>