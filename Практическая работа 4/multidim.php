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
    $nums = [[1, 2, 3], [4, 5, 6], [7, 8, 9], [10, 11, 12]];
    echo "<table>";
    foreach ($nums as $group) {
        echo "<tr>";
        foreach ($group as $num) {
            echo "<td>$num </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <h2>Задание 2</h2>
    <?php 
    $numbers = [[10, 11, 12, 13, 14, 15, 16, 17, 18, 19], [20, 21, 22, 23, 24, 25, 26, 27, 28, 29], [30, 31, 32, 33, 34, 35, 36, 37, 38, 39], [40, 41, 42, 43, 44, 45, 46, 47, 48, 49], [50, 51, 52, 53, 54, 55, 56, 57, 58, 59], [60, 61, 62, 63, 64, 65, 66, 67, 68, 69], [70, 71, 72, 73, 74, 75, 76, 77, 78, 79], [80, 81, 82, 83, 84, 85, 86, 87, 88, 89], [90, 91, 92, 93, 94, 95, 96, 97, 98, 99]];
    echo "<table>";
    foreach ($numbers as $group) {
        echo "<tr>";
        foreach ($group as $number) {
            $number **= 2;
            echo "<td>$number</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <h2>Задание 3</h2>
    <?php 
    $nms = [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15], [16, 17, 18, 19, 20]];
    $max = $nms[0][0];
    $min = $nms[0][0];
    $maxg = 0;
    $maxv = 0;
    $ming = 0;
    $minv = 0;
    foreach ($nms as $key => $group) {
        foreach ($group as $key1 => $nm) {
            if ($nm > $max) {
                $max = $nm;
                $maxg = $key;
                $maxv = $key1;
            }
            if ($nm < $min) {
                $min = $nm;
                $ming = $key;
                $minv = $key1;
            }
        }
    }
    echo "Максимум = $key, $key1 - $max <br> Минимум = $key, $key1 - $min";
    ?>
    <h2>Задание 4</h2>
    <?php 
    $num = 10;
    $grid = [];
    foreach (range(0, $num - 1) as $i) {
        foreach (range(0, $num - 1) as $j) {
            $grid[$i][$j] = abs($i - $j);
        }
    }
    foreach ($grid as $row) {
        foreach ($row as $val) {
            echo $val . " ";
        }
        echo "<br>";
    }
    ?>
    <h2>Задание 5</h2>
    <?php 
    $shop = ["Обувь" => ["Nike" => "Кроссовки Air Max", "Adidas" => "Кеды Superstar"], "Одежда" => ["Puma" => "Спортивный костюм", "Under Armour" => "Футболка", "Reebok" => "Худи"], "Инвентарь" => [], "Аксессуары" => ["Spalding" => "Баскетбольный мяч"]];
    foreach ($shop as $category => $products) {
        echo "Категория: " . $category . "<br>";
        if ($products == []) {
            echo "Здесь пока нет товаров <br>";
        }
        else {
            foreach ($products as $brand => $name) {
                echo "- " . $brand . " " . $name . "<br>";
            }
        }
    }
    ?>
    <h2>Задание 6</h2>
    <?php 
    $shop = ["Обувь" => ["Nike" => "Кроссовки Air Max", "Adidas" => "Кеды Superstar"], "Одежда" => ["Puma" => "Спортивный костюм", "Under Armour" => "Футболка", "Reebok" => "Худи"], "Инвентарь" => [], "Аксессуары" => ["Spalding" => "Баскетбольный мяч"]];
    $newcat = "Продукты";
    $shop[$newcat] = [];
    foreach ($shop as $category => $products) {
        echo "Категория: " . $category . "<br>";
        if ($products == []) {
            echo "Здесь пока нет товаров <br>";
        }
        else {
            foreach ($products as $brand => $name) {
                echo "- " . $brand . " " . $name . "<br>";
            }
        }
    }
    ?>
    <h2>Задание 7</h2>
    <?php 
    $newprod = ["Optimum Nutrition" => "Протеин Whey", "BioTech" => "BCAA"];
    foreach ($newprod as $brand => $name) {
        $shop[$newcat][$brand] = $name;
    }
    foreach ($shop as $category => $products) {
        echo "Категория: " . $category . "<br>";
        if ($products == []) {
            echo "Здесь пока нет товаров <br>";
        }
        else {
            foreach ($products as $brand => $name) {
                echo "- " . $brand . " " . $name . "<br>";
            }
        }
    }
    ?>
    <h2>Задание 8</h2>
    <?php 
    $inputcat = "Одежда";
    $inputprod = ["Asics" => "Ветровка", "Nike" => "Шорты беговые"];
    if (isset($shop[$inputcat])) {
        foreach ($inputprod as $brand => $name) {
            $shop[$inputcat][$brand] = $name;
        }
    }
    else {
        $shop[$inputcat] = $inputprod;
    }
    foreach ($shop as $category => $products) {
        echo "Категория: " . $category . "<br>";
        if ($products == []) {
            echo "Здесь пока нет товаров <br>";
        }
        else {
            foreach ($products as $brand => $name) {
                echo "- " . $brand . " " . $name . "<br>";
            }
        }
    }
    ?>
</body>
</html>