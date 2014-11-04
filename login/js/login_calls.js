function login(){
        var password = $("#mypassword").val();
        var userName = $("#myusername").val();

        $.ajax({ 
          type: 'POST',
          url: '../login/checklogin.php',
          data: {myusername: userName, mypassword: password},
          success: function(data){
              if(data == false){
                    $(".alert").remove();
                    $("#login_form").prepend('<div class="alert alert-error"><a href="#" class="close" data-dismiss="alert">×</a>The username or password are not correct.</div>');
                    return;
              }else{
                    window.location = "http://172.16.1.131/GAPTrainingApp/html/dashboard.php";
                    return;
              }
          },
          error:function(){
            // failed request; give feedback to user
            // $('#holder').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
                alert('An error has ocurred, please try again later.');
            
          }
        });
}