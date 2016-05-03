$(document).ready(function(){
    // $('<img src="error.png" height="20px" width="20px">').appendTo('#line');
    $('#submit').click(function(){

        var username=$('#username').val();
        var password=$('#password').val();
        var fname=$('#fname').val();
        var email=$('#email').val();
       

        if(fname =="" )
            {
                 $('#finish').empty();
                $('<img src="error.png" height="20px" width="20px"><h3>FULL NAME MISSING</h3>').appendTo('#finish');
            }

        else  if(username =="" )
            {
                 $('#finish').empty();
                $('<img src="error.png" height="20px" width="20px"><h3>USERNAME MISSING</h3>').appendTo('#finish');
            }

        else  if(password =="" )
            {
                 $('#finish').empty();
                $('<img src="error.png" height="20px" width="20px"><h3>PASSWORD MISSING</h3>').appendTo('#finish');
            }
        
        else if (email=="")
            {
                 $('#finish').empty();
                $('<img src="error.png" height="20px" width="20px"><h3>EMAIL MISSING</h3>').appendTo('#finish');
            }

     
        else if(username !='' && password !='' && email !='' )
        {
        var urltopass='username='+username+'&password='+password+'&email='+email+'&fname='+fname;
        $.ajax({

            type:'POST',
            url:'postSignin.php',
            data:urltopass,

            success: function(html)
            {
                $('#load').css('display','block');
                $('#form2').css('display','none');
                $('#box').css('display','none');
                $('#load').fadeOut('500',function(){
                     $('#finish').empty();
                    $('#load').css('display','none');
                    $('#load').html(html).show('slow');
                });
                
                
            }
        });
    }  
        else
            $('#finish').empty();
             $('<img src="error.png" height="20px" width="20px">Please Complete your form').appendTo('#finish');

        return false;
    });
});