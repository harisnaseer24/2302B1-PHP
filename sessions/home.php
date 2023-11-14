<?php 
session_start();

if(isset($_SESSION['username'])){



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo  $_SESSION["username"] ?> to our website.</h1>
    <p>We will contact you at <?php echo $_SESSION["contact"] ?> </p>
    <a href="./logout.php">LOGOUT</a>
</body>
</html>
<?php 


}
else{
    header("location: login.php");
}
?>