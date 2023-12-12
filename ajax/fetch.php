<?php 
require("../partials/config.php");

$query="SELECT * FROM `user_details` where status=1;";
$result=mysqli_query($con, $query) or die("Query failed");
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_assoc($result)){
    $id=$row["id"];
echo'
<tr>
    <td>'. $id.'</td>
    <td>'.$row["uname"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["pass"].'</td>
    <td><button class="btn btn-primary updatebtn" data-id="'.$id.'"><i class="fa-solid fa-pen-to-square"></i></button></td>
    <td><button class="btn btn-primary deletebtn" data-id="'.$id.'"><i class="fa-solid fa-trash"></i></button></td>
</tr>';
}

}else{
    echo "no record found.";
}

?>
