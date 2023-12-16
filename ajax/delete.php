<?php 
require("../partials/config.php");

$id=$_POST['id'];

$query="UPDATE `user_details` SET `status`= 0 WHERE id=$id;";
$result=mysqli_query($con, $query);
if($result){

echo 'Record moved to trash.';
}

else{
    echo "Failed to delete this record";
}

?>
