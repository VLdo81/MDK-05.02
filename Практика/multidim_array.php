<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Многомерные массивы</h1>
    <h2>Объявление</h2>
    <?php 
    $animals = [['кот', 'собака'], ['голубь', 'синица', 'пингвин'], ['лосось', 'щука']];
    ?>
    <h2>Вывод на экран</h2>
    <?php 
    foreach ($animals as $group) {
        foreach ($group as $animal) {
            echo $animal . " ";
        }
        echo "<br>";
    }
    ?>
    <h2>Ассоциативные массивы</h2>
    <?php 
    $animals = ["Животные" => ['кот', 'собака'], "Птицы" => ['голубь', 'синица', 'пингвин'], "Рыбы" => ['лосось', 'щука']];
    foreach ($animals as $key => $group) {
        echo "<h3>$key</h3>";
        foreach ($group as $animal) {
            echo $animal . " ";
        }
    }
    ?>
    <h2>Обращение к элементу</h2>
    <?php 
    echo $animals['Птицы'][1];
    ?>
    <h2>Ещё пример</h2>
    <?php 
    $animals = ["Животные" => [["name" => 'кот', 'ability' => 'мяукает'], ['name' => 'собака', 'ability' => 'гавкает']], "Птицы" => [['name' => 'голубь', 'ability' => 'курлыкает'], ['name' => 'синица', 'ability' => 'летает'], ['name' => 'пингвин', 'ability' => 'плавает']], "Рыбы" => [['name' => 'лосось', 'ability' => 'вкусный'], ['name' => 'щука', 'ability' => 'исполняет желания']]];
    foreach ($animals as $key => $group) {
        echo "<h3>$key</h3>";
        foreach ($group as $animal) {
            echo $animal["name"] . " - " . $animal['ability'] . "<br>";
        }
    }
    ?>
</body>
</html>