	<?php
	// session_start();

	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DashBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>
<?php
	// $_SESSION['name'];
	// $name=$_SESSION['name'];
	// echo "WELCOME '$name'";

?>
	<center><h1>WELCOME RAKIB</h1> </center>	
	<div class="container" style="width: 100px;">

		       
  <table class="table table-hover">
    <thead>
      <tr>
        <th><h2>DASHBOARD</h2></th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="image.php">SEE YOUR VISITED PLACE</a></td>
       
      </tr>
      <tr>
        <td><a href="first-pic.php">UPLOAD PICTURE </a></td>
     
      </tr>
      <tr>
          <td><a href="signIn.php">PROFILE CHNAGE</a></td>
      </tr>
      <tr>
          <td><a href="signIn.php">LOG OUT</a></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
