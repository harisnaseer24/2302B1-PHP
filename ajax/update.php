<?php 
require("../partials/config.php");

$id=$_POST['id'];

$query="SELECT * FROM `user_details` where id=$id;";
$result=mysqli_query($con, $query) or die("Query failed");
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_assoc($result)){
  
echo json_encode($row);
}

}else{
    echo "no record found.";
}
?>
