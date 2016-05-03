<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="js/jQuery.js"></script>
    <script src="js/signup.js"></script>
    
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
        <div id="load"></div>
        <div id="box"></div>  
        <div class="bs-example" style="width: 300px;">
            <form class="form-horizontal" method="post" id="form2">
        
        <div class="form-group" >
             <h2>SIGN UP</h2><br /> <br />
            <label for="inputPassword" class="control-label col-xs-2" style="margin-right: 30px;">NAME:</label>
            <div class="col-xs-10" id="line">
                <input type="text" class="form-control" id="fname" placeholder="Full Name">
            </div>
        </div>
        <div class="form-group">
           
            <label for="inputEmail" class="control-label col-xs-2" style="margin-right: 30px;">USERNAME:</label>
            <div class="col-xs-10" id="line1">
                <input type="text" class="form-control" id="username" placeholder="UserName">
            </div>
        </div>
        <div class="form-group" >
            <label for="inputPassword" class="control-label col-xs-2" style="margin-right: 30px;">PASSWORD:</label>
            <div class="col-xs-10" id="line2">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
         <div class="form-group" >
            <label for="inputPassword" class="control-label col-xs-2" style="margin-right: 30px;">EMAIL</label>
            <div class="col-xs-10" id="line3">
                <input type="email" class="form-control" id="email" placeholder="email">
            </div>
        </div>
        <div class="form-group" id="result">
            
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="button" class="btn btn-primary" id="submit">SUBMIT</button>
            </div>
        </div>
    </form>
    <div id="finish">
        
    </div>
</div>
    </center>
</body>
</html>                