<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{ asset('/') }}" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Login Administrator</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="lib_admin/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="lib_admin/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="lib_admin/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="lib_admin/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="lib_admin/assets/css/colors.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="lib_admin/jAlert/dist/jAlert.css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="lib_admin/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="lib_admin/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="lib_admin/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="lib_admin/assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="lib_admin/jAlert/dist/jAlert.min.js"></script>
    <script src="lib_admin/jAlert/dist/jAlert-functions.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="lib_admin/assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">
	@if(session('auth_error'))
        <script>
            $.jAlert({
                'title': 'Error!',
                'content': '{{ session("auth_error") }}',
                'theme': 'red',
                'size': 'md',
                'showAnimation': 'fadeInUp',
                'hideAnimation': 'fadeOutDown',
            });
        </script>
    @endif
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="lib_admin/assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="administrator/login" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login Administrator <small class="display-block">Enter your credentials below</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left {{ empty($errors->messages()['email']) ? '' : 'has-error' }}">
								<input type="email" class="form-control" name="email" placeholder="E-mail">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
								<span class="help-block">{{ empty($errors->messages()['email']) ? '' : showError($errors->messages()['email']) }}</span>
							</div>

							<div class="form-group has-feedback has-feedback-left {{ empty($errors->messages()['password']) ? '' : 'has-error' }}">
								<input type="password" class="form-control" name="password" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								<span class="help-block">{{ empty($errors->messages()['password']) ? '' : showError($errors->messages()['password']) }}</span>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2017. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
