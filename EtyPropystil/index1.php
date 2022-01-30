<?
/*
Задание 1.
1. Создать массив из 10 элементов (чисел). Вывести:
a) четные элементы;
b) максимальный и минимальный элемент;
c) отсортировать массив по возрастанию.
*/

//$array = [10, 4, 6, -39, 95, -12, 0, 8, 54, 32];

/*
//a)
foreach ($array as $item) {
	if ($item % 2 == 0 && $item != 0) {
		echo $item."<br>";
	}
}*/
/*
//b)
echo max($array);
echo "<br>";
echo min($array);
*/

//b) вариант 2
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
echo $max;
echo "<br>";
echo $min;
*/

//c)
/*
sort($array);
echo "<pre>";
var_dump($array);
echo "</pre>";
*/
/*
$isSorted = false;
while (!$isSorted) {
	$isSorted = true;
	for ($i = 0; $i < count($array) - 1; $i++) {
		if ($array[$i] > $array[$i + 1]) {
			$temp = $array[$i]; 
			$array[$i] = $array[$i + 1];
			$array[$i + 1] = $temp;
			$isSorted = false;
		}	
	}
}

echo "<pre>";
var_dump($array);
echo "</pre>";
*/
//Задание 2.
/*
Создать 2 массива с числами по 10 элементов. Создать
скрипт, который объединит уникальные значения из
двух массивов в один. 
*/
/*
$array = [10, 4, 6, -39, 95, -12, 0, 8, 54, 32];
$array2 = [22, 7, -4, 12, 95, 0, 78, 8, 15, 2];

$result = [];
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

//Задание 3.
/*
Создать массив из 10 элементов. Посчитать количество повторов каждого числа в массиве (цвет цифр,
в которых нет повторов — красный, цвет тех чисел,
в которых есть повторы — синий). Размер текста —
20рх. Число в каждой строке выделять жирным.
*/
/*
$array = [3, 3, 1, 5, 6, 9, 7, 3, 1, 5];
$result = [];
foreach ($array as $item) {
	if (!isset($result[$item])) {
		$result[$item] = 1;
	} else {
		$result[$item]++;
	}
}

echo "Input array: ".implode(", ", $array)."<br>";
foreach ($result as $key => $value) {
	$color = ($value > 1) ? 'blue' : 'red';
	echo '<span style="color:'.$color.';">';
	echo '<b>'.$key.'</b> - '.$value."<br>";
	echo '</span>';
}
*/

//Задание 4.
/*
Создать массив фруктов (состоит из названия, типа,
цены и количества). Проделать с массивом такие действия:
d) вывести только цитрусовые;
e) посчитать и вывести цену фруктов;
f) посчитать общую цену всех фруктов.
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
	]
];

echo "<h1>All</h1>";
echo '<div style="display: flex; background: green; justify-content:space-between;">';

foreach ($fruits as $fruit) {
	echo "<div>";
	echo "<h2>".$fruit["NAME"]."</h2>";
	echo "<h4>Type: ".$fruit["TYPE"]."; Price: ".$fruit["PRICE"]."</h4>";
	echo "<h3>Amount: ".$fruit["AMOUNT"]."</h3>";
	echo "<h4>Total price: ".($fruit["PRICE"] * $fruit["AMOUNT"])."</h4>";
	echo "</div>";
}

echo "</div>";

echo "<h1>Citrus</h1>";
echo '<div style="display: flex; background: yellow; justify-content:space-between;">';

foreach ($fruits as $fruit) {
	if ($fruit["TYPE"] == "Citrus") {
		echo "<div>";
		echo "<h2>".$fruit["NAME"]."</h2>";
		echo "<h4>Type: ".$fruit["TYPE"]."; Price: ".$fruit["PRICE"]."</h4>";
		echo "<h3>Amount: ".$fruit["AMOUNT"]."</h3>";
		echo "<h4>Total price: ".($fruit["PRICE"] * $fruit["AMOUNT"])."</h4>";
		echo "</div>";
	}
}

echo "</div>";
*/

//Задание 5.
/*
Создать массив со странами и вывести <select>-элемент,
который будет включать в себя список стран
*/

/*
$countries = [
	"Russia",
	"Italy",
	"France",
	"Germany",
	"Canada",
	"USA",
];
?>
<select name="countries">
	<? foreach ($countries as $country) { ?>
		<option value="<?= $country ?>"><?= $country ?></option>
	<? } ?>
</select>
<?
*/

//Задание 6.
/*
Создать массив, который будет содержать название
изображения, ссылки и альтернативный текст на следующие 
ресурсы: Youtube, Facebook, Google, Gmail
и разработать <div>, который будет показывать 
изображение и по клику на изображение будет перенаправлять 
на соответствующий сайт
*/

$links = [
	[
		"NAME" => "Youtube",
		"IMAGE" => "youtube.webp",
		"LINK" => "https://www.youtube.com",
		"ALT" => "Youtube link"
	],
	[
		"NAME" => "Facebook",
		"IMAGE" => "facebook.png",
		"LINK" => "https://www.facebook.com",
		"ALT" => "Facebook link"
	],
	[
		"NAME" => "Google",
		"IMAGE" => "google.jpg",
		"LINK" => "https://www.google.com",
		"ALT" => "Google link"
	],
	[
		"NAME" => "Gmail",
		"IMAGE" => "gmail.webp",
		"LINK" => "https://google.com/gmail",
		"ALT" => "Gmail link"
	]
];

echo "<div>";
foreach ($links as $link) {
	echo '<div style="float:left;">';
	echo '<a href="'.$link["LINK"].'" target="_blank">';
	echo '<img src="images/'.$link["IMAGE"].'" alt="'.$link["ALT"].'" height="200">';
	echo '</a>';
	echo '</div>';
}
echo "</div>";

