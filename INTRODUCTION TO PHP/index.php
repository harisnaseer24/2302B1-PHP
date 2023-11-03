<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$lang="PHP - hypertext preprocessing";
    print("<h1>Hello world..!</h1>");
    echo "<h2>We are Learning ".$lang."</h2>";

$A=3454545;//INT
$a=67.9;//Float
$B="jdhfhd";//String
$b=true;//boolean

echo "$a $A $b $B <br>";

// echo(strlen($lang));
// echo(strrev($lang));
// echo(str_word_count($lang));
// echo(round($a));
// echo(ceil($a));
// echo(floor($a));
// echo(min($a,-42,0));
// echo(cos(60));
// echo(sqrt(729));
// echo(max($a,-42,0));

// +,-,/,*,%-- Arithmetic operator
//comparison operator  <,>,<=,>=,==,===,!=,!==
//logical operators and &&, Or ||, not !, XOR
//assignment operators +=,-=,*=,/=,++,--
// $num=10;
// echo ($num= $num+5);
// echo $num /=5;


$salary=90000;

// if($salary>50000){
// echo "<h2>You have a good salary</h2>";
// }
// elseif($salary==50000){
//     echo "<h2>You have  average salary</h2>";
// }
// else{
//     echo "<h2>You have low salary</h2>";
// }

// if($salary == 90000 and $salary > 95000){
//     echo "<h2>You have a good salary</h2>";
//     }
//     else{
//         echo "<h2>You have low salary</h2>";
//     }

//     $num=25;
// for( $i = 1; $i <=10 ; $i++){
// echo " $num X $i = ".$num*$i."<br>";
// }


$cars=array("Mustang","Buggati","Lamborghini","Porsche","BMW");

// echo ($cars);
echo "<pre>";

print_r($cars);
echo "</pre>";



foreach ($cars as $key => $value) {
    echo "$key => $value<br>";
}


    ?>
</body>
</html>