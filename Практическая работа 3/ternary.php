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
    $a = 42;
    $b = 67;
    $res = $a < $b ? $a + $b : $a * $b;
    echo $res;
    ?>
    <h2>Задача 2</h2>
    <form action="">
        <p>Введите число:</p>
        <input name="number">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["number"])) {
        $num = $_GET["number"];
        $y = $num % 2 == 0 ? 'чётное' : 'нечётное';
        echo $y;
    }
    ?>
    <h2>Задача 3</h2>
    <form action="">
        <p>Введите сумму покупки:</p>
        <input name="sum">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["sum"])) {
        $sum = $_GET['sum'];
        $discount = $sum > 1000 ? 0.1 : 0.05;
        $sum -= ($sum * $discount);
        echo $sum;
    }
    ?>
    <h2>Задача 4</h2>
    <?php 
    $a = 3;
    $b = 5;
    $c = 7;
    $triangle = $a + $b > $c & $a + $c > $b & $b + $c > $a ? 'Такой треугольник существует' : 'Такой треугольник не существует';
    echo $triangle;
    ?>
    <h2>Задача 5</h2>
    <form action="">
        <p>Введите возраст кота:</p>
        <input name="age">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        $ageGroup = $age <= 1 & $age > 0 ? 'Котята' : ($age > 1 & $age <= 3 ? 'Молодые коты' : ($age > 3 & $age <= 7 ? 'Коты средних лет' : ($age > 7 ? 'Почтенные коты' : 'Нет такого возраста')));
        echo $ageGroup;
    }
    ?>
    <h2>Задача 6</h2>
    <?php 
    $a = 60;
    $b = 30;
    $tr = $a + $b < 190 & $a + $b > 0 ? ("Такой треугольник существует" . ($a + $b == 90 ? ' и он прямоугольный' : '')) : 'Такого треугольника не сущестует';
    echo $tr;
    ?>
</body>
</html>