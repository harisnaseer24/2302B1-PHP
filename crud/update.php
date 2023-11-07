<?php 
require "config.php";//for database connection

if($_GET['id']){

$id=$_GET['id'];

$query="SELECT * FROM `products` WHERE `id`=$id;";
$result=mysqli_query($con, $query);

if($result){
   
if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){

$name= $row['name']; 
$price= $row['price']; 
$stock= $row['stock']; 

?>
<div class="container">
    <form action="updatedata.php" method="post" class="form-group">
<h1 class="text-center">Update your Product</h1>
<input class="form-control my-3 px-auto" type="hidden" name="id" id=""  value="<?php echo $id ?>"><br>
<input class="form-control my-3 px-auto" type="text" name="name" id=""  value="<?php echo $name ?>"><br>
<input class="form-control my-3 px-auto" type="number" name="price" id=""  value="<?php echo $price ?>"><br>
<input class="form-control my-3 px-auto" type="number" name="stock" id=""  value="<?php echo $stock ?>"><br>
<input class="form-control my-3 px-auto btn btn-success" type="submit" name="Add" id="" value="Update">
    </form>
    </div>


<?php 






    }
}






}else{
    echo "record not found";
}

   
}
else{
    echo "id not found";
}






?>