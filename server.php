<?php
	 //session_start();
     //$username = "";
     //$email = "";
     $errors = array();

    //connect  to  the database
     $db = mysqli_connect('localhost','root','','accounts');

      // if the register button is clicked
     if (isset($_GET['register'])){
          $username = $_GET['username'];
          $email= $_GET['email'];
          $password_1 = $_GET['password_1'];
          $password_2 = $_GET['password_2'];

          $query="SELECT username,email FROM users WHERE username='$username' OR email='$email' ";
          $result=mysqli_query($db,$query);

          if(!$result || mysqli_num_rows($result)==0)
          {
               $msg="Username or Email already exists";

          } 
               elseif($password_1 !=$password_2){

               $msg="Password does not match";
              }else{
                $password = md5($password_1); //encrypt pw before storing in database
               $sql="INSERT INTO users (username,email,password) VALUES ('$username', '$email', '$password')";
               mysqli_query($db,$sql);
               //mysql_query($sql);
               $success_msg="Registered successfully.<br> Redirecting to Login page...";
               header("Refresh:3; url=login.php");


          }
          } 


    /* // if the register button is clicked
     if (isset($_GET['register'])){
     	$username = $_GET['username'];
     	$email = $_GET['email'];
     	$password_1 = $_GET['password_1'];
     	$password_2 = $_GET['password_2'];

     	//ensure that form fields are filled properly
     	if (empty($username)){
     		array_push($errors,"Username is required");
     	}
     	if(empty($email)){
     		array_push($errors,"Email is required");
     	}
     	if(empty($password_1)){
     		array_push($errors,"Password is required");
     	}

     	if ($password_1 !=$password_2) {
     		array_push($errors, "Password doesn't match");
     	}

     	//if there are no erros,save user to database
     	if (count($errors) == 0){
     		$password = md5($password_1); 
     		$sql="INSERT INTO users (username,email,password) VALUES ('$username', '$email', '$password')";
     		mysqli_query($db, $sql);
     		header('location:login.php');
          }



     }*/
?>