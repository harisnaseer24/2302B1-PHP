<?php 
$server="localhost";
$username="root";
$dbpass="";
$dbname="2302B1";


$con= mysqli_connect($server,$username,$dbpass,$dbname);

if(!$con){
die("failed to connect database");

}


?>