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
    $startNumber = 1;
    $multiplier = 2;
    $quantity = 0;
    echo "number = $startNumber, multiplier = $multiplier <br>";
    while ($quantity < 5) {
        $startNumber = $startNumber * ($multiplier ** $quantity);
        echo "$startNumber ";
        $quantity++;
    }
    echo "<br> quantity = $quantity";
    ?>
    <h2>Задача 2</h2>
    <?php 
    $lastNumber = 1;
    $sum = 0;
    while ($lastNumber <= 10) {
        $sum = $sum + $lastNumber;
        $lastNumber++;
        echo "$sum ";
    }
    $lastNumber = $lastNumber -1;
    echo "<br> last number = $lastNumber";
    ?>
    <h2>Задача 3</h2>
    <?php 
    $lastNumber = 2;
    $multiplicationResult = 1;
    while ($lastNumber <= 10) {
        $multiplicationResult = $multiplicationResult * $lastNumber;
        $lastNumber += 2;
        echo "$multiplicationResult ";
    }
    $lastNumber = $lastNumber -2;
    echo "<br> last number = $lastNumber";
    ?>
</body>
</html>