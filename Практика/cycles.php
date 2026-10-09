<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Циклический алгоритм</h1>
    <h2>Цикл с предусловием - while (пока)</h2>
    <?php 
    $n = 0;
    while ($n < 10) {
        echo $n;
        $n++;
    }
    ?>
    <h2>Цикл с постусловием - do..while (делать пока)</h2>
    <?php 
    $n = 0;
    do {
        echo $n;
        $n++;
    } while ($n < 10);
    ?>
    <h2>Цикл с параметром - for (для)</h2>
    <?php 
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    ?>
    <h2>Вложенные циклы</h2>
    <?php 
    for($i = 0; $i < 5; $i++) {
        for($j = 0; $j < 10; $j++) {
            echo 'Q';
        }
        echo '<br>';
    }
    ?>
    <h2>break и continue</h2>
    <p>break - прерывает цикл и выходит за его предел</p>
    <p>continue - прерывает текущую итерацию и переходит к проверке условия</p>
</body>
</html>