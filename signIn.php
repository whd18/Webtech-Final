<?php
session_start();
if(isset($_SESSION['name']))
{	
	//if a user logged in then this page will redirect to his profile page
	header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Horizontal Form Layout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="js/jQuery.js"></script>
    <script src="js/signin.js"></script>
    
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
</style>
</head>
<body>
<center>
<div class="bs-example" style="width:300px;">
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <center><h1>LOGIN</h1></center>
            <label for="inputEmail" class="control-label col-xs-2" style="margin-right:50px; "> USERNAME: </label>
            <div class="col-xs-10">
                <input type="text" class="form-control" id="uname" placeholder="UserName" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2"style="margin-right:50px; ">PASSWORD: </label>
            <div class="col-xs-10">
                <input type="password" class="form-control" id="pass" placeholder="Password">
            </div>
        </div>
        <div class="form-group" id="result">
            
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="button" class="btn btn-primary" id="submit">Login</button>
            </div>
        </div>
    </form>
    <div id="finish">
    	hello
    </div>
</div>
</center>
</body>
</html>                