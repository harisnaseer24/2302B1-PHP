<?php 
require "../partials/config.php";
require "../partials/header.php";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register now</title>
</head>
<body>
<div class="container my-4">
    <form action="" method="post" class="form-group">
<h2 class="text-center">Create an account now..!</h2>
    <input type="text" name="username" id="" class="form-control my-2" placeholder="Enter username">
    <input type="email" name="email" id="" class="form-control my-2" placeholder="Enter email">
    <input type="password" name="password" id="" class="form-control my-2" placeholder="Enter password">
    <input type="submit" name="signup" id="" class="form-control btn btn-primary my-2" value="signup">
    </form>
</div>    
<?php 
if(isset($_POST['signup'])){
    $username= mysqli_real_escape_string($con,$_POST['username']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
  $password= mysqli_real_escape_string($con,$_POST['password']);//1

$encryted_pass=password_hash($password, PASSWORD_BCRYPT);//$2y$10$HKVEdIYmIxZIiEoX5zil4uiXh4aeQ/Lbt3XcQIcx5GiSWMytBMhfG

$check="SELECT * FROM `users` WHERE email = '$email';";
$result=mysqli_query($con , $check) or die("failed to run query");
if(mysqli_num_rows($result) > 0){
    echo "<script>alert('User Already registered')</script>";
}
else{
    $add="INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$encryted_pass')";
    $result2=mysqli_query($con, $add) or die("failed to run query");
    if($result){
        echo " <script>alert('Success')</script>";
        header("Location: login.php");
    }else{
        echo " <script>alert('Failed to register.')</script>";
    }
}

}


?>
<?php 