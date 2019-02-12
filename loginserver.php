<?php

     $errors = array();
     $db = mysqli_connect('localhost','root','','accounts');
   
     if (isset($_POST['login'])) {
     	$username = $_POST['username'];
     	$password = $_POST['password'];

      //Solution for SQL Injection--

      //$username = mysqli_real_escape_string($db, $_POST['username']);
      //$password = mysqli_real_escape_string($db, $_POST['password']);
 
     	if(empty($username)){
     		array_push($errors,"Username is required");
     	}  	
     	if(empty($password)){
     		array_push($errors,"Password is required");
     	}

     	if (count($errors) == 0) {
     		  $password1=md5($password);
     		  $query= "SELECT * FROM users WHERE username='$username' AND password='$password1'";
     		  $result=mysqli_query($db,$query);
          //$number = mysqli_num_rows($result);
          //if($number==0) //&& $code===$user)
               //if($_SESSION['username']=$username && $code===$user)
          if (!$result || mysqli_num_rows($result) == 0)
        {
          array_push($errors, "Wrong username or password");
         
        }
          
        //if(mysqli_num_rows($result) == 1)
        else
        {
          $_SESSION['username']=$username;
          //echo $query;
          header('location:home.php');
          //mysqli_free_result ($result);
        }

      } 
   }
   mysqli_close($db);
?>