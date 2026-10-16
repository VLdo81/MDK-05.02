<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Условные конструкции</h1>
    <h2>Тернарный оператор</h2>
    <?php 
    $a = 42;
    $b = 243;
    $res = $a > $b ? $a**2 : $b**2;
    echo "Квадрат максимального числа $res";
    ?>
    <h2>Оператор match</h2>
    <?php 
    $c = "1";
    $res2 = match ((int)$c) {
        1 => 'c = 1',
        2 => 'c = 2',
        3 => 'c = 3',
        4 => 'c = 4',
        5 => 'c = 5',
        10 => 'c = 10',
    };
    echo $res2;
    ?>
</body>
</html>