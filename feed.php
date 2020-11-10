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
            text-align:center;
            margin-bottom:100px;
        }
        .side-msg{
            text-decoration: none;
            font-size: 20px;
            position: absolute;
            top: 75px;
            right: 30px;
            color: #444;
            font-family: cursive;
        }
        .side-msg:hover{
            text-decoration: underline;
        }
        .modal-trigger{
            font-weight:500;
            position:absolute;
            bottom:10px;
        }
        .left_modal{
            right:140px;
        }
        .right_modal{
            right:20px;
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
                        <a class='waves-effect waves-light flat-btn modal-trigger left_modal' onclick='get_comments(`".$row['text']."`,`".$row['author']."`)' href='#view_comments'>View Comments</a>
                        <a class='waves-effect waves-light flat-btn modal-trigger right_modal' onclick='add_comment(`".$row['text']."`,`".$row['author']."`)' href='#add_comment'>Add Comment</a>
                      </div>";
            }
        }
        else{
            echo '<h5> No Feed </h5>';
        }

    ?>
    <a href="./evaluate.php" class='side-msg'>Evaluate Your Blogging Skill</a>
    <a href='./create_blog.php' class="btn-floating btn-large bottom_side">
        <i class="material-icons">add</i>
    </a>

    <div id="add_comment" class="modal">
        <div class="modal-content">
            <h4>Comment</h4>
            <input type=text style='width:50%' >
        </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>

    <div id="view_comments" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
    <script>
        function get_comments(text,author){
            console.log({text,author});
        }
        function add_comment(text,author){
            console.log({text,author});
        }
        

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
        });
    
    </script>
 

</body>
</html>