<?php

//$db = mysqli_connect('localhost','root','','accounts');
 $db = new PDO('mysql:host=localhost;dbname=accounts; charset=utf8mb4','root','',
        array(PDO::ATTR_EMULATE_PREPARES => false, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(isset($_POST["submit"]))
{
	$username=$_GET["username"];
	$password_1=$_POST["password_1"];
	$password_2=$_POST["password_2"];

	if($password_1==$password_2){

		//$password_1=password_hash($password_1,PASSWORD_DEFAULT);
		$password_1=md5($password_1);
		$stmt=$db->prepare("UPDATE users SET password= ? WHERE username= ?");
		//$query="UPDATE users SET password=$password WHERE email=$email";
		$stmt->execute(array($password_1,$username));

		/*if(mysqli_query($db,$query))
		{
			$success_msg="Password is reset successfully";

		}
		else{
			$msg="Password does not matched";

		}
	}*/
		$affected_rows=$stmt->rowCount();

		if($affected_rows){
			$success_msg="Password is reset successfully.<br> Redirecting...";
			header("Refresh:3; url=login.php");
		} else{
			$msg="Failed: <br> Password not updated";
		}
	} else{
		$msg="Password does not matched";
	}

}

?>