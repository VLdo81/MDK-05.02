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
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            echo $i . " * " . $j . " = " . ($i * $j) . " | ";
        }
        echo "<br>";
    }
    ?>

    <h2>Задача 2</h2>
    <?php
    $a = 4;
    $b = 3;
    for ($i = 0; $i < $b; $i++) {
        for ($j = 0; $j < $a; $j++) {
            echo "X";
        }
        echo "<br>";
    }
    ?>

    <h2>Задача 3</h2>
    <table border="1" cellpadding="5">
    <?php
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

    <h2>Задача 4</h2>
    <table border="1" cellpadding="5">
    <?php
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 9; $j++) {
            $num = $i * 10 + $j;
            echo "<td>" . ($num * $num) . "</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

    <h2>Задача 5</h2>
    <?php
    $a = 6;
    $b = 4;
    for ($i = 0; $i < $b; $i++) {
        for ($j = 0; $j < $a; $j++) {
            if ($i == 0 || $i == $b - 1 || $j == 0 || $j == $a - 1) {
                echo "X";
            } else {
                echo "O";
            }
        }
        echo "<br>";
    }
    ?>

    <h2>Задача 6</h2>
    <?php
    $n = 24;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= 1; $j++) {
            if ($n % $i == 0) {
                echo $i . " ";
            }
        }
    }
    ?>

    <h2>Задача 7</h2>
    <?php
    $k_num = 345;
    $prod = 1;
    for (; $k_num > 0; ) {
        for ($j = 0; $j < 1; $j++) {
            $digit = $k_num % 10;
            $prod *= $digit;
            $k_num = (int)($k_num / 10);
        }
    }
    echo $prod;
    ?>
</body>
</html>