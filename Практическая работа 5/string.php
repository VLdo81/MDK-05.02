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
    <form action="">
        <p>Введите строку:</p>
        <input name="str1">
        <input type="submit" value="Отправить">
    </form>
    <?php
    if(isset($_GET["str1"])) {
        $str = $_GET["str1"];
        function task1($str) {
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
        }
        task1($str);
    } 
    ?>
    <h2>Задание 2</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str2">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str2"])) {
        $str = $_GET["str2"];
        function task2($str) {
            $word = 0;
            $len = strlen($str);
            for ($i = 0; $i < $len; $i++) {
                if ($str[$i] == " " | $str[$i] == ".") {
                    $word += 1;
                }
            }
            echo $word;
        }
        task2($str);
    }
    ?>
    <h2>Задание 3</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str3">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str3"])) {
        $str = $_GET["str3"];
        function task3($str) {
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
        }
        task3($str);
    }
    ?>
    <h2>Задание 4</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str4">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str4"])) {
        $str = $_GET["str4"];
        function task4($str) {
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
        }
        task4($str);
    }
    ?>
    <h2>Задание 5</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str5">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str5"])) {
        $str = $_GET["str5"];
        function task5($str) {
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
        }
        task5($str);
    }
    ?>
    <h2>Задание 6</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str6">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str6"])) {
        $str = $_GET["str6"];
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
    }
    ?>
    <h2>Задание 7</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str7">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str7"])) {
        $str = $_GET["str7"];
        function task7($str) {
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
        }
        task7($str);
    }
    ?>
    <h2>Задание 8</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str8">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str8"])) {
        $str = $_GET["str8"];
        function task8($str) {
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
        }
        task8($str);
    }
    ?>
    <h2>Задание 9</h2>
    <form action="">
        <p>Введите строку:</p>
        <input name="str9">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["str9"])) {
        $str = $_GET["str9"];
        function task9($str) {
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
        }
        task9($str);
    }
    ?>
</body>
</html>