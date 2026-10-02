<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Практическая работа 2</h2>
    <h3>Задача 1</h3>
    <?php 
    $a = 1;
    $b = 3;
    if ($a < $b) {
        echo "$a, $b, $a + $b";
    }
    else {
        echo "$a, $b, $a * $b";
    }
    ?>
    <h3>Задача 2</h3>
    <?php 
    $a = 30;
    $b = 60;
    if ($a + $b < 180 & $a + $b > 0) {
        echo "$a, $b, Такой треугольник существует ";
        if ($a + $b == 90) {
            echo 'Данный прямоугольник прямоугольный';
        }
    }
    else {
        echo "$a, $b, Такого треугольника несуществует";
    }
    ?>
    <h3>Задача 3</h3>
    <?php 
    $age = 0;
    if ($age > 0 & $age <= 1) {
        $ageGroup = 'Котята';
    }
    elseif ($age > 0 & $age <= 3) {
        $ageGroup = 'Молодые коты';
    }
    elseif ($age > 0 & $age <= 7) {
        $ageGroup = 'Коты средних лет';
    }
    elseif ($age > 0 & $age > 7) {
        $ageGroup = 'Почтенные коты';
    }
    else {
        $ageGroup = 'Такого возраста не существует';
    }
    echo "$age, $ageGroup";
    ?>
    <h3>Задача 4</h3>
    <?php 
    $a = 1;
    $b = 2;
    $c = 2;
    if ($a + $b > $c & $a + $c > $b & $b + $c > $a) {
        echo "$a, $b, $c, Такой треугольник существует";
    }
    else {
        echo "$a, $b, $c, Такого треугольника не существует";
    }
    ?>
    <h3>Задача 5</h3>
    <?php 
    $year = 2003;
    $num = $year % 100;
    if ($year % 100 != 0 & $num % 4 == 0 | $year % 100 == 0 & $year % 400 == 0) {
        echo "Этот год високостный $year";
    }
    else {
        echo "Этот год не високосный $year";
    }
    ?>
    <h3>Задача 6</h3>
    <?php 
    $a = 123;
    $b = 12346565;
    if ($a + $b > 32767) {
        echo 'Это сумма приведёт к переполнению';
    }
    else {
        echo $a + $b;
    }
    ?>
    <h3>Задача 7</h3>
    <?php 
    $a = 10;
    $b = 10;
    $x = 50;
    $y = 20;
    $z = 10;
    if ($a < $y & $z < $b) {
        echo 'Кирпич пройдёт через отверстие';
    }
    else {
        echo 'Кирпич не пройдёт через отверстие';
    }
    ?>
    <h3>Задача 8</h3>
    <?php 
    $day = 250;

    ?>
    <h3>Задача 9</h3>
    <?php 
    $number = 12;
    if ($number % 4 == 0 & $number % 6 == 0) {
        echo 'Данное число делится на 4 и 6';
    }
    else {
        echo 'Данное число не делится на 4 и 6';
    }
    ?>
    <h3>Задача 10</h3>

</body>
</html>