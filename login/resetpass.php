<?php 
require "../partials/config.php";
require "../partials/header.php";


if(isset($_POST['updatepass']))
  {
    $newpassword= mysqli_real_escape_string($con,$_POST['newpass']);
    $cpassword= mysqli_real_escape_string($con,$_POST['cpass']);

    if(isset($_GET['token']))
    {
         $token=$_GET['token'];
    }else{
    $token="";
    }
       if(isset($_GET['email']))
        {
         $email=$_GET['email'];
    }else{
        $email="";
    }

    $check="SELECT * FROM `users` WHERE email='$email' AND token='$token';";
    $result=mysqli_query($con, $check) or die('failed to execute query');
   
   if(mysqli_num_rows($result) > 0)
   {
    $row=mysqli_fetch_assoc($result);
    if($newpassword==$cpassword && !($newpassword=$cpassword=="")){
    $hashpass=password_hash($newpassword, PASSWORD_BCRYPT);
    $newtoken=md5(rand());

        $updatepass="UPDATE `users` SET `password`='$hashpass',`token`='$newtoken' WHERE email='$email' and token='$token';";
        $updatepass_run=mysqli_query($con, $updatepass) or die("failed");
        
        if($updatepass_run){
            echo "<script>alert('Now you can login with new password')
            
            windows.location.href='login.php'
            </script>";
         }
        
          else{
            echo "<script>alert('Failed to update your password')</script>";
           }
        
    }
    else{
        echo "<script>alert('Password does not match')</script>";
}
    }

 else{
    echo "<script>alert('Invalid token')</script>";
 }



}
   
 
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter your new password</title>
</head>
<body>
<div class="container my-4">
    <form action="" method="post" class="form-group">
<h2 class="text-center">Enter your new password</h2>
   
    <input type="password" name="newpass" id="" class="form-control my-2" placeholder="Enter new password">
    <input type="password" name="cpass" id="" class="form-control my-2" placeholder="Confirm password">
  

    <input type="submit" name="updatepass" id="" class="form-control btn btn-primary my-2">
    </form>
</div>    

</body>
</html>