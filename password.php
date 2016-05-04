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
	<form method="post" action="password.php">
		<input type="password" name= "pass"></input>
		<input type="submit" value="Change Password"></input>

	</form>

<?php
	
	require_once('db.php');
		
			if(isset($_POST['pass']))
			{	

				$user=$_SESSION['name'];

				$pass=$_POST['pass'];	

				$query2="UPDATE user
						SET password='$pass'
						WHERE uname='$user' ";

				$rs=mysql_query($query2);
				if($rs)
				{
					echo "password change";
				}
				else 
					echo "error".mysql_error();
			}


?>

</body>
</html>