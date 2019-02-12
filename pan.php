<?php

	//$errors = array();
    $db = mysqli_connect('localhost','root','','accounts');

    if (isset($_GET['register'])){
         //if(isset($_SESSION['token']) && $_POST['token']==$_SESSION['token']) {
          $name = $_GET['name'];
          $fname = $_GET['fname'];
          $mobno = $_GET['mobno'];
          $email = $_GET['emailid'];
          $income = $_GET['income'];
          $dob = $_GET['dob'];
          $village = $_GET['village'];
          $road = $_GET['road'];
          $city = $_GET['city'];
          $state = $_GET['state'];
          $pincode = $_GET['pincode'];
          $country = $_GET['country'];
          $idproof = $_GET['idproof'];

          //if(count($errors) == 0){
          $query =" INSERT INTO `pancard`(`name`, `fname`, `mobno`, `emailid`, `income`, `dob`, `village`, `road`, `city`, `state`, `pincode`, `country`, `idproof`) VALUES ('$name','$fname','$mobno','$email','$income','$dob','$village','$road','$city','$state','$pincode','$country','$idproof')";
          mysqli_query($db, $query);
          //echo "You Registered Successfully";
          echo "<script type='text/javascript'>alert('You Registered Successfully.')</script>";
          //}

      //}
        //else{
        //  echo "Error Loading Page";
        //}
	}
       // $token=$_SESSION['token']=md5(uniqid());

?>