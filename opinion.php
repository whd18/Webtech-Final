<!DOCTYPE html>
<?php
	require_once('nav.php');
	require_once('db.php');
?>
<html>
<head>
	<title>User Opinion</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/index.css">
	  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

<div class="container">
		  <h2 style="margin-top: 60px;">Say Something</h2>

		  <div class="row">
		  <div class="col-md-12">
		  <form>
		  <textarea name="cmnt"></textarea>

		   <input class="btn btn-primary" role="button" type="submit" name="submit" value="Comment" />
			</form>	
		    </div>
  </div>


  <?php
						if(isset($_REQUEST['submit']))
					{
						$usercomment=$_REQUEST['cmnt'];
						
						
						
						$query="update user set opinion='$usercomment'  where uname='wahid'";

						$result=mysql_query($query);
						
						if($result)
							{
								echo "successfully completed!!";
								header('Location:index.php');
								
							}
							else
						echo "something went wrong !!";
					}
				
	?>
</body>
</html>