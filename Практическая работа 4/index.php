<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая работа 4</h1>
    <h2>Задача 1</h2>
    <?php 
    for ($i = 1; $i < 11; $i++) {
        for ($j = 1; $j < 11; $j++) {
            $y = $i * $j;
            echo "$y ";
        }
        echo '<br>';
    }
    ?>
    <h2>Задача 2</h2>
    <?php 
    for ($a = 1; $a < 4; $a++) {
        for ($b = 1; $b < 4; $b++) {
            echo "X";
        }
        echo '<br>';
    }
    $a -= 1;
    $b -= 1;
    echo "a = $a, b = $b"
    ?>
    <h2>Задача 3</h2>
    <table>
        <?php 
        for ($i = 1; $i < 11; $i++) {
            echo '<tr>';
            for ($j = 1; $j < 11; $j++) {
                $y = $i * $j;
                echo "<td>$y</td>";
            }
            echo '<tr>';
    }
        ?>
    </table>
    <h2>Задача 4</h2>
    <table>
        <?php 
        for ($i = 1; $i < 10; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 10; $j++) {
                $y = (($i * 10) + $j) ** 2;
                echo "<td>$y</td>";
            }
            echo '<tr>';
    }
        ?>
    </table>
    <h2>Задача 5</h2>
    <?php 
    $a = 5;
    $b = 3;
    for ($i = 0; $i < $a; $i++) {
        for ($j = 1; $j < $b; $j++) {
            if ($i == 1 || $i == $a || $j == 1 || $j == $b) {
                echo '#';
            }
            else {
                echo '.';
            }
        }
        echo '\n'; 
    }
    ?>
</body>
</html>