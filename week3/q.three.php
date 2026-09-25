<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information</title>

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
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

<h2>Student Information</h2>

<?php

$students = array(
    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "06484403",
        "Address" => "Laba Dhagax, Wardhigley"
    ),

    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "064722301",
        "Address" => "Taleex, Hodan"
    ),

    "CA221" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macaanka, Dharkenley"
    )
);

?>

<table>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>

    <?php foreach ($students as $id => $details) { ?>
        <tr>
            <th><?php echo $id; ?></th>

            <?php foreach ($details as $value) { ?>
                <td><?php echo $value; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>

</table>

</body>
</html>