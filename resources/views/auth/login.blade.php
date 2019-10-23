<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row row-cust">
        <div class="col-md-4">
            <div class="login-div">
                <label style="color: white;">{{ Session::get('failure') }}</label>
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <h4>Login</h4>
                    <div class="form-group flex-cust">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" name="email" class="form-control" />
                    </div>
                    <div class="form-group flex-cust">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <input type="password" name="password" class="form-control" />
                    </div>
                    <div>
                        <label><input type="checkbox" name="remember" class="mr-1">Remember me</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
                <div class="login-links">
                    <a href="{{ route('register') }}">Sign up</a><br>
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
    body{
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
        margin-bottom:.5rem;
    }
</style>
</body>
</html>