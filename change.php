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
<center>
	<h1>Make Your Profile Beautiful</h1>

	<form action="propic.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="myfile"></input><br /><br />
	<input type="submit" value="Change Profile Picture"></input>
	</form>

</center>

</body>
</html>