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
    <h2>Задача 4</h2>
    <?php 
    $n = 10;
    $days = 1;
    while ($days < 10) {
        $n = $n + ($n * 0.1);
        $days++;
        echo "$n ";
    }
    echo "<br> days = $days";
    ?>
    <h2>Задача 5</h2>
    <?php 
     $TotalLegs = 64;
     $rabbitLegs = 4;
     $gooseLegs = 2;
     for ($rabbits = 0; $rabbits <= ($TotalLegs / $rabbitLegs); $rabbits++) {
        $remainLegs = $TotalLegs - ($rabbits * $rabbitLegs);
        $geese = $remainLegs / $gooseLegs;
     }
     echo "Кроликов: $rabbits, Гусей: $geese";
    ?>
    <h2>Задача 6</h2>
    <?php 
    $hour = 0;
    $ameba = 1;
    while ($hour < 24) {
        $ameba = $ameba * 2;
        $hour += 3;
        echo "$ameba ";
    }
    echo "<br> Часы: $hour";
    ?>
</body>
</html>