<?php
session_start();
include('voteridserver.php');
$db = mysqli_connect('localhost','root','','accounts');

$userprofile=$_SESSION['username'];

if($userprofile==true)
{

}
else
{
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Voter Details</title>

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
		<form class="form" id="msform" action="voterid.php" method="get">
			<div id="corners">
				<p style="font-size: 12px;text-align: right;">
					<font color="red">
						<b>* MANDATORY</b>
					</font>					
				</p>
				<p style="color: green">
					<b>
						<u>
							<font size="3.5">APPLICATION FOR NEW VOTER ID ENROLMENT</font>
						</u>
					</b>
					<b><font style="font-size: 12px" color="black">(Enter All the Details)</font></b>			
				</p>
			</div>
			<div class="row">
				<!--::before-->
				<div class="col-sm-3">
					
					Full Name
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>					
					</font>
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="firstname" id="firstname" placeholder="First Name" required>
					
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="middlename" id="middlename" placeholder="Middle Name">					
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="lastname" id="lastname" placeholder="Last Name">					
				</div>
				<!--::after-->
			</div>
			<div class="row">
				<!--::before-->
				<div class="col-sm-3">
					
				 Name of Relative of Applicant
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>
						
					</font>
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="ffirstname" id="ffirstname" placeholder="First Name" required>
					
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="fmiddlename" id="fmiddlename" placeholder="Middle Name">					
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="flastname" id="flastname" placeholder="Last Name">					
				</div>
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
					<input type="text" class="feedback-input2" name="mobileno" id="mobileno" placeholder="Mobile Number" maxlength="10" pattern="[789][0-9]{}" required>
					
				</div>
				<div class="col-sm-3">
					
					Email ID
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>
						
					</font>
				</div>
				<div class="col-sm-3">
					<input type="text" class="feedback-input2" name="email" id="email" placeholder="E-mail" required>
					
				</div>
				
			</div>
			
				<div class="row">
				
				 <div class="col-sm-3">
					
					Gender
					<font style="font-size: 20px;color: #B41200;">
						<b>*</b>		
					</font>
				</div>
					<div class="col-sm-3">		
					<select class="feedback-select2" name="gender" id="gender" required>
						<option value>Select</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
						<option value="3">Others</option>
					</select>
				</div>
				<!--<div id="business" style="display: none;">
					<div class="col-sm-3">
						Business/Profession
					</div>
					<div class="col-sm-3">
						<select class="feedback-select2" name="businessprof" id="businessprof" required="required">
						<option value>Select Profession</option>
						<option value="3">ARCHITECTURE</option>
						<option value="7">BUILDERS AND DEVELOPERS</option>
						<option value="4">CHARTERED ACCOUNTANT/ACCOUNTANCY</option>
						<option value="2">ENGINEERING</option>
						<option value="1">MEDICAL PROFESSION AND BUSINESS</option>
						<option value="5">INTERIOR DECORATION</option>
						<option value="6">OTHERS</option>
					    </select>
				   </div>		
			    </div>-->
		   </div>

		<div class="row">
				<!--::before-->
				<div class="col-sm-3">
					
					Address for Communication
				</div>
				<div class="col-sm-3">
					<input type="radio"  name="communication" id="residence" value="1"> Residence
					&nbsp&nbsp<input type="radio"  name="communication" id="office" value="2"> Office		
					
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
				<!--::after-->
			</div>

			<div id="residence_comm">
				<div class="row">
					
					<div class="col-sm-12">
						<p style="color: #B41200">
							<font size="3">Address</font>							
						</p>
					</div>
					
				</div>
				<div class="row">
					<div class="col-sm-3">
						House NO/Building/Village
					</div>
					<div class="col-sm-3">
						<input type="text" name="address1" maxlength="50" value id="address1" class="feedback-input2" placeholder="First Line" oninput="covertuppercase1('address1');" title="Enter your Flat/Door/Block Number">
					</div>
					<div class="col-sm-3">
						Area/Road/Street/P.O.
					</div>
					<div class="col-sm-3">
						<input type="text" name="address2" maxlength="50" value id="address2" class="feedback-input2" placeholder="Second Line" oninput="covertuppercase1('address2');" title="Enter your Road Name/Post Office">
						
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
						<input type="text" name="cityname" size="25%" value id="cityname" class="feedback-input2" placeholder="City" required>				

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
					<!--<div class="col-sm-3">

						Country
						<font style="font-size: 20px; color: #B41200">
							<b>*</b>
						</font>
					</div>
					<div class="col-sm-3">
						<input type="text" name="country" id="country" class="feedback-input2" placeholder="Country" required>				
					</div>
				</div>-->
			</div>

			<div class="row">
				<div class="col-sm-12">
					<br>
					<p style="color: #B41200">
						<font size="3">Documents Submitted as Proof</font>
						<font style="font-size: 20px; color: #B41200;"></font>
					</p>
					
				</div>
				<!--<div class="col-sm-3">
					
					Select Identity Proof
					<font style="font-size: 20px; color: #B41200;">
						<b>*</b>
					</font>
				</div>
				<div class="col-sm-9">
					<select name="idproof" class="feedback-select4" id="idproof" style="padding-right: 2%;" required>
						<option value>Select Identity Proof</option>
						<option value="1">Aadhar Caed issued by UIDAI(In Copy)</option>
						<option value="2">PASSPORT(In Copy)</option>
						<option value="3">VOTER ID</option>
						<option value="4">Driving License(In Copy)</option>
						<option value="5">Ration Card having photograph of Applicant(In Copy)</option>
						<option value="6">Arms License(In Copy)</option>
						<option value="7">Others</option>
					</select> 
					
				</div>
				
			</div>
			<div class="row">-->
				
				<div class="col-sm-3">
					
					Select Address Proof
					<font style="font-size: 20px; color: #B41200;">
						<b>*</b>
					</font>
				</div>
				<div class="col-sm-9">
					<select name="adproof" class="feedback-select4" id="adproof" style="padding-right: 2%;" required>
						<option value>Select Address Proof</option>
						<option value="1">Aadhar Card issued by UIDAI(In Copy)</option>
						<option value="2">PASSPORT(In Copy)</option>
						<option value="4">Driving License(In Copy)</option>
						<option value="5">Ration Card having photograph of Applicant(In Copy)</option>
						<option value="6">Arms License(In Copy)</option>
						<option value="7">Others</option>
					</select> 
					
				</div>
			</div>
				
		
		<!--<div class="row">
				
				<div class="col-sm-3">
					
					Select DOB Proof
					<font style="font-size: 20px; color: #B41200;">
						<b>*</b>
					</font>
				</div>
				<div class="col-sm-9">
					<select name="dobproof" class="feedback-select4" id="dobproof" style="padding-right: 2%;" required>
						<option value>Select DOB Proof</option>
						<option value="1">Aadhar Caed issued by UIDAI(In Copy)</option>
						<option value="2">PASSPORT(In Copy)</option>
						<option value="3">VOTER ID</option>
						<option value="4">Driving License(In Copy)</option>
						<option value="5">Birth Certificate issued by Municipal Authority or any office authorized to issue Birth & Death Certificate by Registrar of Birth and Dearths or the Indian Consultate(In Copy)</option>
						<option value="6">Matriculation certificate or mark sheet of recognised board(In Copy)</option>
						<option value="7">Pension payment order</option>
					</select> 
					
				</div>
				
			</div>-->

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
					<!--<input type="checkbox" name="pan_source[]" value="pan_source" id="pan_source" class="pan_checkbox" required>
					<a href="../../terms/" target="_blank">
						<b>
							<u>I Agree To ALL Terms And Conditions</u>
						</b>
					</a>-->
					<input type="submit" style="float: right;" class="next action-button" name="register" value="Submit">
					<input type="reset" style="float: left;" class="next action-button" value="Reset">
					
				</div>
			</div>
		
		
		
			
			
		</form>
	</div>
</div>


</body>
</html>