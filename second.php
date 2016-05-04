	<?php
	session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:signIn.php");
    }

	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	if(isset($_POST['val']))
		{ 

		$value=$_POST['val'];
		?>

		<form action="upload.php" method="POST" enctype="multipart/form-data">
<?php 
	for($i=0;$i<$value;$i++)
	{
		echo '<input type="file" name="myfile[]"></input><br /><br />';
	}
		
		
?>
	

		
		<input type="submit" value="UPLOAD"></input>
	</form>

	<?php } ?>
</body>
</html>