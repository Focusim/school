<h1>Upload</h1>
<?
if (!isset($_POST['uppbtn'])) {
?>
	<form method="POST" action="index.php?page=2" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" class="form-control" name="myfile" accept="image/*">
		</div>
		<button type="submit" class="btn btn-primary" name="uppbtn">Send File</button>
	</form>
	
<?	
} else {
	
	if ($_FILES['myfile']['error'] != 0) {
		echo '<h3 style="color:red;">Upload error code: '.$_FILES['myfile']['error'].'</h3>';
		exit();
	}
	
	move_uploaded_file($_FILES['myfile']['tmp_name'], "./images/".$_FILES['myfile']['name']);
	echo '<h3 style="color:green;">Uploaded Successfuly!</h3>';
}