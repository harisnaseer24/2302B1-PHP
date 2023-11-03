<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays in PHP</h1>
    <?php 
// Indexed array
$numbers= array(10,20,30,40,50,60);
// echo "$numbers[4]";
// echo "<pre>";
// print_r($numbers);
// echo "</pre>";

// foreach ($numbers as $key => $value) {
// echo "$key: $value <br>";
// }


//Associative array
$employee=[
    "haris"=>"Software Developer",
    "owais"=>"Mern Stack Developer",
    "ebad"=>"Php/Laravel Developer",
    "afzal"=>"Python Developer",
    "usama"=>"Java Developer",
];

// echo "<pre>";
// print_r($employee);
// echo "</pre>";
// foreach ($employee as $key => $value) {
// echo ucwords($key)." works as a <b> $value </b><br>";
// }

//Multidimensional  Indexed array

$result = [

    ["Hasan",25,77],
    ["Haroon",19,65],
    ["Shakeel",21,75],
    ["Shahzaib",22,92],
    ["Wasamat",24,78],
    ["Safeer",25,54]

];

// echo "<pre>";
// print_r($result);
// echo "</pre>";

// echo $result[3][2];
// echo $result[5][0];


echo "<table border=1 cellpadding=5px>
<caption><h2>Student Result</h2></caption>
<tr>
    <th>Name</th>
    <th>Age</th>
    <th>Percentage</th>
</tr>

";
foreach ($result as $key => $value) {
    echo "<tr>";
foreach ($value as $key1 => $value1) {
    echo "<td>$value1 </td>";
}
echo "</tr>";
    };
    echo "</table>";

//Multidimensional Associative array
    
    
$marks=[

    "haris"=>["Computer"=>88,"Maths"=>100,"Physics"=>75],
    "owais"=>["Computer"=>75,"Maths"=>88,"Physics"=>65],
    "ebad"=>["Computer"=>60,"Maths"=>55,"Physics"=>90],
    "afzal"=>["Computer"=>98,"Maths"=>95,"Physics"=>45],
    "usama"=>["Computer"=>18,"Maths"=>25,"Physics"=>35]

];
echo $marks['afzal']['Physics'];
    
    ?>
</body>
</html>