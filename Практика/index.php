<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Данных в PHP</h1>
    <h2>Целые числа - int</h2>
    <?php
    $number = 0x354F2C;
    echo $number;
    ?>
    <h2>Числа с плавающей точкой - float</h2>
    <?php
    $a = -42.5;
    $b = 42.;
    $c = 1.5e5;
    $d = 2.4E-3;
    echo "$a, $b, $c, $d";
    ?>
    <h2>Строки - string</h2>
    <?php 
    $str = 'Я изучаю php';
    $str1 = "Переменная а = $a";
    echo $str, '<br>', $str1;
    ?>
</body>
</html>