<?php
    include '../../db/connect_db.php';
    include './crypt_utils.php';

    $xmlRequest = simplexml_load_string(file_get_contents('php://input'));
    $username = $xmlRequest->username;
    $password = $xmlRequest->password;

    $validation = login_validation($username,$password);
    if($validation){
        $sql = "SELECT * from user where username='".$username."'"; 
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            $user_row = mysqli_fetch_assoc($result);
            $hash = substr( $user_row['password'], 0, 60 );
            if (password_verify($password,$hash)) {
                echo encrypt($user_row['username']);
            } else {
                echo 'wrong password';
            }        
        }
        else{
            echo 'wrong username';
        }
    }
    else{
        echo 'Validation Failed';
    }
    
    $conn->close();

    function login_validation($username,$password){
        return true;
    }
?>