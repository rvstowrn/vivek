<?php
    session_start();
    echo "<nav>
        <a href='./api/logout.php' class='btn-flat btn-floating btn-large right' style='background-color:#ee6e73'>
            <i class='material-icons'>login</i>
        </a>        
    
            <p class='flow-text'>Welcome " . $_SESSION['username'] . " to the blog</p>
        </nav>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        body{
            width:100vw;
            height:100vh;
            overflow-x:hidden;
        }
        .bottom_side{
            position:fixed;
            bottom:10px;
            right:10px;
        }
        .blog{
            padding:50px;
            height:300px;
            width:80%;
            position:relative;
            margin:50px auto;
            box-shadow: 0 0 5px black;
            border-radius:15px;
        }
        .blog > img{
            width:200px;
            height:200px;
            float:right;
        }
        .blog > div{
            position:absolute;
            bottom:10px;
        }
        nav{
            padding-right:20px;
            
        }
    </style>    
</head>
<body>
    <?php
        include './db/connect_db.php';
        $sql = "SELECT * from blog";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='blog'>
                        <img src='uploads/" . $row["img_src"]."'>
                        <h4 class='text'> " . $row["text"] . " </h4>
                        <div>
                            <p class='flow-text topic right'> " . $row["topic"] . " </p>
                            <h6 class='author'> " . $row["author"] . " </h6>
                        </div>
                      </div>";
            }
        }
        else{
            echo '<h5> No Feed </h5>';
        }

    ?>
    <a href='./create_blog.php' class="btn-floating btn-large bottom_side">
        <i class="material-icons">add</i>
    </a>
 

</body>
</html>