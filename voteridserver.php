 <?php

     $errors = array();   
     //connect  to  the database
     $db = mysqli_connect('localhost','root','','accounts');
     // if the login button is clicked

 if (isset($_GET['register'])){
         //if(isset($_SESSION['token']) && $_POST['token']==$_SESSION['token']) {
          $fname=$_GET['firstname'];
          $mname=$_GET['middlename'];
          $lname=$_GET['lastname'];
          $ffname=$_GET['ffirstname'];
          $fmname=$_GET['fmiddlename'];
          $flname=$_GET['flastname'];
          $mob=$_GET['mobileno'];
          $email=$_GET['email'];
          $gen =$_GET['gender'];
          $com =$_GET['communication'];
     	    $dob = $_GET['dob'];
          $addr1=$_GET['address1'];
     	    $addr2=$_GET['address2'];
          $city =$_GET['cityname'];
          $state=$_GET['state'];
          $pin=$_GET['pincode'];
          $adproof=$_GET['adproof'];
          
               
     	//ensure that form fields are filled properly
         
     	if (empty($fname)){
     		array_push($errors,"firstname is required");
     	}
     	if(empty($ffname)){
     		array_push($errors,"Relative name is required");
     	}
       if (empty($gen)){
               array_push($errors,"gender is required");
          }
     	if(empty($dob)){
     		array_push($errors,"date of birth is required");
     	}
         
      if (empty($addr1)){
        array_push($errors,"adress is required");
      }
         
        

      /* //for popup msg
      if( array_key_exists( "name", $_POST ) && $_POST[ 'name' ] != NULL )  {
    // Feedback for end user
         echo '<pre>Hello ' . $_POST[ 'name' ] . '</pre>';

         if (array_key_exists( "fname", $_POST ) && $_POST[ 'fname' ] != NULL) {
          echo '<pre>Hello ' . $_POST[ 'fname' ] . '</pre>';

           if (array_key_exists( "mname", $_POST ) && $_POST[ 'mname' ] != NULL) {
          echo '<pre>Hello ' . $_POST[ 'mname' ] . '</pre>';
         }

         }
           
            }*/

     	//if there are no erros,save user to database
     	if (count($errors) == 0)
          {
                 $sql="INSERT INTO `voter_id`(`firstname`, `middlename`, `lastname`, `ffirstname`, `fmiddlename`, `flastname`, `mobileno`, `email`, `gender`, `communication`, `dob`, `address1`, `address2`, `cityname`, `state`, `pincode`, `adproof`) VALUES ('$fname','$mname','$lname','$ffname','$fmname','$flname','$mob','$email','$gen','$com','$dob','$addr1','$addr2','$city','$state','$pin','$adproof')";
               mysqli_query($db, $sql);
               echo "<script>alert('Registered successfully')</script>";
              // header('location:form_boot.php');
          }
     
        }

        /*else
          echo "Error loading page";
      }*/



     //$token=$_SESSION['token']=md5(uniqid());
?>