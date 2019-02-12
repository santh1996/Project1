<?php
session_start();
include('pan.php');
include('Log2.php');

$db = mysqli_connect('localhost','root','','accounts');
     $user=$_SESSION['username'];

     if($user==true)
     {

     }
     else
     {
        header('location:front_page.php');
     }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pan Details</title>

	<style type="text/css" back\></style>

	<link rel="stylesheet" type="text/css" href="css/panstyle.css">

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

<div id="form-main">
	<div id="form-div">
		<form class="form" id="msform" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
			
			<div id="corners">
				<p style="font-size: 12px;text-align: right;">
					<font color="red">
						<b>* MANDATORY</b>
					</font>					
				</p>
				<p style="color: #B41200">
					<b>
						<u>
							<font size="3.5">APPLICATION FOR NEW PAN CARD</font>
						</u>
					</b>
					<font style="font-size: 12px" color="red">(Enter All the Details)</font>			
				</p>
			</div>
			<div class="row">
				<!--::before-->
				<div class="col-sm-3">
					
					Applicant's Name
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>
						
					</font>
					<!--<select class="feedback-select1" name="title" id="title" style="width: 117px" required>
						<option value>Select Title</option>
						<option value="1">MR.</option>
						<option value="2">MRS.</option>
						<option value="3">MISS</option>
					</select>-->
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="name" id="name" placeholder="Name" required>
					
				</div>

				<div class="col-sm-3">
					
					Father Name
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>
						
					</font>
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="fname" id="fname" placeholder="Father Name" required>
					
				</div>
				<!--<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="middlename" id="middlename" placeholder="Middle Name">					
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="lastname" id="lastname" placeholder="Last Name">					
				</div>-->
				<!--::after-->
			</div>
			
			<div class="row">
			
				<div class="col-sm-3">
					
					Mobile Number
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>
						
					</font>
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="mobno" id="mobileno" placeholder="Mobile Number" maxlength="10" pattern="[789][0-9]{}" required>
					
				</div>
				<div class="col-sm-3">
					
					Email ID
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>
						
					</font>
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="emailid" id="email" placeholder="E-mail" required>
					
				</div>
				
			</div>
			
				<div class="row">
				
				 <div class="col-sm-3">
					
					Source of Income
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>		
					</font>
				</div>
					<div class="col-sm-3">		
					<select class="feedback-select2" name="income" id="income" onchange="checkincome()" required>
						<option value>Select</option>
						<option value="1">No Income</option>
						<option value="2">Salary</option>
						<option value="3">Business/Profession</option>
						<option value="4">House Property</option>
						<option value="5">Other Source</option>
					</select>
				</div>

				<div class="col-sm-3">
					
					Date of Birth
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>
						
					</font>
				</div>
				<div class="col-sm-3">
					<input type="date" class="feedback-input2" name="dob" id="dob" placeholder="dd/mm/yyyy" required>
					
				</div>
				
		   </div>

		<!--<div class="row">
								<div class="col-sm-3">
					
					Address for Communication
				</div>
				<div class="col-sm-3">
					<input type="radio"  name="addr_communication" id="residence" value="1"> Residence
					<input type="radio"  name="addr_communication" id="office" value="2"> Office		
					
				</div>
				
			</div>-->

			<div id="residence_comm">
				<div class="row">
					
					<div class="col-sm-12">
						<p style="color: #B41200">
							<font size="3"><br>Address</font>							
						</p>
					</div>
					
				</div>
				<div class="row">
					<div class="col-sm-3">
						House NO/Building/Village
					</div>
					<div class="col-sm-3">
						<input type="text" name="village" maxlength="50" value id="address1" class="feedback-input2" placeholder="First Line" oninput="covertuppercase1('address1');" title="Enter your Flat/Door/Block Number">
					</div>
					<div class="col-sm-3">
						Area/Road/Street/P.O.
					</div>
					<div class="col-sm-3">
						<input type="text" name="road" maxlength="50" value id="address2" class="feedback-input2" placeholder="Second Line" oninput="covertuppercase1('address2');" title="Enter your Road Name/Post Office">
						
					</div>
					
				</div>
				<div class="row">
					<div class="col-sm-3">

						City/Town/District
						<font style="font-size: 20px; color: #B41200">
							<b>*</b>
						</font>
					</div>
					<div class="col-sm-3">
						<input type="text" name="city" size="25%" value id="cityname" class="feedback-input2" placeholder="City" required>				

					</div>
					<div class="col-sm-3">

						State/Union Territory
						<font style="font-size: 20px; color: #B41200">
							<b>*</b>
						</font>
					</div>
						<div class="col-sm-3">
						<input type="text" name="state" size="25%" value id="state" class="feedback-input2" placeholder="State" required>				

					</div>					
				</div>
				<div class="row">
					<div class="col-sm-3">

						Pincode/Zip code
						<font style="font-size: 20px; color: #B41200">
							<b>*</b>
						</font>
					</div>
					<div class="col-sm-3">
						<input type="text" name="pincode" maxlength="7" value pattern="[0-9]+" id="pincode" class="feedback-input2" placeholder="Pincode" required>				
					</div>
					<div class="col-sm-3">

						Country
						<font style="font-size: 20px; color: #B41200">
							<b>*</b>
						</font>
					</div>
					<div class="col-sm-3">
						<input type="text" name="country" id="country" class="feedback-input2" placeholder="Country" required>				
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<br>
					<p style="color: #B41200">
						<font size="3">Documents Submitted as Proof</font>
						<font style="font-size: 20px; color: #B41200;"></font>
					</p>
					
				</div>
				<div class="col-sm-3">
					
					Select Identity Proof
					<font style="font-size: 20px; color: #B41200;">
						<b>*</b>
					</font>
				</div>
				<div class="col-sm-9">
					<select name="idproof" class="feedback-select4" id="idproof" style="padding-right: 2%;" required>
						<option value>Select Identity Proof</option>
						<option value="1">Aadhar Card issued by UIDAI(In Copy)</option>
						<option value="2">PASSPORT(In Copy)</option>
						<option value="3">VOTER ID</option>
						<option value="4">Driving License(In Copy)</option>
						<option value="5">Ration Card having photograph of Applicant(In Copy)</option>
						<option value="6">Arms License(In Copy)</option>
						<option value="7">Others</option>
					</select> 
					
				</div>
				
			</div>
		

			<div class="row">
				<div class="col-sm-12">
					<p style="color: #B41200">
						<b>
							<u>
								<font size="3.5">DECLARATION</font>
							</u>
						</b>
						<br>						
					</p>
					
				</div>
				<div class="col-sm-12">

					I, the Applicant, in the capacity of Himself/Herself do hereby declare what is stated above is true to the best of my knowledge of my information and belief.
					<br>
					<br>
				</div>
					<!--<input type="checkbox" name="pan_source[]" value="pan_source" id="pan_source" class="pan_checkbox" required>
					<a href="../../terms/" target="_blank">
						<b>
							<u>I Agree To ALL Terms And Conditions</u>
						</b>
					</a>-->
					<input type="submit" name="send" style="float: right;" class="next action-button" value="Submit">
					<input type="reset" style="float: left;" class="next action-button" value="Reset">
				<!--<div class="form-group">
      				<button type="submit" name="register" class="btn" aria-disabled="true">Submit</button> 
      				<button type="reset" value="Reset" class="btn" aria-disabled="true">Reset</button>
    			</div>-->
					
				</div>
			</div>
		
		
		
			
			
		</form>
	</div>
</div>


</body>
</html>