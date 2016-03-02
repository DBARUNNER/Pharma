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
	  	
		      <form class="form-login" method="POST" action="{{URL::route('login-post') }}">
		        <h2 class="form-login-heading">
		        @if(Session::has('global'))
		        	<span style="color:red">{{ Session::get('global') }}</span>
		        @else
		        Sign in now
		        @endif
		        </h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
		            @if($errors->has('email'))
		            <span style="color:red;">{{ $errors->first('email') }}</span>
		            @endif
		            <br>
		            <input name="password" type="password" class="form-control" placeholder="Password">
		            @if($errors->has('password'))
		            <span style="color:red;">{{ $errors->first('password') }}</span>
		            @endif
		            <br>
		            <input name="remember" id="remember" type="checkbox"></input>
		            <label for="remember"> Remember me!</label>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
					{{ Form::token() }}
		      </form>	  	
	  			

		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <form id="forgot-password-form" method="post" action="{{ URL::route('recover-account-post')}}">
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" required="required">
		
		                      </div>
		                    
		                      <div class="modal-footer">
		                          <button  data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button  class="btn btn-theme" type="submit">Submit</button>
		                      </div>
		                        </form>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("assets/img/login-page.jpg", {speed: 500});
    </script>
    <!-- custom js script  -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/custom.js') }}"></script>
  </body>
</html>
