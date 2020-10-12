<?php
    session_start();
    echo "<h1>Welcome " . $_SESSION['username'] . " to the blog</h1>";
    /* echo "<button type='button' href='api/logout.php'>logout</button>"; */
    echo "<button onclick=window.location.href='api/logout.php';>logout</button>"
?>
