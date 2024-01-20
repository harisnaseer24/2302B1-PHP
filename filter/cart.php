<?php 
include("../partials/header.php");
include("../partials/config.php");
include("./nav.php");
?>
<div class="container-fluid mx-2" style="margin-top:120px"> 
<?php 
$subtotal=0;
$getCart="SELECT * FROM `cart` as c inner join cars on c.car_id=cars.id inner join brands as b on cars.brand_id=b.brand_id order by c.cart_id;";
$getCart_run=mysqli_query($con, $getCart) or die("failed");
?>  
            <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Car Name</th>
      <th scope="col">Model</th>
      <th scope="col">Picture</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total Price</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
<?php
               if(mysqli_num_rows( $getCart_run) > 0){

                   while($cartItem=mysqli_fetch_assoc($getCart_run)){
                       
                       $subtotal+=$cartItem['total_price'];
                       
                       ?>
    
  <tbody>
    <tr>
      <th scope="row"><?= $cartItem['cart_id']?></th>
      <td><?= $cartItem['name']?></td>
      <td><?= $cartItem['model']?></td>
      <td><img src="img/<?= $cartItem['image']?>" alt="<?= $cartItem['name']?>" height=100></td>
      <td><?= $cartItem['qty']?></td>
      <td><?= $cartItem['price']?></td>
      <td><?= $cartItem['total_price']?></td>
      <td><i class="fa-solid fa-x"></i></td>
    </tr>
    <tr>

    
                   
            
           
   

<?php 
   }
}
?>
 </tbody>
</table>


<h1 class="display-4">Subtotal:  <?= $subtotal?> PKR</h1>

<button class="btn btn-dark">Proceed to Checkout</button>

</div>


<?php
include("./footer.php");
?>