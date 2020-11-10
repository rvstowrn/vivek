<!-- <?php
    include '../db/connect_db.php';

    
    $validation = login_validation($username,$password);
    if($validation){
        $sql = "SELECT * from user where username='".$username."'"; 
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            $user_row = mysqli_fetch_assoc($result);
            $hash = substr( $user_row['password'], 0, 60 );
            if (password_verify($password,$hash)) {
                if(isset($_POST['remember'])){
                    setcookie("username", $username, time()+60*60*24, "/");
                    setcookie("pass", $password, time()+60*60*24, "/");
                }
                session_start();
                $_SESSION['username'] = $username;
                header("location: ../feed.php");
                /* print("<h1>Welcome, $username to our blog!</h1>"); */
                /* echo "Username : " . $user_row["username"]; */   
            } else {
                /* echo 'Invalid password.'; */
                header("location: ../index.php");
            }        
        }
        else{
            /* echo 'login failed'; */
            header("location: ../index.php");
        }
    }
    else{
        echo 'Validation Failed';
    }
    
    $conn->close();

    function login_validation($username,$password){
        return true;
    }
?> -->
