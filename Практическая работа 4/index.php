<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая работа 4</h1>
    <h2>Задача 1</h2>
    <?php 
    $number = [21, 4, 54, 77667, 969];
    $max = $number[0];
    $min = $number[0];
    foreach ($number as $key => $value) {
        if ($value > $max) {
            $max = $value;
        }
        if ($value < $min) {
            $min = $value;
        }
    }
    echo "Максимум = $key - $max <br> Минимум = $key - $min";
    ?>
    <h2>Задача 2</h2>
    <?php
    $n = [1, 34, 4343, 5, 9009];
    $sum = 0;
    foreach ($n as $key => $value) {
        $sum += $value;
    }
    echo $sum;
    ?>
</body>
</html>