<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "accounts";
// Create connection
$db = mysqli_connect("$server", "$user", "$pass", "$dbname");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


	if(isset($_POST['send']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

     	$sql="INSERT INTO feedback (name,email,subject,message) VALUES ('$name', '$email', '$subject', '$message')";
     	mysqli_query($db, $sql);
     	echo "Your message has been sent successfully.";

    }

?>