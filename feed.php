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
    <title>Feed</title>
</head>
<body>
    <?php
        // include './db/connect_db.php';
        // $sql = "SELECT * from blog";
        // $result = $conn->query($sql);

        // if ($result->num_rows > 0) {
        //     while($row = $result->fetch_assoc()) {
        //         echo "<div class='blog'>
        //                 <div class='text'> " . $row["text"] . " </div>
        //                 <img src='" . $row["imgsrc"] . ">
        //                 <div class='author'> " . $row["author"] . " </div>
        //                 <div class='topic'> " . $row["topic"] . " </div>
        //               </div>";
        //     }
        // }
    ?>
    <a href='./create_blog.php'>Create Blog</a> 

</body>
</html>