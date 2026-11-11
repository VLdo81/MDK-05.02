<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая работа 4</h1>
    <h2>Задание 1</h2>
    <?php 
    function lenghtCircle($radius)
    {
        return $radius * 2 * 3.14;
    }
    echo "Длина круга: " . lenghtCircle(4);
    ?>
    <h2>Задание 2</h2>
    <?php 
    function squareTriangle($a, $b, $c)
    {
        if ($a + $b > $c & $a + $c > $b & $b + $c > $a) {
            $p = ($a + $b + $c) / 2;
            $square = sqrt($p*($p - $a)*($p - $b)*($p-$c));
            return $square;
        }
        else {
            return 0;
        }
    }
    echo "Площадь треугольника равна " . squareTriangle(1, 2, 3);
    ?>
    <h2>Задание 3</h2>
    <?php 
    
    ?>
</body>
</html>