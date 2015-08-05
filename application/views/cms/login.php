<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>VIT University CMS | Login</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="/vit/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/vit/css/bootstrap-glyphicons.css" rel="stylesheet">
		<link href="/vit/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
		
		<!-- Custom CSS -->
		<link href="/vit/css/style_cms.css" rel="stylesheet">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="/vit/js/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>
	
	<!-- Your Code Goes Here. Remember to remove this comment once you've started, you don't need it :) -->
	<div class="navbar" id="navibar">
      <div class="container-fluid">
      	<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
        <a class="navbar-brand" href="./"><img src="/vit/images/logo-2.png" style="width: 100%;" alt="VIT Logo"></a>
        <div class="nav-collapse collapse navbar-responsive-collapse">
        	<br><br>
        	<span class="nav-login">CMS Login Page</span>
        </div>
      </div>
    </div><!-- End of nav bar -->

    <!-- Login form -->
    <div class="container">
    	<div class="page-header">
  			<center><h3>Please login to continue</h3></center>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<!-- consumed -->
			</div>
			<div class="col-lg-3 alertLook">
				<div class="alert alert-success" id="logoutAlert">
					<center>You Have Been Successfully Logged Out</center>
				</div>
				<div class="alert alert-warning" id="sessionExpAlert">
					<center>OOPS! Session Expired</center>
				</div>
				<div class="alert alert-danger" id="idPwdAlert">
					<center>OOPS! ID or Password is incorrect</center>
				</div>
			</div>
		</div><!-- End of alert row -->

		<?php echo form_open('cms/validate'); ?>

			<div class="row" id="loginForm">
				<div class="col-lg-4">
					<!-- consumed -->
				</div>
				<div class="col-lg-5">
					<div class="row">
						<div class="col-lg-6 logForm">
							<input type="text" class="form-control formLook" autocomplete="off" placeholder="User Name" id="userid" name="userid" required />
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-6 logForm">
							<input type="password" class="form-control formLook" autocomplete="off" placeholder="Password" id="password" name="password" required />
						</div>
					</div>
				</div>
			</div><!-- End of row login form -->

			<br>

			<div class="row" id="loginButton">
				<div class="col-lg-5">
					<!-- consumed -->
				</div>
				<center>
				<div class="col-lg-2">
					<button type="submit" class="btn btn-success btn-login" name="loginBtn" id="loginBtn">Login</button>
				</div>
				</center>
			</div><!-- End of row login button -->

		</form>

    </div><!-- End of main contaner -->