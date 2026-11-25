<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Стандартные функции для строк</h1>
    <h2>Получение длины strlen</h2>
    <?php 
    $str = 'Hello world!';
    $strR = 'Привет мир!';
    echo "Длина str " . strlen($str) . " символов <br>";
    echo "Длина str " . mb_strlen($strR) . " символов <br>";
    ?>
    <h2>Поиск подстроки strpos</h2>
    <?php 
    $pos = strpos($str, 'world');
    echo $pos . "<br>";
    $pos = mb_strpos($strR, 'мир');
    echo $pos;
    ?>
    <h2>Изменение регистра strtolower</h2>
    <?php 
    $strLow = strtolower($str);
    echo $strLow;
    ?>
    <h2>Перевод в массив explode</h2>
    <?php 
    $str1 = 'Работа со строками';
    $words = explode(" ", $str1);
    var_dump($words);
    ?>
    <h2>Перевод массива в строку implode</h2>
    <?php 
    $str2
    ?>
</body>
</html>