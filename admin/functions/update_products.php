<?php
//echo "<pre>";
//print_r($_POST);die;
// if($_SERVER['REQUEST_METHOD'] == "GET"){
// 	header("location: ../users.php");
// 	exit();
// }
require_once 'connect.php';

$id     =    $_POST['id'    ];
$name   =    $_POST['name'  ];          
$price  =    $_POST['price' ];
$image  =    $_FILES['image' ];
$cat_id =    $_POST['cat_id'];

//Images Process
$AllImages = array();
$errors = array();
$uploadedImages =   $_FILES['image'];

$image_name     =   $uploadedImages['name'];
$image_type     =   $uploadedImages['type'];
$image_tmp      =   $uploadedImages['tmp_name'];
$image_size     =   $uploadedImages['size'];
$image_error    =   $uploadedImages['error'];

//Allowed Extensions 
$allowedExtensions = ['jpg','png','gif','jpeg'];
//check if the files is uploaded
if($image_error[0] == '4'){
    $query = "SELECT img_name FROM images WHERE product_id = $id";
    $oldImageQuery  = $conn -> query($query);
    $oldImageName   = $oldImageQuery -> fetch_assoc();
    $finalImage     = $oldImageName['img_name'];
}
else {
    //there are files uploaded
    $filesCount = count($image_name);
    for($i = 0; $i < $filesCount; $i++){
        $image_extension[$i] = strtolower(pathinfo($image_name[$i], PATHINFO_EXTENSION));           
        //Random image name 
        $NewImageName[$i] = uniqid() . '.' . $image_extension[$i];
        
        //check size 
        if($image_size[$i] < 10000){
            $errors[] = "File is large size :D";
        }
        //check file is valid 
        if(!in_array($image_extension[$i], $allowedExtensions)){
            $errors[] = "Invalid image extension";
        }
        //check if no errors 
        if(empty($errors)){
            move_uploaded_file($image_tmp[$i], "../../uploads/$NewImageName[$i]");

            //Save All Images in Array to Send to DB
            $AllImages[] = $NewImageName[$i];
        }else{
            $errors[] = "errors at file number (" . ($i + 1) . ")";
        }
    }
    $finalImage = implode(",", $AllImages);
}

$updateProducts =" UPDATE products set name = '$name' , 
price = '$price' , image = '$image' , cat_id ='$cat_id'  WHERE id = '$id' ";
$query = $conn->query($updateProducts);
if ($query){
    header ("location: ../products.php");
}else {
    echo $conn -> error ;
}
