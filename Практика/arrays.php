<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Массивы</H1>
    <h2>Создание пустого массива</h2>
    <?php 
    $numbers = [];
    ?>
    <h2>Создание массива</h2>
    <?php 
    $numbers = [12, 5, 67];
    ?>
    <h2>Вывод массива на экран</h2>
    <?php 
    var_dump($numbers);
    ?>
    <h2>Перебор массива</h2>
    <?php 
    for ($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i], ' ';
    }
    ?>
    <h2>Элементы массива</h2>
    <?php 
    echo $numbers[0];
    $numbers[2] = '$$$';
    echo $numbers[2];
    ?>
    <h2>Добавление элемента</h2>
    <?php 
    $numbers[] = 777;
    var_dump($numbers);
    ?>
</body>
</html>