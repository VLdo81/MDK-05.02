<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Операции в PHP</h1>
    <h2>Арифметические операции</h2>
    <p>+ - * / ** %</p>
    <?php 
    $a = 33 % 22;
    echo $a;
    ?>
    <h2>Инкремент и Декремент</h2>
    <?php 
    $b = 2;
    $c = ++$b;
    echo "b = $b, c = $c";
    ?>
    <h2>Операции со строками</h2>
    <?php 
    $str1 = 'Hello, ';
    $str2 = 'PHP!';
    $str3 = 'Я учусь на ' . 2 . ' курсе';
    echo $str1 . $str2, '<br>', $str3;
    ?>
    <h2>Операции сравнения</h2>
    <p>< > <= >= == != === !==</p>
    <?php 
    $s = 4 == '4';
    $s1 = 4 === '4';
    echo $s;
    ?>
</body>
</html>