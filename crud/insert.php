<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-group">
<h1 class="text-center">Register your Product</h1>
<input class="form-control my-3 px-auto" type="text" name="name" id="" placeholder="enter name"><br>
<input class="form-control my-3 px-auto" type="number" name="price" id="" placeholder="enter price"><br>
<input class="form-control my-3 px-auto" type="number" name="stock" id="" placeholder="enter stock"><br>
<input class="form-control my-3 px-auto btn btn-success" type="submit" name="Add" id="" value="Add">
    </form>
    </div>
<?php 

$server="localhost";
$user="root";
$dbpass="";
$dbname="2302B1";

$conn= mysqli_connect($server,$user,$dbpass,$dbname);
if(!$conn){
    die ("failed to connect database");
}


if(isset($_POST['Add'])){

 $pname= $_POST['name'];
 $price= $_POST['price'];
 $stock= $_POST['stock'];

$query="INSERT INTO `products`( `name`, `price`, `stock`) VALUES ('$pname','$price','$stock')";


$result=mysqli_query($conn , $query);

if($result){

echo '<script>alert("Record inserted Succesfully")</script>';

}
else{
   
    echo '<script>alert("Failed to a insert Record")</script>';
    
    }
}

?>
</body>
</html>