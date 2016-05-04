<?php
		require_once('db.php');
	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src="js/package.js"></script>
</head>
<body>
	
	<select onchange="getState(this.value);">
		<option value="">-select-</option>
			<?php
				$query="SELECT destination FROM destination";
				$result= mysql_query($query);

					while ($row=mysql_fetch_array($result)) { ?>

				<option><?php echo $row['destination'];} ?></option>

	</select>


<!-- here is the hotel -->
	<select id="accom" onchange="place(this.value); ">

		<?php require_once('db.php'); 

			if(isset($_REQUEST['place']))
			{
				$place=$_REQUEST['place'];
				echo $place;
				$sql="SELECT hotel FROM accomodation where place='".$place."'";
				$res=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());; ?>
		
		
		<select id="place" >
			
			<option value="">-select Hotel-</option>
			<?php while ( $row2=mysql_fetch_array($res)) { ?>
	
			<option><?php echo $row2['hotel'];} ?> </option>
	
		</select>

	<?php } ?>

</select>


<?php require_once('db.php'); 

	$sql="SELECT package FROM package";
	$res=mysql_query($sql) or die($sql."<br/><br/>".mysql_error()); ?>

<select id="pack" onchange="packval(this.value);">

	<option value="">-select Package-</option>

		<?php while ( $row3=mysql_fetch_array($res)) { ?>

	<option><?php echo $row3['package'];} ?> </option>

</select>



	<input type="text"  id="member" onkeyup="showHint(this.value)"></input>



	<button id="Get" onclick="clickbtn() ;" >SUBMIT</button>


<div id="load">
	
</div>

</body>
</html>