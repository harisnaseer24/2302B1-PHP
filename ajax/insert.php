<?php 
require("../partials/config.php");

$id=$_POST['id'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if(!$uname=="" && !$email=="" && !$pass==""){

$query="INSERT INTO `user_details`(`id`, `uname`, `email`, `pass`) VALUES ('$id','$uname','$email','$pass')";
$result=mysqli_query($con, $query) or die("Query failed");
if($result){

echo 'Record Inserted successfully.';
}

else{
    echo "Failed to insert a record.";
}
}else{
    echo "All fields are mandatory to fill.";
}
?>
