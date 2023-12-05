<?php 
require("../partials/config.php");

$query="SELECT * FROM `user_details`;";
$result=mysqli_query($con, $query) or die("Query failed");
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_assoc($result)){
echo'
<tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["uname"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["pass"].'</td>
    <td><button class="btn btn-primary">UPDATE</button></td>
    <td><button class="btn btn-primary">DELETE</button></td>
</tr>';
}

}else{
    echo "no record found.";
}

?>
