<?php
    require_once("connect.php");
   

    // session_start();
    // $errors = array();
    // if(!(isset($_POST['firstName']) && !empty($_POST['firstName']))){
    //     $errors['firstName'] = 'firstName';
    // }
    // if(!(isset($_POST['name']) && !empty($_POST['name']))){
    //     $errors['name'] = 'name';
    // }
    // if(!(isset($_POST['email']) && filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) )){
    //     $errors[] = 'email';
    // }
    // if(!(isset($_POST['password']) && strlen($_POST['password'] > 5))){
    //     $errors[] = 'password';
    // }
    // if(!(isset($_POST['address']) && !empty($_POST['address']))){
    //     $errors[] = 'address';
    // }
    // if(! isset($_POST['phone'])){
    //     $errors[] = 'phone';
    // }
    // if(! isset($_POST['gender'])){
    //     $errors[] = 'gender';
    // }
    // if(isset($errors)){
    //     header("Location: ../register.php");
    //     $_SESSION['errors'] = $errors;
    //     exit();
    // }

    $username       = $_POST['firstName'] . ' ' . $_POST['lastName'];
    $email      = $_POST['email'];
    if($_POST['password'] === $_POST['confirmPassword']){
        $password   = md5($_POST['password']);
    }else{
        header("Location: ../register.php?error=passwordNotIdentical");
        exit();
    }
    $address    = $_POST['address'];
    $phone      = $_POST['phone'];
    $gender     = $_POST['gender'];
    $priv       = $_POST['priv'];
    
    $registerQuery = "INSERT INTO users(username, password, email, address, phone, priv, gender) 
        VALUES ('$username','$password','$email','$address','$phone','$priv','$gender')";

    $insert = $conn -> query($registerQuery);
    if(isset($insert)){
        header("Location: ../login.php");
        exit();
    }else{
        header("Location: ../register.php");
    }

?> 
