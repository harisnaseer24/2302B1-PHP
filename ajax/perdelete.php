<?php 
require("../partials/config.php");

$id=$_POST['id'];

$query="DELETE from `user_details` WHERE id=$id;";
$result=mysqli_query($con, $query);
if($result){

echo 'Record DELETED permanently.';
}

else{
    echo "Failed to delete this record";
}

?>
