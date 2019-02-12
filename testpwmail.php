<?php
    

 define("govtinfo", "http://localhost/");
 //$mail=new PHPMailer\PHPMailer\PHPMailer;
  
         require_once('PHPMailer/PHPMailerAutoload.php');
    	 $mail= new PHPMailer();

 //Enable SMTP debug mode

          $mail->SMTPDebug= 0;
 //set PHPMailer to use SMTP
          $mail->isSMTP();
    	  //$mail->isMail();
          $mail->SMTPAuth= true;
          $mail->SMTPSecure='tls';
 //set host name
          $mail->Host='smtp.gmail.com';
          $mail->Port='587';
          //$mail->isHTML();
          $mail->Username='govttinfo@gmail.com';
          $mail->Password='password#123';
          $mail->setFrom('govttinfo@gmail.com','GovtInfo');
          $mail->addAddress($_POST['email']);
          $mail->Subject='Forget Password Recovery';
         // $mail->Body='Hi Test email';

          $mail->Body="<div>Hi ".$user[0]["username"]."<br><br><p>Click the link below to recover your password<br><a href='".govtinfo."resetpw.php?username=".$user[0]["username"]."'>".govtinfo."resetpw.php?username=".$user[0]["username"]."</a><br><br></p>Regards<br>Admin.</div>";
          $mail->isHTML(true);
         

           if(!$mail->send()) {
              $msg='Mailer Error: ' . $mail->ErrorInfo;
                   } else {
                     $success_msg='Message has been sent. Please check your Email';
                    }
       





















?>