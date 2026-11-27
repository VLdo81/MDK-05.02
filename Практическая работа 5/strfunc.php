<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая работа 5</h1>
    <h2>Задание 1</h2>
    <?php 
    $str = "Пример (текста внутри) скобок";
    $start = strpos($str, '(');
    $end = strpos($str, ')');
    echo substr($str, $start + 1, $end - $start - 1);
    ?>
    <h2>Задание 2</h2>
    <?php 
    $str = "Это строка, которая заканчивается точкой.";
    $cleanStr = rtrim($str, '.');
    $words = array_filter(explode(' ', $cleanStr));
    echo count($words);
    ?>
    <h2>Задание 3</h2>
    <?php 
    $str = "шалаш окно потоп река заказ";
    $words = explode(' ', $str);
    foreach ($words as $word) {
        if ($word != '' & mb_substr($word, 0, 1) == mb_substr($word, -1)) {
            echo $word . " ";
        }
    }
    ?>
    <h2>Задание 4</h2>
    <?php 
    $str = "программирование";
    $chars = array_unique(mb_str_split($str));
    echo "Количество: " . count($chars) . "<br>";
    echo "Символы: " . implode(', ', $chars);
    ?>
    <h2>Задание 5</h2>
    <?php 
    $str = "rocket track test";
    $r = substr_count($str, 'r');
    $k = substr_count($str, 'k');
    $t = substr_count($str, 't');
    echo "r: $r, k: $k, t: $t, всего: " . ($r + $k + $t);
    ?>
    <h2>Задание 6</h2>
    <?php 
    $str = "Текст с разными по длине словами";
    $words = array_filter(explode(' ', $str));
    $lengths = array_map('mb_strlen', $words);
    echo "Мин: " . min($lengths) . ", Макс: " . max($lengths);
    ?>
    <h2>Задание 7</h2>
    <?php 
    $str = "банаааан и ааааабрикос";
    $parts = preg_split("/[^а]+/u", $str);
    $lengths = array_map('mb_strlen', $parts);
    echo max($lengths);
    ?>
    <h2>Задание 8</h2>
    <?php 
    $str = "Текст (который нужно удалить) остается здесь";
    $start = strpos($str, '(');
    $end = strpos($str, ')');
    echo substr_replace($str, '', $start, $end - $start + 1);
    ?>
    <h2>Задание 9</h2>
    <?php 
    $letters = ['к', 'о', 'т', 'а', 'р', 'м'];
    $word = "комар";

    $available = array_count_values($letters);
    $needed = array_count_values(mb_str_split($word));
    $possible = true;
    foreach ($needed as $char => $count) {
        if (($available[$char] ?? 0) < $count) {
            $possible = false;
            break;
        }
    }
    echo $possible ? "Можно составить" : "Нельзя составить";
    ?>
</body>
</html>