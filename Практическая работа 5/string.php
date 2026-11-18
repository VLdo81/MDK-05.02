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
        if ($str[$i] === ')') {
            break;
        }
        if ($inside == True) {
            $res .= $str[$i];
        }
        if ($str[$i] === '(') {
            $inside = true;
        }
    }
    echo $res;
    ?>
</body>
</html>