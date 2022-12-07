<?php 


require_once 'connect.php';	

$id = $_GET['id'];


$del = "DELETE FROM users WHERE id = $id";


if($conn -> query($del)) {

	header("location: ../users.php");

 } else {

 	echo $conn -> error ;

}