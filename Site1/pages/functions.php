<?
function register($name, $pass, $email) {
	
	$name = trim(htmlspecialchars($name));
	$pass = trim(htmlspecialchars($pass));
	$email = trim(htmlspecialchars($email));
	
	if ($name == "" || $pass == "" || $email == "") {
		echo '<h3 style="color:red;">Fill All Required Fields!</h3>';
		return false;
	}
	
	if (strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30) {
		echo '<h3 style="color:red;">Values Length Must Be Between 3 And 30!</h3>';
		return false;
	}

	$users = 'pages/users.txt';
	$file = fopen($users, 'a+');
	while ($line = fgets($file, 128)) {
		$readName = substr($line, 0, strpos($line, ":"));
		if ($readName == $name) {
			echo '<h3 style="color:red;">Such Login Name Is Already Used!</h3>';
			return false;
		}
	}
	
	$newUserLine = $name.':'.md5($pass).':'.$email.PHP_EOL;
	fputs($file, $newUserLine);
	fclose($file);
	return true;
}