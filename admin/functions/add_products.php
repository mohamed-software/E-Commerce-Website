<?php
//echo "<pre>";
//print_r($_POST);die;                                                

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$cat_id = $_POST['cat_id'];

require_once 'connect.php';


$insertProducts= " INSERT INTO 

Products ( name  , price , image ,cat_id)VALUES 

('$name' , '$price' ,'$image', '$cat_id')";

$query = $conn -> query($insertProducts);
if($query){
    header ("location: ../Products.php");

}else{
    echo $conn -> error ;
}
