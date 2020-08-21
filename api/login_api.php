<?php
    include '../db/connect_db.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $validation = login_validation($username,$password);
    if($validation){
        $sql = "SELECT * from user where username='".$username."'"; 
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            $user_row = mysqli_fetch_assoc($result);
            $hash = substr( $user_row['password'], 0, 60 );
            if (password_verify($password,$hash)) {
                echo "Username : " . $user_row["username"];   
            } else {
                echo 'Invalid password.';
            }        
        }
        else{
            echo 'login failed';
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