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
    $str = "hello, my name is (Gustav)";
    $len = strlen($str);
    $inside = false;
    $res = '';
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == ')') {
            break;
        }
        if ($inside == True) {
            $res .= $str[$i];
        }
        if ($str[$i] == '(') {
            $inside = true;
        }
    }
    echo $res;
    ?>
    <h2>Задание 2</h2>
    <?php 
    $str = "Oh hello there.";
    $word = 0;
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == " " | $str[$i] == ".") {
            $word += 1;
        }
    }
    echo $word;
    ?>
    <h2>Задание 3</h2>
    <?php 
    $str = "did you make tart";
    $len = strlen($str);
    $words = "";
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] != ' ' && $str[$i] != '.' && $str[$i] != ',') {
            $words .= $str[$i];
        } 
        else {
            if ($words != '') {
                $wLen = strlen($words);
                if ($words[0] == $words[$wLen - 1]) {
                    echo $words . ' ';
                }
                $words = '';
            }
        }
    }
    if ($words != '') {
        $wLen = strlen($words);
        if ($words[0] == $words[$wLen - 1]) {
            echo $words;
        }
    }
    ?>
    <h2>Задание 4</h2>
    <?php 
    $str = 'abracadabra';
    $len = strlen($str);
    $unique = [];
    for ($i = 0; $i < $len; $i++) {
        $found = false;
        for ($j = 0; $j < count($unique); $j++) {
            if ($unique[$j] == $str[$i]) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $unique[] = $str[$i];
        }
    }
    echo count($unique) . "<br>";
    foreach ($unique as $symbol) {
        echo $symbol . " ";
    }
    ?>
    <h2>Задание 5</h2>
    <?php 
    $str = "railway from saint-petersburg to krakow";
    $len = strlen($str);
    $r = 0;
    $t = 0;
    $k = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == "r") {
            $r++;
        }
         if ($str[$i] == "t") {
            $t++;
        }
         if ($str[$i] == "k") {
            $k++;
        }
    }
    echo "r = $r, t = $t, k = $k";
    ?>
    <h2>Задание 6</h2>
    <?php 
    $str = "What are you doing in my swamp?";
    function delspc($string) {
        $len = strlen($string);
        $result = "";
        for ($i = 0; $i < $len; $i++) {
            if ($string[$i] != " ") {
                $result .= $string[$i];
            }
        }
        echo $result;
    }
    delspc($str);
    ?>
    <h2>Задание 7</h2>
    <?php 
    $str = 'Find the shortest and longest word';
    $len = strlen($str);
    $min = 0;
    $max = 0;
    $cur = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] != ' ' & $str[$i] != '.' & $str[$i] != ',') {
            $cur++;
        } 
        else {
            if ($cur > 0) {
                if ($min == 0 | $cur < $min) $min = $cur;
                if ($cur > $max) $max = $cur;
                $cur = 0;
            }
        }
    }
    if ($cur > 0) {
        if ($min == 0 | $cur < $min) $min = $cur;
        if ($cur > $max) $max = $cur;
    }
    if ($min == 0) {
        $min = 0;
    }
    echo "Min: $min, Max: $max";
    ?>
    <h2>Задание 8</h2>
    <?php 
    $str = 'baaaabaaabaaaaaab';
    $len = strlen($str);
    $max = 0;
    $cur = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == 'a') {
            $cur++;
            if ($cur > $max) {
                $max = $cur;
            }
        } 
        else {
            $cur = 0;
        }
    }
    echo $max;
    ?>
    <h2>Задание 9</h2>
    <?php 
    $str = 'Delete (this part) please';
    $len = strlen($str);
    $res = '';
    $inside = false;
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == '(') {
            $inside = true;
            continue;
        }
        if ($str[$i] == ')') {
            $inside = false;
            continue;
        }
        if (!$inside) {
            $res .= $str[$i];
        }
    }
    echo $res;
    ?>
</body>
</html>