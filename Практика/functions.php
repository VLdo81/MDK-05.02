<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Функции</h1>
    <h2>Определение функции и её вызов</h2>
    <?php 
    sayHello();
    function sayHello()
    {
        echo '<p>Привет!</p>';
    }
    sayHello();
    sayHello();
    ?>
    <h2>Передача параметров в функцию</h2>
    <?php 
    function sayHello1($name)
    {
        echo "<p>Привет, $name!</p>";
    }
    sayHello1("Вася");
    sayHello1("Петя");
    ?>
    <?php 
    function printFullName($name, $lastname)
    {
        echo "$name, $lastname";
    }
    printFullName('Иван', 'Иванов');
    ?>
    <h2>Функции с параметрами по умолчанию</h2>
    <?php 
    function printUserInfo($name, $lastname, $role = 'user')
    {
        echo "<p>$name, $lastname, роль - $role</p>";
    }
    printUserInfo('Ваня', 'Кузнецов', 'студент');
    printUserInfo('Вася', 'Петров');
    ?>
    <h2>Возвращаемое значение</h2>
    <?php 
    function getUserInfo($name, $lastname, $role = 'user')
    {
        return "<p>$name, $lastname, роль - $role</p>";
    }
    echo getUserInfo('Маша', 'Иванова');
    ?>
</body>
</html>