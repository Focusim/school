<?
/*
Задание 1.
Вывести на страницу текстовое поле и кнопку. По
клику на кнопке страница обновляется и под 
текстовым полем отображается то, что пользователь ввел
в текстовое поле.
*/
/*
?>
<form method="POST">
	<input type="text" name="text">
	<input type="submit" value="Send" name="btn">
</form>
<?
if (isset($_POST["btn"])) {
	echo "<h1>".$_POST["text"]."</h1>";
}
*/

//Задание 2.
/*
Вывести на страницу текстовое поле, кнопку и список
стран. Пользователь вводит текст в поле, нажимает
кнопку и в списке выводятся только те страны, которые удовлетворяют условию поиска (строка поиска в
результатах выделяется жирным и окрашена в красный).
*/
?>
<form method="POST">
	<input type="text" name="text">
	<input type="submit" value="Search" name="btn-search">
</form>
<?
$countries = ['Poland', 'Portugal', 'Singapore', 'Franch Polynesia'];
if (isset($_POST["btn-search"])) {
	foreach ($countries as $key => $country) {
		$pos = strpos(strtolower($country), strtolower($_POST["text"]));
		if ($pos !== false) {
			$countries[$key] = substr($country, 0, $pos - 1).
			'<span style="color:red;">'.
			substr($country, $pos, $pos + strlen($_POST["text"])).
			"</span>".substr($country, $pos + strlen($_POST["text"]) + 1);
		}
	}
}
?>
<ul>
	<? foreach ($countries as $country) { ?>
		<li><?= $country ?></li>
	<? } ?>
</ul>

