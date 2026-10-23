<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая работа</title>
</head>
<body>
    <h1>Формула 1</h1>
    <?php 
    $a = 3;
    $b = 4;
    $c = 5;
    $d = 6;
    $res1 = ($a / $c)*($b / $d) - (($a*$b - $c) / ($c*$d));
    echo "a = $a, b = $b, c = $c, d = $d, result = $res1";
    ?>
    <h1>Формула 2</h1>
    <?php 
    $x = 2;
    $y = 4;
    $res2 = ($x+$y)/($y+1)-($x*$y-12)/(13+$x);
    echo "x = $x, y = $y, result = $res2";
    ?>
    <h1>Формула 3</h1>
    <?php 
    $x = 3;
    $y = 6;
    $res3 = (($x+1)/($x-1))**$x + 18*$x*$y**2;
    echo "x = $x, y = $y, result = $res3";
    ?>
    <h1>Формула 4</h1>
    <?php 
    $x = 3;
    $y = 6;
    $res4 = (1+(1/($x**2))**$x) - 12*($x**2)*$y;
    echo "x = $x, y = $y, result = $res4";
    ?>
</body>
</html>