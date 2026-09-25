<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Dimensional Associative Array</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h2>Two-Dimensional Associative Array</h2>

<?php

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

?>

<table>
    <tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>

    <?php foreach ($colors as $row => $values) { ?>
        <tr>
            <th><?php echo $row; ?></th>

            <?php foreach ($values as $color) { ?>
                <td><?php echo $color; ?></td>
            <?php } ?>

        </tr>
    <?php } ?>

</table>

</body>
</html>