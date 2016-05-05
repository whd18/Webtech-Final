
<?php
  if(!isset($_SESSION['name']))
    {
        require_once('nav.php');
    }
    elseif (isset($_SESSION['name'])) {
    	
    	require_once('nav2.php');
    }

?>
<!DOCTYPE html>

<html>
<head>
	<title>Contact</title>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>


</center>


	<div class="container">
  <h2  style="margin-top: 60px;">MAKE WITH LOVE</h2>

  <div class="row">
  <div class="col-md-3">
      <a href="www.facebook.com/wahid18" class="thumbnail">
 		<h3>Wahid</h3>
        <img src="img/whd.jpg" alt="seafoodimg" style="width:500px;height:200px">
         	
      </a>
    </div>


<div class="col-md-3">
      <a href="www.facebook.com/rakib.rumi09" class="thumbnail">
 		<h3>Rakib Al Hasan</h3>
        <img src="img/rakib.jpg" alt="seafoodimg" style="width:500px;height:200px">
        
      </a>
    </div>

    <div class="col-md-3">
      <a href="www.facebook.com/rahatrocky" class="thumbnail">
 		<h3>Rahat Chowdhury</h3>
        <img src="img/rocky.jpg" alt="seafoodimg" style="width:500px;height:200px">
         
      </a>
    </div>

    <div class="col-md-3">
      <a href="www.facebook.com/tasnim.tusti" class="thumbnail">
 		<h3>Tasnim</h3>
        <img src="img/tusti.jpg" alt="seafoodimg" style="width:500px;height:200px">
         >
      </a>
    </div>
   </div>
</body>
</html>