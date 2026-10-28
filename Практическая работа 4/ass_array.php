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
    $days = ['monday' => 'понедельник', 'tuesday' => 'вторник', 'wednesday' => 'среда', 'thursday' => 'четверг', 'friday' => 'пятница', 'saturday' => 'суббота', 'sunday' => 'воскресенье', 'week' => 'неделя', 'weekdays' => 'будние дни', 'weekend' => 'выходные'];
    foreach ($days as $key => $value) {
        echo "$key - $value <br>";
    }
    ?>
    <h2>Задание 2</h2>
    <?php 
    $word = "неделя";
    $found = false;
    foreach($days as $key => $value) {
        if (str_contains($value, $word)) {
            echo "$word - $key";
            $found = true;
            break;
        }
    }
    if ($found == false) {
        echo "$word - В словаре нет такого слова";
    }
    ?>
    <h2>Задание 3</h2>
    <?php 
    $word = "week";
    $found = false;
    foreach($days as $key => $value) {
        if (str_contains($value, $word)) {
            echo "$word - $key";
            $found = true;
            break;
        }
        elseif (str_contains($key, $word)) {
            echo "$word - $value";
            $found = true;
            break;
        }
    }
    if ($found == false) {
        echo "$word - В словаре нет такого слова";
    }
    ?>
    <h2>Задание 4</h2>
     <form action="">
        <p>Введите слово:</p>
        <input name="wrd">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["wrd"])) {
        $word = $_GET['wrd'];
        $found = false;
        foreach($days as $key => $value) {
            if (str_contains($value, $word)) {
                echo "$word - $key";
                $found = true;
                break;
            }
            elseif (str_contains($key, $word)) {
                echo "$word - $value";
                $found = true;
                break;
            }
        }
        if ($found == false) {
            echo "$word - В словаре нет такого слова";
        }
    }
    ?>
    <h2>Задание 5</h2>
    <form action="">
        <p>Введите слово:</p>
        <input name="w">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET['w'])) {
        $word = $_GET['w'];
        $letters = mb_str_split($word);
        $res = [];
        foreach ($letters as $letter) {
            if (isset($res[$letter])) {
                $res[$letter]++;
            }
            else {
                $res[$letter] = 1;
            }
        }
        foreach ($res as $key => $value) {
        echo "$key - $value <br>";
    }
    }
    ?>
    <h2>Задание 6</h2>
    <?php 
    $days = ['monday' => 'понедельник', 'tuesday' => 'вторник', 'wednesday' => 'среда', 'thursday' => 'четверг', 'friday' => 'пятница', 'saturday' => 'суббота', 'sunday' => 'воскресенье', 'week' => 'неделя', 'weekdays' => 'будние дни', 'weekend' => 'выходные'];
    $new = [];
    foreach ($days as $key => $value) {
        $new[$value] = $key;
    }
    foreach ($new as $key => $value) {
        echo "$key - $value <br>";
    }
    ?>
    <h2>Задание 7</h2>
    <?php 
    $words = ['потолок', 'кошка', 'семь', 'семячко', 'пол', 'реле'];
    $res = [];
    foreach ($words as $word) {
        $len = mb_strlen($word);
        if (!isset($res[$len])) {
            $res[$len] = $word;
        }
        else {
            $res[$len] .= " " . $word;
        }
    }
    foreach ($res as $key => $value) {
        echo "$key - $value <br>";
    }
    ?>
</body>
</html>