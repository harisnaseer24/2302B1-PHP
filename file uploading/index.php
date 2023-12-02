<?php 
include "../partials/header.php";
include "../partials/config.php";

if(isset($_POST['register']) && $_SERVER['REQUEST_METHOD']=='POST'){
$Car=$_POST['carname'];
  $CarModel=$_POST['model'];
  $Price=$_POST['price'];
if($_FILES['carimage']['error']==4){

  echo '<script>alert("image not found")</script>';
}else{

$imagename=$_FILES['carimage']['name'];
$tmpname=$_FILES['carimage']['tmp_name'];
$size=$_FILES['carimage']['size'];

$validextension=["png","jpg","jpeg"];
$extension= explode(".",$imagename);//audi.etron.jpg=> [audi ,etron , jpg]
 $extension= strtolower(end($extension));//jpg
// print_r($extension);

if($size > 10000000){
    echo '<script>alert("File is too large.")</script>';
}
elseif(!in_array($extension, $validextension)){
    echo '<script>alert("Not allowed.")</script>';
}
else{
 $newImagename=uniqid();//6564654546dh54jpg
 $newImagename .= ".".$extension;
 $insert="INSERT INTO `cars`( `name`, `model`, `price`, `image`) VALUES ('$Car','$CarModel','$Price','$newImagename')";

 

 $result=mysqli_query($con, $insert) or die("failed to execute");
 if($result){
    move_uploaded_file($tmpname,"img/".$newImagename);
    echo '<script>alert("Successfully inserted.")</script>';
 }
 else{
    echo '<script>alert("Failed to insert.")</script>';
 }
}
}
}

?>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center display-2">Cars Registeration</h1>
            <form action="" class="form-group" method="post" enctype="multipart/form-data">
                <input type="text" name="carname" id="" class="form-control my-3" placeholder="Enter Car Name">
                <input type="number" name="model" id="" class="form-control my-3" placeholder="Enter Car Model">
                <input type="number" name="price" id="" class="form-control my-3" placeholder="Enter Car Price">
                <input type="file" name="carimage" id="" class="form-control my-3" accept=".jpg,.png,.jpeg">
                <input type="submit" name="register" id="" class="form-control my-3 btn btn-dark" >
            </form>
        </div>
    </div>
</div>



</body>
</html>