<?php
	 
     $errors = array();

     $db = mysqli_connect('localhost','root','','accounts');

    
     if (isset($_GET['register'])){
         //if(isset($_SESSION['token']) && $_POST['token']==$_SESSION['token']) {
     	    $stype = $_GET['service'];
     	    $atype = $_GET['type'];
          $name=$_GET['name'];
          $fname=$_GET['fname'];
          $mname=$_GET['mname'];
     	    $dob = $_GET['dob'];
     	    $gen = $_GET['gender'];
          $mstat =$_GET['mstat'];
          $etype=$_GET['etype'];
          $addr=$_GET['address'];
          $baddr=$_GET['baddr'];
          $asdate=$_GET['adate'];
          $mob=$_GET['mobno'];
               
     
     	if(count($errors) == 0){
          $sql="INSERT INTO passport (service,type,name,fname,mname,dob,gender,mstat,etype,address,baddr,adate,mobno) VALUES ('$stype','$atype','$name','$fname', '$mname', '$dob', '$gen', '$mstat', '$etype', '$addr', '$baddr', '$asdate', '$mob')";
          mysqli_query($db, $sql);
          //echo "You Registered Successfully";
           echo "<script type='text/javascript'>alert('You Registered Successfully.')</script>";
          }

      //}
        //else{
        //  echo "Error Loading Page";
        //}
}
       // $token=$_SESSION['token']=md5(uniqid());

?>