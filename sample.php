<!DOCTYPE html>
<?php
		require_once('db.php');
		require_once('nav.php');

	?>
<html style="margin-top: 60px;">
<head>
	<title></title>

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
<select>
	<option value="">-select Package-</option>

	<?php while ( $row3=mysql_fetch_array($res)) { ?>

	<option><?php echo $row3['package'];} ?> </option>
</select>

<div id="live_data">
	<input type="text" placeholder="Total Member"></input>
	<button value="Show Total Cost" onclick="clickbtn() ;">SUBMIT</button>


</div>	
</body>
</html>