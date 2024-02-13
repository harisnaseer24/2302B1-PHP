<?php
// Object Oriented Programming {OOP}

#Object: physical instance of class.

#Class: structure / blue print of an object
#public: anyone can access/use.
#private: only owner can access/use.
#protected: owner and its relatives can access/use.

//Parent
class User{
    public $name,$age;
    private $password;
    protected $email;
    
    //setter
    public function __construct($name="not specified",$age="not specified", $password="not specified",$email="not specified"){
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        $this->password=$password;

    }

public function setPass($pass){
    $this->password=$pass;
    echo
    "Private property password setted.";

}
public function getPass(){
  
    echo $this->password."<br>";

}
    //getter
    public function showData(){
       echo $this->name."<br>";
       echo  $this->age."<br>";
       echo  $this->email."<br>";
       echo  $this->password."<br>";
    }

}
//Creating object
$haris= new User("Haris Naseer",23,"hsdfhdjf","haris@gmail.com");
$haris->showData();

$owais= new User("Owais");
$owais->age=45;
$owais->showData();
// $owais->password="sdghfhdjh";
$owais->setPass("jksdhfdhfjh");
$owais->showData();

// User::$age;


// Pillars OF OOP

#Inheritance:
class Admin extends User{
  public $role; 
  
  public function showAdmin($email){
    $this->email=$email;
    echo '<h1>'.$this->role."</h1>";
    echo $this->name."<br>";
    echo  $this->age."<br>";
    echo  $this->email."<br>";
    $this->getPass();
   
  }

}

$admin= new Admin();
$admin->name="farooq";
$admin->age=23;
$admin->role="Admin rights";
// $admin->email="farooq@gmail.com";
// $admin->password="farooq";

$admin->setPass("abc123xyz");
$admin->showData();
$admin->showAdmin("farooq@gmail.com");
$admin->getPass();

#Polymorphism:

#Abstraction:

#Encapsulation:


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
</head>
<body>
    
</body>
</html>