<?php 
include('server.php');
include('Log2.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
	body{
		background-color: #138D75;
	}
</style>

<body>

	<div class="header">
		<h3 style="width: 30%;
       margin: 50px auto 0px;
       color: white;
       background: #138D75;
       text-align: center;
       border: 1px solid #B0C4DE;
       border-bottom: none;
       border-radius: 10px 10px 0px 0px;
       padding: 20px;">New Registration</h3>
	</div>

	
	<form method="get" action="register.php">

	<?php if(isset($success_msg)) { ?>
	    <div class="success_msg"><?php echo $success_msg ?></div>
	<?php } ?> 

	<?php if(isset($msg)) { ?>
		<div class="errormsg"><?php echo $msg; ?></div>
    <?php	} ?>
		<!--display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>				
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email id" name="email">
		</div>
		<div class="form-group">
			<label for="password_1">Password</label>
			<input type="password" class="form-control" id="password_1" placeholder="Enter your password" name="password_1" required>
		</div>
		<div class="form-group">
			<label for="password_2">Confirm Password</label>
			<input type="password" class="form-control" id="password_2" placeholder="Confirm your password" name="password_2" required>
        </div>

   	<!--<div class="form-group">
   		<button type="submit" name="register" class="btn"  aria-disabled="true">Register</button>
        <button type="reset"  class="btn" aria-disabled="true">Reset</button>
    </div>-->
    <div class="form-group">
      <button type="submit" name="register"  class="btn" aria-disabled="true">Register</button>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <button type="reset" name="reset" class="btn"  aria-disabled="true">Reset</button> 
    </div>
    
			<div class="etc-login-form">
				<p>Already a member? <a href="login.php">Sign in</a></p>
				
			</div>
        <!--<div class="input-group">
			<button type="submit" name="register" class="btn" aria-disabled="true">Register</button> 
			<button type="reset" value="Reset" class="btn" aria-disabled="true" style="margin-left: 200px;">Reset</button>
		</div>
		 <p>Already a member? <a href="login.php">Sign in</a></p>-->
		 
	</form>
</body>

</html>