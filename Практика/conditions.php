<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Условия if</h1>
    <?php 
    $a = 25;
    if ($a < 10) {
        echo 'а меньше 10';
    }
    elseif ($a < 20) {
        echo 'а больше 10 и меньше 20';
    }
    elseif ($a < 30) {
        echo 'а больше 20 и меньше 30';
    }
    else {
        echo 'а больше 30';
    }
    ?>
</body>
</html>