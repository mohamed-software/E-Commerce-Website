<?php


$id = $_POST['messageid'];

require_once  'connect.php';

$updateMEs = "UPDATE messages SET view = '1' WHERE id = $id";
$query = $conn -> query($updateMEs);


echo "DOne";
