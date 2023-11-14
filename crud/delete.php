<?php 
require "config.php";

if(isset($_GET['id'])){
    // echo "id found";
$id=$_GET['id'];


$query="DELETE FROM `products` WHERE `id`=$id;";
$result=mysqli_query($con,$query);
if($result){
 echo '<script>alert("Record Deleted Succesfully")</script>';
// header("location : insert.php");


}else{
    echo'<script>alert("Fail to Delete this record")</script>';

}


}else{
    echo "id not found";
}

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
    
</body>
</html>