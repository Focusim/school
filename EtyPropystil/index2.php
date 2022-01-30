<?
/*
Задание 1.

Создать массив из 10 элементов, которые генерируются
случайным образом от 10 до 100. Перевернуть массив
задом наперед, используя только одну переменную.

*/
/*
$numbers = [];

for ($i = 0; $i < 10; $i++) {
	$numbers[] = rand(10, 100);
}

echo '<pre>';
var_dump($numbers);
echo '</pre>';

//$numbers = array_reverse($numbers);

for ($i = 0; $i < count($numbers) / 2; $i++) {
	$temp = $numbers[$i];
	$index = count($numbers) - 1 - $i;
	$numbers[$i] = $numbers[$index];
	$numbers[$index] = $temp;
}


echo '<pre>';
var_dump($numbers);
echo '</pre>';
*/

/*
Задание 2.
Создать массив из 10 элементов и заполнить его случайными числами 
от 10 до 100. Создать переменную,
записать в нее число и реализовать алгоритм поиска
данного числа в массиве. Если число было найдено,
вывести порядковый номер элемента, если нет — вывести сообщение 
(No result for <Number>), где Number — число.
*/
/*
$numbers = [];
for ($i = 0; $i < 10; $i++) {
	$numbers[] = rand(10, 100);
}

$number = 50;
$result = false;

foreach ($numbers as $key => $item) {
	if ($item == $number) {
		$result = $key;
		break;
	}
}

echo '<pre>';
var_dump($numbers);
echo '</pre>';

if ($result === false) {
	echo "Число не найдено";
} else {
	echo "Число ".$number." найдено в индексе ".$result;
}
*/

//Задание 3
/*
Создать массив рекламных баннеров, содержащий
Название баннера и URL-изображение (Изображения
сохраняются в папке img, которая находится в корне
сайта). При каждом запуске страницы, случайно выбирать и показывать баннер на странице.
*/
/*
$banners = [
	'1.jpg',
	'2.jpg',
	'3.jpg',
	'4.jpg',
	'5.webp',
];

$bannerIndex = rand(0, count($banners) - 1);
echo '<img src="img/'.$banners[$bannerIndex].'">';
*/

//Задание 4
/*
Создать числовой массив из 5 элементов. Элементом
массива является массив из 5 цифр. Заполнить элементы
случайными числами от 10 до 100. Вывести массив на
страницу и отсортировать элементы по возрастанию.
*/
/*
$matrix = [];

for ($i = 0; $i < 5; $i++) {
	$array = [];
	for ($j = 0; $j < 5; $j++) {
		$array[] = rand(10, 100);
	}
	$matrix[] = $array;
}

echo "<h1>Original</h1>";
foreach ($matrix as $array) {
	echo implode(", ", $array)."<br>";
}

$tempArray = [];
foreach ($matrix as $array) {
	foreach ($array as $number) {
		$tempArray[] = $number;
	}
}

sort($tempArray);

$matrix = [];
for ($i = 0; $i < 5; $i++) {
	$array = [];
	for ($j = 0; $j < 5; $j++) {
		$array[] = array_shift($tempArray);
	}
	$matrix[] = $array;
}

echo "<h1>Sorted</h1>";
foreach ($matrix as $array) {
	echo implode(", ", $array)."<br>";
}
*/

//Задание 5
/*
Создать 2 массива цифр по 10 элементов каждый.
Разработать скрипт, который будет создавать третий
массив и записывать в него те элементы, которые 
присутствуют в одном массиве, но нет в другом.

*/
/*
$numbers1 = [5, 71, 12, 18, 2, 11, 7, 9, 0, 1];
$numbers2 = [5, 41, 16, 18, 2, 13, 7, 99, 0, 1];

$result = [];

foreach ($numbers1 as $number) {
	if (!in_array($number, $numbers2)) {
		$result[] = $number;
	}
}

echo implode(", ", $result);
*/

//Задание 6.
/*
Создать массив из 10 элементов вида X, Y. Дополнительно создать массив цветов. Вывести на страницу
10 div, разместить их в координатах X, Y и закрасить
случайным цветом из массива цветов.
*/

$coordinates = [
	[
		"X" => 10,
		"Y" => 20,
	],
	[
		"X" => 30,
		"Y" => 50,
	],
	[
		"X" => 1200,
		"Y" => 80,
	],
	[
		"X" => 120,
		"Y" => 100,
	],
	[
		"X" => 150,
		"Y" => 40,
	],
	[
		"X" => 900,
		"Y" => 70,
	],
	[
		"X" => 800,
		"Y" => 10,
	],
	[
		"X" => 500,
		"Y" => 500,
	],
	[
		"X" => 400,
		"Y" => 300,
	],
	[
		"X" => 40,
		"Y" => 510,
	]
];

$colors = ['red', 'green', 'blue', 'yellow', 'brown', 'orange'];
echo '<style>div{width:50px;height:50px;position:absolute;}</style>';

$lastColorIndex = count($colors) - 1;
foreach ($coordinates as $coordinate) {
	$colorIndex = rand(0, $lastColorIndex);
	$color = $colors[$colorIndex];
	echo '<div style="top:'.$coordinate["Y"].'px;left:'.$coordinate["X"].
		'px;background:'.$color.';"></div>';
}