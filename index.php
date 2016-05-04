	<?php
	session_start();
    if(!isset($_SESSION['name']))
    {
        require_once('nav.php');
    }
    elseif (isset($_SESSION['name'])) {
    	
    	require_once('nav2.php');
    }

	?>
	
	<div id="slider">
		<p>LET US <br />SHOW YOU <br /> <b>BANGLADESH</b></p>
		<img src="img/slider.jpg" id="sliderImage">
	
	</div>

</body>
</html>