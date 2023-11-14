<?php 
session_start();
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
    <h1>LOGIN</h1>
    <form action="" method="post">
        <input type="text" name="name" id=""><br>
        <input type="number" name="contactno" id="contact" ><br>
        <input type="submit" name="submit" id="submit" value="login">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $_SESSION['username']=$_POST['name'];
        $_SESSION['contact']= $_POST['contactno'];
        
        header("location: home.php");
    }
    
    
    ?>
    
</body>
</html>