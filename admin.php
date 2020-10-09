
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign up page</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://codewithawa.com/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
  <!-- <link href="http://codewithawa.com/admins/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --!>

    <!-- reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body">


                        


                        <form role="form" method="post" action="http://codewithawa.com/register">
                            <fieldset>
                                <input type="hidden" name="_token" value="88Hv3EDl8gCol150GZUwbWhlZBM4UiJ8CFRKU5Jv">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input 
                                        type="text" 
                                        name="username" 
                                        value="" 
                                        class="form-control" 
                                        placeholder="Username" 
                                        autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        value="" 
                                        class="form-control" 
                                        placeholder="Email" 
                                        autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <div class="form-group">
                                    <label for="">Password Confirmation</label>
                                    <input class="form-control" placeholder="Password" name="password_confirmation" type="password" value="">
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LciuVUUAAAAAI_lAm0E632hnvnl3IpqvWBcY4XS"></div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="http://codewithawa.com/admins/vendor/jquery/jquery.min.js&quot;></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://codewithawa.com/admins/vendor/bootstrap/js/bootstrap.min.js&quot;></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://codewithawa.com/admins/vendor/metisMenu/metisMenu.min.js&quot;></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://codewithawa.com/admins/dist/js/sb-admin-2.js&quot;></script>

</body>

</html>
