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
    <form action="">
        <p>Введите число:</p>
        <input name="number">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["number"])) {
        $a = $_GET["number"];
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
    }
    else {
        echo 'Данные не получены';
    }
    ?>
    <h2>Задача 2</h2>
    <form action="">
        <p>Введите номер месяца:</p>
        <input name="month">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET['month'])) {
        $month = $_GET["month"];
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
    }
    else {
        echo 'Данные не получены';
    }
    ?>
    <h2>Задача 3</h2>
    <form action="">
        <p>Введите число:</p>
        <input name="num">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET['num'])) {
        $number = $_GET['num'];
        $a = $number % 10;
        switch ($a) {
            case 0:
                echo '0';
                break;
            case 5:
                echo '5';
                break;
            case 1 || 9:
                echo '1';
                break;
            case 2 || 8:
                echo '4';
                break;
            case 3 || 7:
                echo '9';
                break;
            case 4 || 6:
                echo '6';
                break;
        }
    }
    else {
        echo 'Данные не получены';
    }
    ?>
    <h2>Задача 4</h2>
    <form action="">
        <p>Введите свой возраст:</p>
        <input name="age">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        switch ($age) {
            case 11:
                echo "Мне 11 лет";
                break;
            case 12:
                echo "Мне 12 лет";
                break;
            case 13:
                echo "Мне 13 лет";
                break;
            case 14:
                echo "Мне 14 лет";
                break;
            case $age % 10 == 1:
                echo "Мне $age год";
                break;
            case $age % 10 == (2 || 3 || 4):
                echo "Мне $age года";
                break;
            case $age % 10 == (5 || 6 || 7 || 8 || 9 || 0):
                echo "Мне $age лет";
                break;
        }
    }
    else {
        echo "Данные не получены";
    }
    ?>
    <h2>Задача 5</h2>
    <form action=""></form>
        <select name="numb" id="numb" required>
            <option value="1" <?= (isset($_GET['numb']) && $_GET['numb'] == '1') ? 'selected' : '' ?>>1 — килограмм</option>
            <option value="2" <?= (isset($_GET['numb']) && $_GET['numb'] == '2') ? 'selected' : '' ?>>2 — миллиграмм</option>
            <option value="3" <?= (isset($_GET['numb']) && $_GET['numb'] == '3') ? 'selected' : '' ?>>3 — грамм</option>
            <option value="4" <?= (isset($_GET['numb']) && $_GET['numb'] == '4') ? 'selected' : '' ?>>4 — тонна</option>
            <option value="5" <?= (isset($_GET['numb']) && $_GET['numb'] == '5') ? 'selected' : '' ?>>5 — центнер</option>
        </select>
        <p>Введите массу:</p>
        <input name="mass">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["numb"]) && isset($_GET["mass"])) {
        $numb = $_GET["numb"];
        $mass = $_GET["mass"];
        switch ($numb) {
            case 1:
                echo "$mass кг";
                break;
            case 2:
                $mass /= 1000000;
                echo "$mass кг";
                break;
            case 3:
                $mass *= 1000;
                echo "$mass кг";
                break;
            case 4:
                $mass *= 1000;
                echo "$mass кг";
                break;
            case 5:
                $mass *= 100;
                echo "$mass кг";
                break;
        }
    }
    else {
        echo "Данные не получены";
    }
    ?>
</body>
</html>