<?php
    session_start();
    echo "<h1>Welcome " . $_SESSION['username'] . " to the blog</h1>";
    /* echo "<button type='button' href='api/logout.php'>logout</button>"; */
    echo "<button onclick=window.location.href='api/logout.php';>logout</button><br><br><br><hr><br><br><br>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/create_blog_style.css" rel="stylesheet">
    <title>Create Blog</title>
</head>
<body>
    <form action="./api/blog_crud_api.php" method="POST">
        <h3>Post Content</h3>
        <textarea name='text'></textarea><br><br>
        <input name="img_input" type="file"><br><br>
        <select name="topic">
            <option value="">Select Topic</option>
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