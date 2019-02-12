<?php

include('resetpwserver.php');
include('Log2.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>

	<link rel="stylesheet" type="text/css" href="style.css">
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/css/bootstrap.min.css"></script>

</head>
<body>

	<div class="header" style="margin-top: 200px;">
	<h3 style="width: 30%;
       margin: 50px auto 0px;
       color: white;
       background: #138D75;
       text-align: center;
       border: 1px solid #B0C4DE;
       border-bottom: none;
       border-radius: 10px 10px 0px 0px;
       padding: 20px;">Reset password</h3>
	</div>
    
	<form id="resetpw" name="resetpw" method="post" >
	
	<?php if(!empty($success_msg)) { ?>
	<div class="success_msg"><?php echo $success_msg ?>
	<?php } ?> 
		
	<?php if(isset($msg)) { ?>
		<div class="errormsg"><?php echo $msg; ?></div>
  <?php	} ?>	
		<div class="form-group">
			<input type="password" class="form-control" name="password_1" placeholder="Enter new password" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password_2" placeholder="Confirm new password" required>
		</div>
	<div class="form-group">
      <button type="submit" name="submit" class="btn" aria-disabled="true">Reset password</button>
  </div>

		<!--<div class="input-group">
	   <button type="submit" style="position: relative; left: 125px; " name="submit" class="btn">Reset password</button>
		</div>-->


	</form>
    


</body>
</html>