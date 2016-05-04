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
  <h2><center>YOUR DESIREABLE PACKAGES</center></h2>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th><center><h5>Hotel Name</h5></center></th>
        <th><center><h5>Accomodation Cost</h5></center></th>
        <th><center><h5>Guide Cost</h5></center></th>
        <th><center><h5>Living Cost</h5></center></th>
        <th><center><h5>Member</h5></center></th>
        <th><center><h5>Total Cost</h5></center></th>
      </tr>
    </thead>
    <tbody>

        <?php
          $name=$_SESSION['name'];
          $que="SELECT * from favourite where uname='$name'";

          $res=mysql_query($que);

          while ($row=mysql_fetch_array($res)) {
              $n1=$row['hotelName'];
              $n2=$row['accomodation'];
              $n3=$row['guide'];
              $n4=$row['living'];
              $n5=$row['nom'];
              $n6=$row['price'];
              echo " <tr> 
                  <td> <center>$n1 </center></td>
                  <td> <center>$n2 </center></td>
                  <td> <center>$n3 </center></td>
                  <td> <center>$n4 </center></td>
                  <td> <center>$n5 </center></td>
                  <td> <center>$n6 </center></td>
                   </tr>
                   ";
          }?>
         
    
    </tbody>
  </table>
</div>
  <a href="dashboard.php"> go to dashboard</a>

</body>
</html>