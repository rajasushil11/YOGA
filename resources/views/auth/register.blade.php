<!DOCTYPE html>
<html>
<head>
    <title> Registration </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="bg">
      <div class="container">
    <div class="row row-cust">
        <div class="col-md-4">
            <div class="login-div">
              <label style="color: white;">{{ Session::get('success') }}</label>
                <form method="POST" action="{{ url('/user/store') }}">
                    {{ csrf_field() }}
                    <h4>Register</h4>
                    
                    <div class="form-group flex-cust">
                       <input type="text" name="name" class="form-control" placeholder="Name" data-parsley-required="true" data-parsley-error-message="Please enter your name." required />
                    </div>
                    
                    <div class="form-group flex-cust">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" data-parsley-type="email" data-parsley-required="true" data-parsley-error-message="Please enter your valid email." data-parsley-trigger="change" required />
                         <span id="error_email"></span>
                    </div>
                    
                    <div class="form-group flex-cust">
                      <input type="password" name="password" id="password" class="form-control" placeholder="Password" data-parsley-required="true" data-parsley-error-message="Please enter your password." required/>
                    </div>
                    
                    <div class="form-group flex-cust">
                        <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Confirm password" data-validation="confirmation" />
                        <span id="error_msg"></span>
                    </div>
                    
                    <div>
                        <label><input type="checkbox" name="remember" class="mr-1" data-parsley-required="true" data-parsley-error-message="Please accept terms and conditions."required >I Agree to <a href="{{ url('/terms-of-service') }}" title="Term and Conditions" target=" _blank" > Terms & Conditions</a></label>
                    </div>
                    
                    <div class="text-center">
                        <input type="submit" name="register" id="register" value="REGISTER" class="btn btn-primary">
                    </div>

                </form>
                <div class="login-links">
                    <p>Already have account?</p>
                    <a href="#">Login</a><br>
                </div>
            </div>
        </div>
    </div>
</div>  
    </div>

  <script>
$(document).ready(function(){

 $('#email').blur(function(){
  var error_email = '';
  var email = $('#email').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(email))
  {    
   $('#error_email').html('<label class="text-danger">Invalid Email</label>');
   $('#email').addClass('has-error');
   $('#register').attr('disabled', 'disabled');
  }
  else
  {
   $.ajax({
    url:"{{ route('register.check') }}",
    method:"POST",
    data:{email:email, _token:_token},
    success:function(result)
    {
     if(result == 'unique')
     {
      $('#error_email').html('<label class="text-success">Email Available</label>');
      $('#email').removeClass('has-error');
      $('#register').attr('disabled', false);
     }
     else
     {
      $('#error_email').html('<label class="text-danger">Email Already Exist</label>');
      $('#email').addClass('has-error');
      $('#register').attr('disabled', 'disabled');
     }
    }
   })
  }
 });
 
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="{{ url('content/js/code.jquery.js')}}"></script>
 <script>
    $(document).ready(function(){
        var $submitBtn = $("#form input[type='submit']");
        var $passwordBox = $("#password");
        var $confirmBox = $("#confirm_password");
        var $errorMsg =  $('<span id="error_msg">Passwords do not match.</span>');

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
            if($confirmBox.val() != "" && $passwordBox.val != ""){
                if( $confirmBox.val() != $passwordBox.val() ){
                    $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($confirmBox);
                }
            }
        }

        function resetPasswordError(){
            $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }  
        }


        $("#confirm_password, #password")
             .on("keydown", function(e){
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode == 13 || e.keyCode == 9) {
                    checkMatchingPasswords();
                }
             })
             .on("blur", function(){                    
                // also check when the element looses focus (clicks somewhere else)
                checkMatchingPasswords();
            })
            .on("focus", function(){
                // reset the error message when they go to make a change
                resetPasswordError();
            })

    });
  </script>


<style>
    body{
        
    }
    .bg{
        background-image:url("./content/img/login.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        color:#fff;
    }
    .row-cust{
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-div{
        background:rgba(0, 0, 76, 0.5);
    }
    .login-div h4{
        padding:2rem 1rem;
        color:#fff;
    }
    .login-div form{
        margin-bottom: 1rem;
    }
    .flex-cust{
        display: flex;
    }
    .login-links a{
        color:#fff;
        text-transform: bolder;
    }
    .flex-cust i{
        color:#fff;
        padding:9px 9px;
        margin:0 5px;
        background:rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }
    .login-div{
        padding:1rem 3rem 1rem 3rem;
        border-radius:.5rem;
    }
    .login-links{
        text-align: center;
    }
    .login-links p{
        color:#fff;
    }
    .login-links p{
        margin-bottom:.5rem;
    }
</style>
</body>



</html>