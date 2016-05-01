<?php

	require_once('nav.php');
	require_once('db.php');

?>

	


<div>
<br /><br /><br />
<select id="destination" onchange="getState(this.value);">
<option value="">-select-</option>
<?php
	$query="SELECT destination FROM destination";
	$result= mysql_query($query);
	while ($row=mysql_fetch_array($result)) { ?>

	<option><?php echo $row['destination'];} ?></option>

</select>

</div>

<br /><br />

<div>
<select id="accomodation">

	<option value="">-Select Hotel-</option>
	<?php
		if(isset($_REQUEST['place']))
		{
		$place=$_REQUEST['place'];

		if($place =="Dhaka to Sundarban"){

			$sql="SELECT hotel FROM accomodation WHERE place='Coxsbazar'";
			$res=mysql_query($sql);
			while($row=mysql_fetch_assoc($res)){
	?>

	<option><?php echo $row['hotel'];}  ?></option>

</select>
<?php }} ?>
</div>
<!-- countryID = '" . $_POST["country_id"] . "'"; -->