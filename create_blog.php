<?php
    session_start();
    echo "<nav>
            <button class='right pink white-text' onclick=window.location.href='api/logout.php';>logout</button>
            <p class='flow-text'>Welcome " . $_SESSION['username'] . " to the blog</p>
        </nav>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/create_blog_style.css" rel="stylesheet">
    <title>Create Blog</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    
</head>
<body>
    <form id="form" action="./api/blog_crud_api.php" method="POST" enctype="multipart/form-data">
        <h3>Post Content</h3>
        <textarea name='text'></textarea><br><br>
        <input name="img_input" type="file"><br><br>
        <label for="topic">Choose a topic:</label>
        <select name="topic" id="topic" form="form">
            <option value="cybersecurity">Cybersecurity</option>
            <option value="machine_learning">Machine Learning</option>
            <option value="web_development">Web Development</option>
            <option value="app_development">App Development</option>
        </select><br><br>
        <button name="operation" value="add_blog">Create Blog</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='./scripts/create_blog_script.js'></script>
</body>
</html>