<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ассоциативные массивы</h1>
    <h2>Создание массива</h2>
    <?php 
    $numbers = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
    ?>
    <h2>Вывод на экран</h2>
    <?php 
    foreach ($numbers as $number) {
        echo $number, " ";
    }
    ?>
    <h2>Обращение к элементам</h2>
    <?php 
    echo $numbers['two'];
    $numbers['two'] = '2';
    ?>
    <h2>Добавление элемента (создание)</h2>
    <?php 
    $numbers['seven'] = 7;
    $numbers[] = 8;
    $numbers[6] = 6;
    $numbers[] = 22;
    ?>
    <h2>Вывод вместе с ключами</h2>
    <?php 
    foreach ($numbers as $key => $value) {
        echo "$key - $value <br>";
    }
    ?>
    <h2>Строка</h2>
    <?php 
    $str = 'привет';
    echo $str[3], '<br>';
    $str[3] = 'w';
    $len = strlen($str);
    echo "Длина строки $str - $len символов";
    ?>
</body>
</html>