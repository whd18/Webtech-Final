<?php 
  session_start();
  require_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>WatchList</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <h2>YOUR DESIREABLE PLACES</h2>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th><center><h2>Destination</h2></center></th>
      </tr>
    </thead>
    <tbody>

        <?php
          $name=$_SESSION['name'];
          $que="SELECT watchlist from watchlist where username='$name'";

          $res=mysql_query($que);

          while ($row=mysql_fetch_array($res)) {
             
              $n=$row['watchlist'];
              echo " <tr> 
                  <td> <center>'$n' </center></td>
                   </tr>
                   ";
          }?>
         
    
    </tbody>
  </table>
</div>
  <a href="dashboard.php"> go to dashboard</a>

</body>
</html>