
<!DOCTYPE html>
<html>
<head>
    <title>eight</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Multiplication Table (12 x 12)</h2>

<?php
echo "<table>";

for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 12; $col++) {
        $result = $row * $col;
        echo "<td>$result</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>