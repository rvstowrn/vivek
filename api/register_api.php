<?php
    include '../db/connect_db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $phone = $_POST['phone'];

    $validation = register_validation($name,$email,$username,$password,$phone);

    $options = ['cost' => 12,];

    $encrypt_password = password_hash($password, PASSWORD_DEFAULT, $options);

    if($validation){
        $sql = "INSERT INTO user VALUES ('".$name."', '".$email."', '".$username."','".$encrypt_password."','".$phone."')"; 
        if ($conn->query($sql) === TRUE) {
            header('location: ../');
        } 
        else {
            echo "Error : ". $conn->error;
        }
    }
    else{
        echo 'Validation Failed';
    }
    
    $conn->close();

    function register_validation($name,$email,$username,$password,$phone){
        return true;
    }
?>