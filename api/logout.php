<?php
    session_start();
    session_destroy();
    if(isset($_COOKIE['username']) and isset($_COOKIE['pass'])){
        $username = $_COOKIE['username'];
        $password = $_COOKIE['pass'];
        setcookie("username", $username, time()-1, "/");
        setcookie("pass", $password, time()-1, "/");
    }
    echo "<h1>Successfully Logged out</h1><br>click <a href='../index.php'>here</a> to login again";
?>
