<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>叶落山城秋</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <script type="text/javascript" src="/Admin/assets/js/jquery.min.js"></script>

    <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="/Admin/assets/css/loader-style.css">
    <link rel="stylesheet" href="/Admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/Admin/assets/css/signin.css">






    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/Admin/assets/ico/minus.png">
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<div class="container">



    <div class="" id="login-wrapper">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div id="logo-login">
                    <h1>叶落山城秋
                        <span>v1.3</span>
                    </h1>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-box">
                    <form method="POST" action="/login">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <!--a href="#" class="pull-right label-forgot">Forgot email?</a-->
                            <label for="email" >用户名</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <!--a href="#" class="pull-right label-forgot">Forgot password?</a-->
                            <label for="password">密码</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" name="remember">记住用户名</label>
                        </div>
                        <button class="btn btn btn-primary pull-right" type="submit">
                            登 录
                        </button>
                    </form>
                    <a class="forgotLnk" href="#"></a>

                    <div class="or-box">

                        <center><span class="text-center login-with">Login or <a href="/register"><b>Sign Up</b> </a> </span></center>
                        <div class="row">
                            <div class="col-md-6 row-block">
                                <a href="#" class="btn btn-facebook btn-block">
                                    <span class="entypo-facebook space-icon"></span>Facebook</a>
                            </div>
                            <div class="col-md-6 row-block">
                                <a href="#" class="btn btn-twitter btn-block">
                                    <span class="entypo-twitter space-icon"></span>Twitter</a>

                            </div>

                        </div>
                        <div style="margin-top:25px" class="row">
                            <div class="col-md-6 row-block">
                                <a href="#" class="btn btn-google btn-block"><span class="entypo-gplus space-icon"></span>Google +</a>
                            </div>
                            <div class="col-md-6 row-block">
                                <a href="#" class="btn btn-instagram btn-block"><span class="entypo-instagrem space-icon"></span>Instagram</a>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row-block">
                        <div class="row">
                            <div class="col-md-12 row-block">
                                <a href="/register" class="btn btn-primary btn-block">Create New Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="row-block">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <div style="text-align:center;margin:0 auto;">
        <h6 style="color:#fff;">Copyright(C)2014 ylsc633.com All Rights Reserved<br />
            叶落山城秋</h6>
    </div>

</div>
<div id="test1" class="gmap3"></div>



<!--  END OF PAPER WRAP -->




<!-- MAIN EFFECT -->
<script type="text/javascript" src="/Admin/assets/js/preloader.js"></script>
<script type="text/javascript" src="/Admin/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/Admin/assets/js/app.js"></script>
<script type="text/javascript" src="/Admin/assets/js/load.js"></script>
<script type="text/javascript" src="/Admin/assets/js/main.js"></script>


<script type="text/javascript">

</script>




</body>

</html>
