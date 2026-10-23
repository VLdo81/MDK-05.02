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
    <h2>Задача 3</h2>
    <?php 
    $t = [12, 43, 54545, 67, 54, 4];
    $sum = 0;
    foreach ($t as $key => $value) {
        $sum += $value;
    }
    $sum /= ($key + 1);
    echo $sum;
    ?>
    <h2>Задача 4</h2>
    <?php 
    $numbers = [2121, -56, 445, 8, -67, -6];
    $res = [];
    foreach ($numbers as $key => $value) {
        if ($value > 0) {
            $res[] = $value ** 2;   
        }
        else {
            $res[] = abs($value);
        }
    }
    foreach ($res as $value) {
        echo $value . " ";
    }
    ?>
    <h2>Задача 5</h2>
    <?php 
    $nums = [454, 54, 67, 4344, 434, 43, 67788, 1845, 67];
    foreach ($nums as $key => $value) {
        if ($key % 2 === 0) {
            echo $value . " ";
        }
    }
    ?>
    <h2>Задача 6</h2>
    <?php 
    $numbs = [5674, 57, 6, 7, 45, 52, 678];
    $first = true;
    $previous = 0;
    foreach ($numbs as $current) {
        if (!$first && $current > $previous) {
            echo $current . " ";
        }
        $previous = $current;
        $first = false;
    }
    ?>
    <h2>Задача 7</h2>
    <?php 
    $A = [212, 45, 6, 566, 75, 56, 4, 34566];
    $swapped = [];
    $length = count($A);
    foreach ($A as $key => $item) {
        if ($key % 2 === 0) {
            if ($key + 1 < $length) {
                $swapped[$key + 1] = $item;
            } else {
                $swapped[$key] = $item;
            }
        } else {
            $swapped[$key - 1] = $item;
        }
    }
    ksort($swapped);
    foreach ($swapped as $item) {
        echo $item . " ";
    }
    ?>
    <h2>Задача 8</h2>
    <?php 
    $list =[544, 54, 67, 44, 5, 690, 65656, 7, 6];
    $shifted = [];
    $length = count($list);

    foreach ($list as $key => $item) {
        $nextKey = ($key + 1) % $length;
        $shifted[$nextKey] = $item;
    }

    ksort($shifted);

    foreach ($shifted as $item) {
        echo $item . " ";
    }
    ?>
    <h2>Задача 9</h2>
    <?php 
    $ns = [545, 55, 67, 6, 87, 67, 4321];
    $counts = [];
    foreach ($ns as $num) {
        if (isset($counts[$num])) {
            $counts[$num]++;
        } else {
            $counts[$num] = 1;
        }
    }

    $totalPairs = 0;

    foreach ($counts as $count) {
        $totalPairs += ($count * ($count - 1)) / 2;
    }

    echo $totalPairs;
    ?>
</body>
</html>