<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php
   echo "<pre>";
   echo "<h2>".$_REQUEST['uname']."</h2>";
   echo "<h2>".$_REQUEST['email']."</h2>";
   echo "<h2>".$_REQUEST['pass']."</h2>";
   echo "</pre>";



    // echo "<pre>";
    // echo "<h2>".$_POST['uname']."</h2>";
    // echo "<h2>".$_POST['email']."</h2>";
    // echo "<h2>".$_POST['pass']."</h2>";
    // echo "</pre>";
    
    
    ?>
</body>
</html>