<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Site 1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<header class="col-sm-12 col-md-12 col-lg-12">
			
			</header>
		</div>
		
		<div class="row">
			<nav class="col-sm-12 col-md-12 col-lg-12">
				<? require_once('pages/menu.php'); ?>
				<? require_once('pages/functions.php'); ?>
			</nav>
		</div>
		
		<div class="row">
			<section class="col-sm-12 col-md-12 col-lg-12">
				<?
				$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
				switch ($page) {
					case 1:
						require_once('pages/home.php');
						break;
					case 2:
						require_once('pages/upload.php');
						break;
					case 3:
						require_once('pages/gallery.php');
						break;
					case 4:
						require_once('pages/registration.php');
						break;
					default:
						echo "<h1>404 page not found</h1>";
				}
				?>
			</section>
		</div>
	</div>
</body>
</html>