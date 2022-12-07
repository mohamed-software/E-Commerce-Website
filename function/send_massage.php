<?php

// print_r($_POST);



$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$address = $_POST['address'];
$city    = $_POST['city'];
$massage = $_POST['massage'];

require_once '../admin/functions/connect.php';

$insertMes = "INSERT INTO messages (name , email , phone , address , city , massage  )
    VALUES ('$name'  , '$email' , '$phone' , '$address' , '$city' , '$massage')"; 
$queryMess = $conn -> query($insertMes);
if ($queryMess){

    echo '<div class ="alert alert-success" >Massage sent successfully</div>';

}else{

    echo $conn -> error ;
}