<?php 
require "config.php";

$id=$_POST['id'];
$name= $_POST['name']; 
$price= $_POST['price']; 
$stock= $_POST['stock']; 

$query="UPDATE `products` SET `name`='$name',`price`='$price',`stock`='$stock' WHERE`id`=$id;";
$result=mysqli_query($con, $query);
if($result){

    echo '<script>alert("Record Updated Succesfully")</script>';
    header("location: index.php");
    
    }
    else{
       
        echo '<script>alert("Failed to a update this Record")</script>';
        
        }


?>