<?php 
require "../partials/config.php";
require "../partials/header.php";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login now</title>
</head>
<body>
<div class="container my-4">
    <form action="" method="post" class="form-group">
<h2 class="text-center">Login to your account..!</h2>
   
    <input type="email" name="loginemail" id="" class="form-control my-2" placeholder="Enter email">
    <input type="password" name="loginpassword" id="" class="form-control my-2" placeholder="Enter password">
    <a href="forgetpass.php">Forget your password?</a>
    <input type="submit" name="login" id="" class="form-control btn btn-primary my-2">
    </form>
</div>    
<?php 
if(isset($_POST['login'])){
    
 $email= mysqli_real_escape_string($con,$_POST['loginemail']);
  $password= mysqli_real_escape_string($con,$_POST['loginpassword']);//string

$sql="SELECT * FROM `users` WHERE email='$email';";
$result=mysqli_query($con, $sql  ) or die('failed to execute query');

if(mysqli_num_rows($result) == 1)
{
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$username=$row['username'];
$registeredPassword=$row['password'];//hash
$registeredEmail=$row['email'];
                           // 1         $2y$10$HKVEdIYmIxZIiEoX5zil4uiXh4aeQ/L
$matchPass=password_verify($password, $registeredPassword);// gives true or false
if($matchPass){
session_start();
$_SESSION["email"]=$registeredEmail;
$_SESSION["username"]=$username;
    echo " <script>alert('Login success.')</script>";
    header("location: home.php");

}else{
    echo " <script>alert('Invalid Credentials.')</script>";
}
}
else{
    echo " <script>alert('Shabash acccount bana kr aao.')</script>";
    header("location: signup.php");
}

}


?>
<?php 