<?php 
require("../partials/config.php");

$id=$_POST['id'];

$query="UPDATE `user_details` SET `status`= 1 WHERE id=$id;";
$result=mysqli_query($con, $query);
if($result){

echo 'Record Restored successfully.';
}

else{
    echo "Failed to restore this record";
}

?>
