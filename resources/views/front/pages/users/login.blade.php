
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Main Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/front/css/style.css')}}">

</head>

<body>
    <div class="container-fluid px-0">
        <div class="flex-main-wrap">
            <div class="art-section">


            </div>
            <div class="form-section">
                <div class="login-form-wrap">

                    <!-- <div class="d-flex justify-content-between mb-4">
                        <h1 class="title">
                            Sign in
                        </h1>
                        <a class="opposite-link" href="">Sign Up</a>
                    </div> -->

                    <button class="btn btn-block btn-google">
                        <i class="flaticon-google-glass-logo icons"></i>
                        Sign in with Google
                    </button>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="my-input">Username or Email address</label>
                            <input id="my-input" class="form-control input-signin" type="text" name=""
                                >
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="mb-0" for="my-input">Password</label>
                                <a class="nav-link forgot-pwd-link" href="#">Forgot password</a>
                            </div>
                            <input id="my-input" class="form-control input-signin" type="password" name=""
                                >
                        </div>
                       

                        <button class="btn btn-login">
                            Log in
                        </button>
                    </form>

                </div>

            </div>
        </div>


    </div>





    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{asset('/front/js/main.js')}}"></script>

    <script src="{{asset('/front/js/editor-config.js')}}"></script>
</body>

</html>