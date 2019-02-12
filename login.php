<?php 
session_start();
include('loginserver.php'); 
include('Log2.php');

//if (isset($_SESSION['login_user']))
	//header("location: home.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
</head>
<style type="text/css">
	body{
		background-color: #138D75;
	}
</style>
<body>


	<div class="header">
		<h2 style="width: 30%;
       margin: 50px auto 0px;
       color: white;
       background: #138D75;
       text-align: center;
       border: 1px solid #B0C4DE;
       border-bottom: none;
       border-radius: 10px 10px 0px 0px;
       padding: 20px;">Log In</h2>
	</div>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<?php include('errors.php'); ?>
		<!--<div class="form-group">
			<label for="usertype">User Type</label>
			<select name="type">
				<option value="-1">Select User Type</option>
				<option value="Admin">Admin</option>
				<option value="User">User</option>
			</select>
		</div>-->
		<div class="form-group">
			<label for="username">Username</label>
			
			<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>		
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			
			<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>

		</div>
		<!--<div class="form-group">
		<img src="gencaptcha.php"/>
		  <input type="text" class="form-control" id="captcha" placeholder="Enter the above captcha here" name="captcha" required> 
		</div>	
        <div class="input-group">
			
			<button type="submit" value="home" onclick="window.location.href='index.php'" class="btn">Home</button>

			<button type="submit" name="login" style="margin-left: 220px;" class="btn">Login</button>
		</div>-->
			
	
    <div class="form-group">
      <button type="submit" name="login"  class="btn" aria-disabled="true">Login</button>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="reset" name="reset" class="btn"  aria-disabled="true">Reset</button> 
    </div>

		
	<div class="etc-login-form">
		<div>
			<p>New user? <a href="register.php">Sign up</a></p>
		</div>
		<div>
			<p><a href="forgotpw.php">Forgot password? </a></p>
		</div>	
	</div>

	</form>
</body>
</html>