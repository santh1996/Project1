<?php

     ob_start();
     //$errors = array(); 
     //$db = mysqli_connect('localhost','root','','accounts');
     $db = new PDO('mysql:host=localhost;dbname=accounts; charset=utf8mb4','root','',
        array(PDO::ATTR_EMULATE_PREPARES => false, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

     if(isset($_POST["submit"]))
     {
     	if(!empty($_POST["email"]))
     	{
     		$email=$_POST["email"];
     	}
     	 else {
     		$msg="<li>Email is required</li>";
     	}
     	if(empty($msg)){
     		//array_push($errors, "Email is required");
     	//}

     	//if(count($errors)==0){
     		$query=$db->prepare("SELECT username, email FROM users WHERE email=?");
     		$query->execute(array($email));
     		$user=$query->fetchALL(PDO::FETCH_ASSOC);
     	    //$result=mysqli_query($db,$query);
     		//echo $result;
     	}
     
     	   	//if(mysqli_num_rows($result)>0)
     	   	if(!empty($user))
     	   	{
     	   		//$ms='yes';
     	   		//echo "<script>alert('yes');</script>";
     	   		//require_once("forgotpwmail.php");
     	   		require_once("testpwmail.php");
     	   	}
     	   	 else{
     	   		$msg='Email id does not exist';
     	   	}
     	}
     //}
     
    

?>