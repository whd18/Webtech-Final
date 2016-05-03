<?php 

	require_once('db.php');

	$query="SELECT * FROM picture WHERE user='rakib' ";

	$res=mysql_query($query);

	while($row=mysql_fetch_array($res))
	{
?>
	<p>	<h1><?php echo $row['place']; ?> </h1>	
		<img src="<?php echo $row['fpath'] ; ?>" height="200" width="200" >
	</p>
	<?php
	}
	?>
