<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
$server="localhost";
$username="root";
$dbpass="";
$dbname="2302B1";


$con= mysqli_connect($server,$username,$dbpass,$dbname);
// $con= mysqli_connect("localhost","root","","2302B1");

if(!$con){
die("failed to connect database");
}else{
    // echo "Db Connected";

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
       
    </tr>


<?php

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['stock']."</td>";
echo "</tr>";
}
echo "</table>";
    }
    else{
        echo "no records found";
    }
}
  ?>
</body>
</html>