<?
function register($name, $pass, $email) {
	
	$name = trim(htmlspecialchars($name));
	$pass = trim(htmlspecialchars($pass));
	$email = trim(htmlspecialchars($email));
	
	if ($name == "" || $pass == "" || $email == "") {
		echo '<h3 style="color:red;">Заполните все обязательные поля!</h3>';
		return false;
	}
	
	if (strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30) {
		echo '<h3 style="color:red;">Values Length Must Be Between 3 And 30!</h3>';
		return false;
	}

	$users = 'pages/users.txt';

	$file = fopen($users, 'a+'); //'a' Открывает файл только для записи; помещает указатель в конец файла. Если файл не существует - пытается его создать. В данном режиме функция fseek() не применима, записи всегда добавляются в конец.
	while ($line = fgets($file, 128)) { // fgets — Читает строку из файла

		$readName = substr($line, 0, strpos($line, ":")); // substr — Возвращает подстроку / strpos — Возвращает позицию первого вхождения подстроки

		if ($readName == $name) {

			echo '<h3 style="color:red;">Such Login Name Is Already Used!</h3>';
			return false;
		}
	}
	
	$newUserLine = $name.':'.md5($pass).':'.$email.PHP_EOL; // PHP_EOL - новая строка
	fputs($file, $newUserLine); // fwrite() записывает содержимое data в файловый поток stream.
	fclose($file);
	return true;
}