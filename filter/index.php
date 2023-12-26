<?php 
include("../partials/header.php");
include("../partials/config.php");
include("./nav.php");
?>
<style>
    .abc{
        margin-top:100px;
    }
</style>
<div class="container my-5">
<div class="abc d-flex justify-content-center text-center flex-wrap">
  <?php 
  if(isset($_GET['brand_id'])){
    $active="";
  }else{
    $active="active";
  }
  
  
  
  ?>
<a href="index.php?get=all" class="btn btn-outline-dark rounded-5 mt-5 p-3 mx-auto <?=$active?>">&nbsp;&nbsp;ALL&nbsp;&nbsp;</a>
<?php 
            $getBrands="SELECT * From `brands`;";
            $getBrands_run=mysqli_query($con, $getBrands) or die("failed");
            if(mysqli_num_rows( $getBrands_run) > 0){
                while($brand=mysqli_fetch_assoc($getBrands_run)){
                  if(isset($_GET['brand_id'])){

                
                  if($_GET['brand_id']==$brand['brand_id']){
                    $activecat="active";
                  }else{
                    $activecat="";
                  }  }
                    ?>
                    <a href="index.php?brand_id=<?=$brand['brand_id']?>" class="btn btn-outline-dark rounded-5 mt-5 p-3 mx-auto <?=$activecat?>"><?=$brand['brand_name']?></a>        
                    <?php
                }
            }            
            ?>
</div>
</div>
<div class="container">
    <div class="row">
        <?php if(isset($_GET['brand_id'])){
$brand_id=$_GET['brand_id'];
$getCarsByBrand="SELECT * FROM `cars` as c inner join brands as b on c.brand_id=b.brand_id where c.brand_id=$brand_id order by c.id desc;";
$getCarsByBrand_run=mysqli_query($con, $getCarsByBrand) or die("failed");
               if(mysqli_num_rows( $getCarsByBrand_run) > 0){
                   while($car=mysqli_fetch_assoc($getCarsByBrand_run)){
                       ?>
                     <div class="col-lg-4 col-md-6 col-sm-12 my-3" data-aos="zoom-out-up">
                     <div class="card">
  <img src="./img/<?=$car['image']?>" class="card-img-top" alt="..." height=300>
  <div class="card-body">
    <h5 class="card-title"><?=$car['name']?> <?=$car['model']?></h5>
    <p class="card-text"><?=$car['brand_name']?></p>
    <p class="card-text"><?=$car['price']?> PKR.</p>
    
    <a href="cardetail.php?car_id=<?=$car['id']?>" class="btn btn-dark">View Details</a>
  </div>
</div>
                     </div>
                       <?php
                   }
               }
               else{
                echo "No Car Found.";
               }
            }
            else{
               $getCars="SELECT * FROM `cars` as c inner join brands as b on c.brand_id=b.brand_id order by c.id desc;";

               $getCars_run=mysqli_query($con, $getCars) or die("failed");
               if(mysqli_num_rows( $getCars_run) > 0){
                   while($car=mysqli_fetch_assoc($getCars_run)){
                       ?>
                     <div class="col-lg-4 col-md-6 col-sm-12 my-3" data-aos="fade-up-right">
                     <div class="card">
  <img src="./img/<?=$car['image']?>" class="card-img-top" alt="..." height=300>
  <div class="card-body">
    <h5 class="card-title"><?=$car['name']?> <?=$car['model']?></h5>
    <p class="card-text"><?=$car['brand_name']?></p>
    <p class="card-text"><?=$car['price']?> PKR.</p>
    
    <a href="cardetail.php?car_id=<?=$car['id']?>" class="btn btn-dark">View Details</a>
  </div>
</div>
                     </div>
                       <?php
                   }
               }
               else{
                echo "No Car Found.";
               }
            }
            
            
            ?>
    </div>
</div>







<script>
  AOS.init();
</script>

<?php 
include("./footer.php");
?>