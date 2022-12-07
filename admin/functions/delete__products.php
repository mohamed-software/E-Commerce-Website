<?php 


require_once 'connect.php';	

$id = $_GET['id'];


$del_pr = "DELETE FROM products WHERE id = $id";


if($conn -> query($del_pr)) {

	header("location: ../products.php");

 } else {

 	echo $conn -> error ;

}