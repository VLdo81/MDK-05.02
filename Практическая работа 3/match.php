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
        $a = (int)$_GET["number"];
        echo match ($a) {
            0 => '0 - zero',
            1 => '1 - one',
            2 => '2 - two',
            3 => '3 - three',
            4 => '4 - four',
            5 => '5 - five',
            6 => '6 - six',
            7 => '7 - seven',
            8 => '8 - eight',
            9 => '9 - nine',
            default => ''
        };
    } else {
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
        $month = (int)$_GET["month"];
        echo match ($month) {
            1 => '1 января — Новый год, 7 января — Рождество Христово, 14 января — Старый Новый год, 19 января — Крещение Господне',
            2 => '14 февраля — День святого Валентина, 23 февраля — День защитника Отечества',
            3 => '8 марта — Международный женский день',
            4 => '1 апреля — День смеха, 12 апреля — День космонавтики',
            5 => '1 мая — Праздник Весны и Труда, 9 мая — День Победы',
            6 => '1 июня — Международный день защиты детей, 12 июня — День России',
            7 => '8 июля — День семьи, любви и верности',
            8 => '22 августа — День Государственного флага РФ',
            9 => '1 сентября — День знаний',
            10 => '5 октября — День учителя, 31 октября — Хэллоуин',
            11 => '4 ноября — День народного единства',
            12 => '12 декабря — День Конституции РФ, 31 декабря — Новогодняя ночь',
            default => ''
        };
    } else {
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
        echo match ($a) {
            0 => '0',
            5 => '5',
            1, 9 => '1',
            2, 8 => '4',
            3, 7 => '9',
            4, 6 => '6',
            default => ''
        };
    } else {
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
        $age = (int)$_GET['age'];
        echo match (true) {
            $age === 11 => "Мне 11 лет",
            $age === 12 => "Мне 12 лет",
            $age === 13 => "Мне 13 лет",
            $age === 14 => "Мне 14 лет",
            $age % 10 === 1 => "Мне $age год",
            in_array($age % 10, [2, 3, 4]) => "Мне $age года",
            in_array($age % 10, [5, 6, 7, 8, 9, 0]) => "Мне $age лет",
            default => ""
        };
    } else {
        echo "Данные не получены";
    }
    ?>

    <h2>Задача 5</h2>
    <form action="">
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
        $numb = (int)$_GET["numb"];
        $mass = $_GET["mass"];
        echo match ($numb) {
            1 => "$mass кг",
            2 => ($mass / 1000000) . " кг",
            3 => ($mass / 1000) . " кг",
            4 => ($mass * 1000) . " кг",
            5 => ($mass * 100) . " кг",
            default => ""
        };
    } else {
        echo "Данные не получены";
    }
    ?>
</body>
</html>
