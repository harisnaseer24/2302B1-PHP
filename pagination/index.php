<?php 
require "../partials/header.php";
require "../partials/config.php";
?>
   
</head>
<body>
    
    <?php 
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }

$limit=2;
$offset=($page -1)* $limit; // (2 -1) * 3=3

    // $query="SELECT * FROM `products` 
    // order by name asc limit $offset,$limit ;";
    
    $query="SELECT * FROM `products` limit $offset,$limit ;";

    $result=mysqli_query($con , $query);
    // print_r($result);

    if(mysqli_num_rows($result) > 0){
        ?>
<div class="container">


<table class="table">
  <thead>
  <tr>
        <th scope="col">ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Actions</th>
       
    </tr>
  </thead>
  <tbody>
   
<?php

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<th scope='row'>".$row['id']."</th>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['stock']."</td>";
echo "<td>
<a href='update.php?id=".$row['id']."' class='btn btn-success'>Update</a>
<a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
</td>";
echo "</tr>";
}
echo "
</tbody>
</table>
";
    $sql="SELECT * FROM `products`";
    $result1=mysqli_query($con, $sql) or die("query failed.");

   $totalRecords= mysqli_num_rows($result1);
   $totalPages= ceil($totalRecords/$limit);

echo'

<nav aria-label="Page navigation example" class="d-flex justify-content-center">
  <ul class="pagination">
';
  if($page > 1){

 
  echo'
    <li class="page-item">
      <a class="page-link" href="index.php?page='.($page -1).'" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>'; }

    for($i=1; $i<=$totalPages; $i++){ 

if($i ==$page){
  
$active="active";
}else{
  $active="";
}


    echo'
    <li class="page-item  '.$active.'"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>
   ';
}
if($page < $totalPages){


    echo'
    <li class="page-item">
      <a class="page-link" href="index.php?page='.($page + 1).'" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>';}

    echo'
  </ul>
</nav>
';



}
    else{
        echo "no records found";
    }

  ?>
  </div>
</body>
</html>