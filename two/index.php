<?
// создать массив / вывести чётные нечётные / макс мин / сорт. по возрастанию

$array = [10, 4, 6, -39, 95, -12, 0, 8 ,54 ,32];

/*
foreach ($array as $item) {
    if ($item % 2 == 0 && $item != 0) { // чётные числа
        echo $item . "<br>";
    }
}
*/


/*
echo max($array); // большее число
echo "<br>";
echo min($array); // меньшее число
*/

/*
$min = $array[0];
$max = $array[0];

foreach ($array as $item) {
    if ($item < $min) {
        $min = $item;
    }

    if ($item > $max) {
        $max = $item;
    }
}

echo $max; // большее число
echo "<br>";
echo $min; // меньшее число
*/

/*
sort($array); // сортировка
echo "<pre>";
var_dump($array);
echo "</pre>";
*/

/*
$isSorted = false;

while (!$isSorted) { // сортировка
    $isSorted = true;
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i +1] = $temp;
            $isSorted = false;
        }
    }
}

echo "<pre>";
var_dump($array);
echo "</pre>";
*/


$array2 = [22, 7, -4, 12, 95, 0, 78, 8, 15, 2]; 


/*
$result = []; // вывод уникальных чисел

foreach ($array as $item) { 
    if (!in_array($item, $result)) {
        $result[] = $item;
    }
}


foreach ($array2 as $item) {
    if (!in_array($item, $result)) {
        $result[] = $item;
    }
}


echo "<pre>";
var_dump($result);
echo "</pre>";
*/

$array3 = [3, 3, 1, 5, 6, 9, 7, 3, 1, 5];

/*
$result = []; //какая то задачка хз вообще

foreach ($array3 as $item) {
    
    if (!isset($result[$item])) {
        $result[$item] = 1;
    } else {
        $result[$item]++;
    }
}

echo "Input array: " . implode(", ", $array) . "<br>";

foreach ($result as $key => $value) {
    $color = ($value > 1) ? 'blue' : 'red';
    echo '<span color=" . $color . ">';
    echo '<b>' . $key . '</b> - ' . $value . "<br>";
    echo '</span>';
}

impload // работа с массивами
expload // работа с массивами
*/


/*
$fruits = [
    [
        "NAME" => "Orange",
        "TYPE" => "Citrus",
        "PRICE" => 20,
        "AMOUNT" => 2
    ],
    [
        "NAME" => "Banana",
        "TYPE" => "Fruit",
        "PRICE" => 10,
        "AMOUNT" => 6
    ],
    [
        "NAME" => "Lemon",
        "TYPE" => "Citrus",
        "PRICE" => 10,
        "AMOUNT" => 7
    ],
    [
        "NAME" => "Apple",
        "TYPE" => "Fruit",
        "PRICE" => 15,
        "AMOUNT" => 3
    ],
    [
        "NAME" => "Kiwi",
        "TYPE" => "Fruit",
        "PRICE" => 5,
        "AMOUNT" => 1
    ],
];

echo "<h1>All</h1>";
echo '<div style="display: flex;     justify-content: space-between;">';

foreach ($fruits as $fruit) {
    echo "<div>";
    echo "<h2>" . $fruit["NAME"] . "</h2>";
    echo "<h4>Type : " . $fruit["TYPE"] . ";<br> Price: " . $fruit["PRICE"] . "</h4>";
    echo "<h3>" . $fruit["AMOUNT"] . "</h3>";
    echo "<h4>Total prise" . $price .  "</h4>";
    echo "</div>";

}

echo '</div>';
?>
*/

