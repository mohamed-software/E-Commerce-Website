<?php
// echo "<pre>";
// print_r($_POST);
// die();
if($_SERVER['REQUEST_METHOD'] == "GET"){
    header("location: ../users.php");
exit();
}

require_once 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$email    = $_POST['email'   ];
$address  = $_POST['address' ];
$priv     = $_POST['priv'    ];
$gender   = $_POST['gender'  ];



        $insertUser = " INSERT INTO  users (username , password , email , address , priv , gender ) VALUES 
        
        ('$username' , '$password' , '$email' , '$address' , '$priv' , '$gender')";





$query = $conn -> query($insertUser);

if ($query){
    header ("location: ../users.php");

}else{
    echo $conn -> error ;
}