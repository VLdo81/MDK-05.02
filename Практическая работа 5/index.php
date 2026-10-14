<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая работа 5</h1>
    <h2>Задача 1</h2>
    <?php 
    $a = 9;
    switch ($a) {
        case 0:
            echo '0 - zero';
            break;
        case 1:
            echo '1 - one';
            break;
        case 2:
            echo '2 - two';
            break;
        case 3:
            echo '3 - three';
            break;
        case 4:
            echo '4 - four';
            break;
        case 5:
            echo '5 - five';
            break;
        case 6:
            echo '6 - six';
            break;
        case 7:
            echo '7 - seven';
            break;
        case 8:
            echo '8 - eight';
            break;
        case 9:
            echo '9 - nine';
            break;
    }
    ?>
    <h2>Задача 2</h2>
    <?php 
    $month = 1;
    switch ($month) {
        case 1:
            echo '1 января — Новый год, 7 января — Рождество Христово, 14 января — Старый Новый год, 19 января — Крещение Господне';
            break;
        case 2:
            echo '14 февраля — День святого Валентина, 23 февраля — День защитника Отечества';
            break;
        case 3:
            echo '8 марта — Международный женский день';
            break;
        case 4:
            echo '1 апреля — День смеха, 12 апреля — День космонавтики';
            break;
        case 5:
            echo '1 мая — Праздник Весны и Труда, 9 мая — День Победы';
            break;
        case 6:
            echo '1 июня — Международный день защиты детей, 12 июня — День России';
            break;
        case 7:
            echo '8 июля — День семьи, любви и верности';
            break;
        case 8:
            echo '22 августа — День Государственного флага РФ';
            break;
        case 9:
            echo '1 сентября — День знаний';
            break;
        case 10:
            echo '5 октября — День учителя, 31 октября — Хэллоуин';
            break;
        case 11:
            echo '4 ноября — День народного единства';
            break;
        case 12:
            echo '12 декабря — День Конституции РФ, 31 декабря — Новогодняя ночь';
            break;
    }
    ?>
    <h2>Задача 3</h2>
    <?php 
    $number = 1234;
    $a = $number % 10;
    switch ($a) {
        case 0:
            echo '0';
            break;
        case 5:
            echo '5';
            break;
        case 1 & 9:
            echo '1';
            break;
        case 2 & 8:
            echo '4';
            break;
        case 3 & 7:
            echo '9';
            break;
        case 4 & 6:
            echo '6';
            break;
    }
    ?>
    <h2>Задача 4</h2>
    <?php 
    
    ?>
</body>
</html>