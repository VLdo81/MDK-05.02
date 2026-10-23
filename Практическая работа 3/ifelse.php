<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая работа 3</h1>
    <h2>Задача 1</h2>
    <?php
    $a = 5;
    $b = 10;
    if ($a < $b) {
        echo $a + $b;
    } else {
        echo $a * $b;
    }
    ?>
    <h2>Задача 2</h2>
    <?php
    $angle1 = 60;
    $angle2 = 30;
    if ($angle1 > 0 && $angle2 > 0 && ($angle1 + $angle2) < 180) {
        if ($angle1 == 90 || $angle2 == 90 || (180 - $angle1 - $angle2) == 90) {
            echo "Существует, прямоугольный";
        } else {
            echo "Существует, не прямоугольный";
        }
    } else {
        echo "Не существует";
    }
    ?>
    <h2>Задача 3</h2>
    <?php
    $age = 4;
    if ($age <= 1) {
        $ageGroup = 'Котята';
    } else if ($age <= 3) {
        $ageGroup = 'Молодые коты';
    } else if ($age <= 7) {
        $ageGroup = 'Коты средних лет';
    } else {
        $ageGroup = 'Почтенные коты';
    }
    echo $ageGroup;
    ?>
    <h2>Задача 4</h2>
    <?php
    $a = 3;
    $b = 4;
    $c = 5;
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Существует";
    } else {
        echo "Не существует";
    }
    ?>
    <h2>Задача 5</h2>
    <?php
    $n = 2024;
    if ($n % 100 === 0) {
        if ($n % 400 === 0) {
            echo "Високосный";
        } else {
            echo "Не високосный";
        }
    } else {
        if ($n % 4 === 0) {
            echo "Високосный";
        } else {
            echo "Не високосный";
        }
    }
    ?>
    <h2>Задача 6</h2>
    <?php
    $a = 20000;
    $b = 15000;
    if ($a + $b > 32767) {
        echo "Переполнение";
    } else {
        echo $a + $b;
    }
    ?>
    <h2>Задача 1</h2>
    <?php
    $A = 5;
    $B = 10;
    $x = 4;
    $y = 9;
    $z = 12;
    if (($x < $A && $y < $B) || ($y < $A && $x < $B) || ($x < $A && $z < $B) || ($z < $A && $x < $B) || ($y < $A && $z < $B) || ($z < $A && $y < $B)) {
        echo "Пройдет";
    } else {
        echo "Не пройдет";
    }
    ?>
    <h2>Задача 8</h2>
    <?php
    $day = 256;
    if ($day <= 31) {
        echo "$day января";
    } else if ($day <= 59) {
        echo ($day - 31) . " февраля";
    } else if ($day <= 90) {
        echo ($day - 59) . " марта";
    } else if ($day <= 120) {
        echo ($day - 90) . " апреля";
    } else if ($day <= 151) {
        echo ($day - 120) . " мая";
    } else if ($day <= 181) {
        echo ($day - 151) . " июня";
    } else if ($day <= 212) {
        echo ($day - 181) . " июля";
    } else if ($day <= 243) {
        echo ($day - 212) . " августа";
    } else if ($day <= 273) {
        echo ($day - 243) . " сентября";
    } else if ($day <= 304) {
        echo ($day - 273) . " октября";
    } else if ($day <= 334) {
        echo ($day - 304) . " ноября";
    } else if ($day <= 365) {
        echo ($day - 334) . " декабря";
    } else {
        echo "Неверный день";
    }
    ?>
    <h2>Задача 9</h2>
    <?php
    $num = 12;
    if ($num % 4 === 0 && $num % 6 === 0) {
        echo "Делится";
    } else {
        echo "Не делится";
    }
    ?>
    <h2>Задача 10</h2>
    <?php
    $x = 3;
    $y = 4;
    $r = 5;
    if ($x * $x + $y * $y <= $r * $r) {
        echo "Лежит";
    } else {
        echo "Не лежит";
    }
    ?>
</body>
</html>
