<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ url('adm') }}//plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ url('adm') }}//plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ url('adm') }}//dist/css/adminlte.min.css?v=3.2.0">
    
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Admin</b>cPanel</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" class="form-control w-100" placeholder="Email">
                        <div class="help-block">
                         @error('email') {{$message}} @enderror
                        </div>
                

                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control w-100" placeholder="Password">
                        <div class="help-block">
                         @error('password') {{$message}} @enderror
                        </div>
                
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login In</button>
                        </div>

                    </div>
                </form>
   

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>
    </div>
</body>

</html>