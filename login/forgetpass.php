<?php 
require "../partials/config.php";
require "../partials/header.php";
//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

function sendRecoverylink($token, $email, $username){
    //Load Composer's autoloader
    require '../vendor/autoload.php';
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'harisnaseer258@gmail.com';                     //SMTP username
        $mail->Password   = 'lmye kanh ixes xnra';                               //SMTP password
        $mail->SMTPSecure = 'TLS';  //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('harisnaseer258@gmail.com', 'The Web Devs');
        $mail->addAddress($email, $username);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'PASSWORD RESET LINK';
        $mail->Body    = 'A request has been generated to reset your password.<b> Please   <a href="http://localhost:82/2302b1%20PHP/login/resetpass.php?token='.$token.'&email='.$email.'">click here</a> to change your password.</b>';
     
        $mail->send();
        echo "<script>alert('Email has been sent to you at $email. Please check your inbox.)</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

if(isset($_POST['reset']))
  {
    $email= mysqli_real_escape_string($con,$_POST['recoveryemail']);
    $token=md5(rand());//56456tghfgeredf34567gh
   
    $sql="SELECT * FROM `users` WHERE email='$email';";
    $result=mysqli_query($con, $sql  ) or die('failed to execute query');
   
   if(mysqli_num_rows($result) > 0)
   {
   $row=mysqli_fetch_assoc($result);
   $id=$row['id'];
   $username=$row['username'];

  $updatetoken="UPDATE `users` SET `token`='$token' WHERE  email='$email';";
  $updatetoken_run=mysqli_query($con, $updatetoken)or die("query failed in updating token");
  if($updatetoken_run){

sendRecoverylink($token, $email, $username);

  }
 else{
    echo "<script>alert('Something went wrong')</script>";
 }
}  
  else{
    echo "<script>alert('Please register first...!')</script>";
   }

}
   
 
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter your email</title>
</head>
<body>
<div class="container my-4">
    <form action="" method="post" class="form-group">
<h2 class="text-center">Enter your email</h2>
   
    <input type="email" name="recoveryemail" id="" class="form-control my-2" placeholder="Enter email">
  
    <a href="signup.php">Create an account now..!</a>
    <input type="submit" name="reset" id="" class="form-control btn btn-primary my-2">
    </form>
</div>    

</body>
</html>