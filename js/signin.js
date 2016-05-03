
$(document).ready(function(){

	$('#uname').focus();

	$('#submit').click(function(){

		var username=$('#uname').val();
		var password=$('#pass').val();

		var result=$('#result').val();
		
		if(username !='' && password=='')
		{		//$('finish').empty();
				$("finish").update("New text");
		       // $('<img src="error.png" height="20px" width="20px"> <p>PASSWORD WRONG</p>').appendTo('#finish');
        }

		else if(username =='' && password !='')
		{	$('#finish').empty();
			$('<img src="error.png" height="20px" width="20px"><p>USERNAME WRONG</p>').appendTo('#finish');
		}


		else if(username != '' && password != '')
		{
			var urltopass='username='+username+'&password='+password;

			$.ajax({

				type:'post',
				data:urltopass,
				url:'check.php',
				success: function(responseText)
				{
					if(responseText=='valid')
					{
						window.location='index.php';
					}
					else if(responseText=='invalid')
					{
						$('<p>wrong info</p>').appendTo('#result');
					}
						
				}
					});	
		}
		else
		$('<p>please provide info</p>').appendTo('#result');

	});
});