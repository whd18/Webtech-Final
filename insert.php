<?php
session_start();
	require_once('db.php');
$name=$_SESSION['name'];

	$hotel=$_SESSION['hotel'];
	$guide=$_SESSION['guide'];
	$member=$_SESSION['member'];
	$day=$_SESSION['day'];
	$total=$_SESSION['total'];

	$query="INSERT INTO favourite (uname,accomodation,guide,living,nom,price) values('$name', '$hotel','$guide','$member','$day','$total')";
	$result=mysql_query($query);

	if($result)
	{
		echo "THIS PACKAGE ADD TO YOUR FAVOURITE";
		sleep(3);
		header("Location:dashboard.php");
	}
	else 
		echo 0;


?>