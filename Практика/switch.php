<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Оператор выбора - switch</h1>
    <form action="">
        <p>Введите число:</p>
        <input name="number">
        <input type="submit" value="Отправить">
    </form>
    <?php 
    if (isset($_GET["number"])) {
        $a = $_GET["number"];
        switch ($a) {
            case 1:
                echo 'a = 1';
                break;
            case 2:
                echo 'a = 2';
                break;
            case 5:
                echo 'a = 5';
                break;
            case 10:
                echo 'a = 10';
                break;
            case 15:
                echo 'a = 15';
                break;
            default:
                echo 'Число не нашлось';
        }
    } 
    else {
        echo 'Данные не получены';
    }
    ?>
</body>
</html>