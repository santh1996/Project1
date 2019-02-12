<?php 
session_start();
include('aadharserver.php');
//include('Log2.php'); 

$db = mysqli_connect('localhost','root','','accounts');
     $user=$_SESSION['username'];

     if($user==true)
     {

     }
     else
     {
        header('location:index.php');
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aadhar</title>
   <link rel="stylesheet" type="text/css" href="styleform.css">

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

<div style="margin: 10px 20px;">
<p>Back to<a href="home.php"> <u style="color: white;">Home</u></a> page</p>
</div>

<div class="container">
  <h2 style="width: 60%;
       margin: 20px auto 0px;
       color: white;
       background: #138D75;
       text-align: center;
       border: 1px solid #B0C4DE;
       border-bottom: none;
       border-radius: 10px 10px 0px 0px;
       padding: 20px;">Aadhar Enrolment Form</h2>
  
 

  <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>" style="margin-bottom: 50px;">
    <?php include('errors.php'); ?>

    <div class="form-group">
          <label for="service">Pre-Enrolment ID</label>
      <input type="text" class="form-control" id="service" placeholder="Pre-Enrolment ID" name="peid">
    </div>
    <div class="form-group">
          <label for="type">NPR Receipt/TIN Number</label>
             <input type="text" class="form-control" id="type" placeholder="NPR Receipt/TIN Number" name="nprno">
     </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter fullname" name="name" required>
    </div>
    <div class="form-group">
      <label for="fname">Father's Name</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter father's name" name="fname">
    </div>
     <div class="form-group">
          <label for="mname">Mother's Name</label>
      <input type="text" class="form-control" id="mname" placeholder="Enter mother's name" name="mname">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" id="dob" placeholder="mm/dd/yy" name="dob" required>
    </div>
    
      <label for="gender">Gender: </label>
      <ul><input type="radio" name="gender" value="male" required> Male</ul>
      <ul><input type="radio" name="gender" value="female" required> Female</ul>
      <ul><input type="radio" name="gender" value="other" required> Other</ul>
    
        
        <div class="form-group">
          <label for="mstat">Marital Status</label>
      <input type="text" class="form-control" id="mstat" placeholder="SINGLE/MARRIED" name="mstat">
    </div>
       <div class="form-group">
          <label for="etype">Employment Type</label>
      <input type="text" class="form-control" id="etype" name="etype">
    </div>
       <div class="form-group">
          <label for="address">Present Residential Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your full address" name="address" required>
    </div>
       <div class="form-group">
          <label for="baddr">Place of Birth</label>
      <input type="text" class="form-control" id="baddr" placeholder="Birth address" name="baddr">
    </div>
       <div class="form-group">
          <label for="adate">Application Submitted Date</label>
      <input type="date" class="form-control" id="adate"  name="adate" required>
    </div>
       <div class="form-group">
          <label for="mobno">Mobile Number</label>
      <input type="text" class="form-control" id="mobno" placeholder="10 digit Mobile No" name="mobno">
    </div>
    <!--<input type="hidden" name="token" value="<?php  $token;?>">-->
     <div class="form-group">
      <button type="reset" value="Reset"  class="btn" aria-disabled="true">Reset</button>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="register" class="btn"  aria-disabled="true">Submit</button> 
    </div>
    <!--<div class="form-group">
      <button type="submit" name="register" class="btn" aria-disabled="true">Submit</button> 
      <button type="reset" value="Reset" class="btn" aria-disabled="true">Reset</button>
    </div>-->
  </form>

</div>

</body>
</html>

