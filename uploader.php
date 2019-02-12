<?php
session_start();
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

if( isset( $_POST[ 'Upload' ] ) ) {
    // Where are we going to be writing to?
    $target_path  = "uploads/";
    $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

    // Can we move the file to the upload folder?
    if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
        // No
        echo '<pre>Your file was not uploaded.</pre>';
    }
    else {
        // Yes!
        echo "<pre>{$target_path} succesfully uploaded!</pre>";
    }
}

?> 

<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<div>
		<a href="home.php">Back to Home</a>
	</div>
</body>
</html>