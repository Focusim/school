<h1>Registration</h1>
<?
if (!isset($_POST['regbtn'])) {
?>
	<form method="POST" action="index.php?page=4">
		<div class="form-group">
			<input type="text" class="form-control" name="login" placeholder="Login">
		</div>
		
		<div class="form-group">
			<input type="password" class="form-control" name="pass1" placeholder="Password">
		</div>
		
		<div class="form-group">
			<input type="password" class="form-control" name="pass2" placeholder="Confirm Password">
		</div>
		
		<div class="form-group">
			<input type="text" class="form-control" name="email" placeholder="E-mail">
		</div>
		
		<button type="submit" class="btn btn-primary" name="regbtn">Register</button>
	</form>
<?	
} else {
	if ($_POST['pass1'] != $_POST['pass2']) {
		echo '<h3 style="color:red;">Passwords not matches!</h3>';
	} else {
		$result = register($_POST['login'], $_POST['pass1'], $_POST['email']);
		if ($result) {
			echo '<h3 style="color:green;">New User Added!</h3>';
		}
	}333333333333333333
}