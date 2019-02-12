<?php

 $errors = array();

 $db = mysqli_connect('localhost','root','','accounts');

 if (isset($_GET['submit'])){

     	$name = $_GET['name'];
     	$email = $_GET['email'];
     	$subject = $_GET['subject'];
     	$message = $_GET['message'];

     	if(empty($name)){
     		array_push($errors,"Name is required");
     	}
     	if(empty($email)){
     		array_push($errors,"Email is required");
     	}
     	if(empty($subject)){
     		array_push($errors,"Subject is required");
     	}

     	if(empty($message)){
     		array_push($errors, "Message is required");
     	}

     	if (count($errors) == 0){
     	$sql="INSERT INTO feedback (name,email,subject,message) VALUES ('$name', '$email', '$subject', '$message')";
     	mysqli_query($db, $sql);
     	//echo "Your message($message) has been sent successfully";
     	echo "<script type='text/javascript'>alert('Your message has been sent successfully.')</script>";
     }
     }
?>