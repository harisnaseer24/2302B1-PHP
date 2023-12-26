<?php 

$_GET['car_id']
?>
<?php 
include("../partials/header.php");
include("../partials/config.php");
include("./nav.php");



?>



</div>
</div>
<div class="container" style="margin-top:150px">
    <div class="row">
        <?php if(isset($_GET['car_id'])){
$car_id=$_GET['car_id'];

$getCar="SELECT * FROM `cars` as c inner join brands as b on c.brand_id=b.brand_id where c.id=$car_id order by c.id desc;";
$getCar_run=mysqli_query($con, $getCar) or die("failed");
               if(mysqli_num_rows( $getCar_run) > 0){
                   while($car=mysqli_fetch_assoc($getCar_run)){
                       ?>
                     <div class="col-lg-6 col-md-6 col-sm-12 my-3" > 
                         <img src="./img/<?=$car['image']?>" class="card-img-top" alt="..." height=300>

                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 my-3" >
    <h5 class="card-title"><?=$car['name']?> <?=$car['model']?></h5>
    <p class="card-text"><?=$car['brand_name']?></p>
    <p class="card-text"><?=$car['price']?> PKR.</p>
    <form action="" method="post">
     <input type="hidden" name="car_id" id="car_id" value="<?=$car_id?>">   
     <input type="number" name="qty" id="qty" placeholder="Enter quantity">   
    <input type="submit" value="Add to cart" class="btn btn-dark" name="addtocart">
    </form>
  </div>
</div>
                     </div>
                       <?php

if(isset($_POST['addtocart'])){
    $cid=$_POST['car_id'];
    $qty=$_POST['qty'];
    $price=$car['price'];
    $totalprice=$qty*$price;
    
 $addtocart="INSERT INTO `cart`( `car_id`, `qty`, `price`, `total_price`) VALUES ('$cid','$qty','$price','$totalprice')";
$addtocart_run=mysqli_query($con, $addtocart) or die("failed");
if($addtocart_run){
    echo '<script>alert("Car Added to cart successfully.")
    window.location.href="index.php";
    </script>';
}else{
    echo'<script>alert("Failed to add car.")
    window.location.href="index.php";
    </script>';
}
    

}
                   }
               }
            }else{
                header("location: index.php");
            }
 
include("./footer.php");
