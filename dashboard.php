  <?php
  session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:signIn.php");
    }

    require_once('nav2.php');

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DashBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>
<?php
  
  $name=strtoupper($_SESSION['name']);
  

?>
  <center><h1 style="margin-top: 60px;"><?php echo "WELCOME $name"; ?></h1> </center> 
  <div class="container" style="margin-top: 60px;">
    <div class="row">
        <div class="col-lg-3">
          <table class="table table-hover">
            <thead>
              <tr>
                <th style="color: white; background-color: black;"><h2 >DASHBOARD</h2></th>
              
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="image.php">SEE YOUR VISITED PLACE</a></td>
               
              </tr>
               <tr>
                  <td><a href="watchlist.php"> WATCHLIST </a></td>
              </tr>
              <tr>
                  <td><a href="fav-pac.php"> FAVOURITE PACKAGE</a></td>
              </tr>
              <tr>
                <td><a href="first-pic.php">UPLOAD PICTURE </a></td>
             
              </tr>
              <tr>
                  <td><a href="change.php"> CHANGE PROFILE PICTURE</a></td>
              </tr>
              <tr>
                  <td><a href="password.php"> CHANGE PASSWORD </a></td>
              </tr>
              <tr>
                  <td><a href="signOut.php">LOG OUT</a></td>
              </tr>
            </tbody>
          </table>
        </div>



        <div class="col-lg-9">
          <div class="profile-image">
             <?php
             require_once('db.php');
             $query="SELECT pic FROM user where uname='$name'";
             $result=mysql_query($query);

             while($row=mysql_fetch_array($result)){
              
              $val=  $row['pic'];
            }

             ?>
          <img src="<?php echo $val ;?>" class="img-circle" alt="no profile picture" width="200" height="150" align="right"> 
          </div>
        </div>
    </div>
  </div>
          


</body>
</html>
