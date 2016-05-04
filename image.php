<?php 
	session_start();
	$name=$_SESSION['name'];
	
	require_once('db.php');

	$query="SELECT * FROM picture WHERE user='$name' ";

	$res=mysql_query($query);

	while($row=mysql_fetch_array($res))
	{
?>
	<p>	
		<img src="<?php echo $row['fpath'] ; ?>" height="300" width="300" align="left">
	</p>
	<?php
	}
	?>
<a href="dashboard.php">Back to Dashboard</a>
