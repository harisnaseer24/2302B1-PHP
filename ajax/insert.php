<?php 
require("../partials/config.php");

$id=$_POST['id'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if(!$uname=="" && !$email=="" && !$pass==""){

$query="INSERT INTO `user_details`(`id`, `uname`, `email`, `pass`) VALUES ('$id','$uname','$email','$pass') ON DUPLICATE KEY UPDATE `uname`='$uname',`email`='$email', `pass`='$pass'";
$result=mysqli_query($con, $query) or die("Query failed");
if($result){

echo 'Success.';
}

else{
    echo "Failed to insert a record.";
}
}else{
    echo "All fields are mandatory to fill.";
}
?>
