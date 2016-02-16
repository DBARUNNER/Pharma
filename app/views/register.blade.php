<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistan/Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="{{ URL::route('create-account-post') }}">
		        <h2 class="form-login-heading">Register new user</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
		            @if($errors->has('email'))
		            <span style="color:red;">{{ $errors->first('email') }}</span>
		            @endif
		            <br>
		            <input type="text" class="form-control" placeholder="username" name="username" autofocus>
		            @if($errors->has('username'))
		            <span style="color:red;">{{ $errors->first('username') }}</span>
		            @endif
		            <br>
		            <input type="password" class="form-control" placeholder="password" name="password" autofocus>
		            @if($errors->has('password'))
		            <span style="color:red;">{{ $errors->first('password') }}</span>
		            @endif
		            <br>
		            <input type="password" class="form-control" placeholder="Password again" name="password_again">
		            @if($errors->has('password_again'))
		            <span style="color:red;">{{ $errors->first('password_again ') }}</span>
		            @endif
		            <br>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Register</button>
		            <hr>
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		        </div>
		      </form>	  	 	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
