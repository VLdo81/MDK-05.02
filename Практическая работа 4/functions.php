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
    function getMaxDivisor($number) 
    {
        $number = abs((int)$number);
        if ($number <= 1) {
            return null;
        }
        for ($i = (int)($number / 2); $i >= 1; $i--) {
            if ($number % $i === 0) {
                return $i;
            }
        }
        return 1;
    }
    echo getMaxDivisor(24);
    ?>
    <h2>Задание 4</h2>
    <?php 
    function getAllDivisors($number) 
    {
        $number = abs((int)$number);
        $divisors = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i === 0) {
                $divisors[] = $i;
            }
        }
        return $divisors;
    }
    $a = getAllDivisors(34);
    foreach($a as $value) {
        echo $value . " ";
    }
    ?>
    <h2>Задание 5</h2>
    <?php 
    function sumOfSquares(array $nums) 
    {
        $sum = 0;
        foreach ($nums as $num) {
            $sum += $num ** 2;
        }
        return $sum;
    }
    echo sumOfSquares([1, 2, 3, 34, 67, 101]);
    ?>
    <h2>Задание 6</h2>
    <?php 
    function convertToString(array $data) 
    {
        $result = [];
        foreach ($data as $item) {
            if (is_array($item)) {
                $result[] = 'array';
            } else {
                $result[] = (string)$item;
            }
        }
        return implode(', ', $result);
    }
    echo convertToString(['apple', 42, [1, 2, 3], 'banana']);
    ?>
    <h2>Задание 7</h2>
    <?php 
    function getTotalLength(string ...$strings) 
    {
        $totalLength = 0;
        foreach ($strings as $str) {
            $totalLength += mb_strlen($str);
        }
        return $totalLength;
    }
    echo getTotalLength('Привет', 'мир', 'PHP');
    ?>
    <h2>Задание 8</h2>
    <?php 
    function convToString(array $data) {
        $result = [];
        foreach ($data as $item) {
            if (is_array($item)) {
                $result[] = '[' . convToString($item) . ']';
            } else {
                $result[] = (string)$item;
            }
        }
        return implode(', ', $result);
    }

    echo convToString(['apple', 42, [1, 2, ['a', 'b']], 'banana']);
    ?>
</body>
</html>