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
</body>
</html>