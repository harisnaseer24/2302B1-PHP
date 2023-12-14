<?php 
include("../partials/header.php");
include("../partials/config.php");
include "nav.php";
?>
<div class="container" style="margin-top:120px; min-height:70vh">
    <div class="row">
<?php 
$query=$_GET['search'];

$search="SELECT * FROM `cars` as c inner join brands as b on c.brand_id=b.brand_id where c.name like '%$query%' or c.price like '%$query%' or c.model like '%$query%'or b.brand_name like '%$query%' order by id desc;";
$search_run=mysqli_query($con, $search) or die("failed");
               if(mysqli_num_rows( $search_run) > 0){
                   while($car=mysqli_fetch_assoc($search_run)){
                       ?>
                     <div class="col-lg-4 col-md-6 col-sm-12 my-3" data-aos="zoom-out-up">
                     <div class="card">
  <img src="./img/<?=$car['image']?>" class="card-img-top" alt="..." height=300>
  <div class="card-body">
    <h5 class="card-title"><?=$car['name']?> <?=$car['model']?></h5>
    <p class="card-text"><?=$car['brand_name']?></p>
    <a href="#" class="btn btn-dark"><?=$car['price']?> PKR.</a>
  </div>
</div>
                     </div>
                       <?php
                   }
               }
               else{
                echo "<h2 class='text-center display-5'>No Car Found.</h2>";
               }
            
?>
</div>
</div>
<script>
  AOS.init();
</script>
<?php 

include "footer.php";
?>