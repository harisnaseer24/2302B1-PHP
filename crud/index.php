<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        table,tr{
width:100%;
height:50px;
font-size:24px;

        }
        tr>th{
            background-color:black;
            color:white
        }
        tr>td{
            background-color:skyblue;
        }
    </style>
</head>
<body>
    <h1>Connecting with database</h1>
    <?php 
    
require "config.php";
  



    $query="SELECT * FROM `products`";

    $result=mysqli_query($con , $query);
    // print_r($result);

    if(mysqli_num_rows($result) > 0){
        ?>


<table border=1 cellpadding="7px">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
       
    </tr>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['stock']."</td>";
echo "<td>
<a href='update.php?id=".$row['id']."' class='btn btn-success'>Update</a>
<a href='delete.php' class='btn btn-danger'>Delete</a>
</td>";
echo "</tr>";
}
echo "</table>";
    }
    else{
        echo "no records found";
    }

  ?>
</body>
</html>