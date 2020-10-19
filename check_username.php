<?php
    include './db/connect_db.php';
    $username = $_REQUEST["q"];
    $sql = "SELECT * from user where username='".$username."'"; 
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        echo 'invalid';
    }
    else{
        echo 'valid';
    }
?>