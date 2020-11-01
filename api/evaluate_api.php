<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <style>
        body{
            width:100vw;
            height:100vh;
            background-color:#DD2C00;
            display:flex;
            overflow:hidden;
            align-items:center;
            justify-content:center;
            font-size:75px;
            text-align:center;
            color:white;
            letter-spacing:2px;
            font-family: 'Oleo Script', cursive;
        }
        a{
            position:absolute;
            top:25px;
            right:25px;
            text-decoration:none;
            font-size:25px;
            font-family:cursive;
        }
        a:hover{
            text-decoration:underline;
        }
        a:focus{
            color:darkblue;
        }

    </style>
</head>
<body>
    <a href='../feed.php'>Go back to feed</a>
    <?php
        include '../db/connect_db.php';
        $points = 0;
        for ($i=0; $i < 5; $i++) {
            $q = $_POST['question'.$i];
            $a = $_POST['answer'.$i];
            $sql =  "Select * from test where question='".$q."' and answer='".$a."'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                $points = $points + 1;
            }
        }
        echo "Congratulations!!<br>You scored ".$points." points";
    ?>
</body>
</html>
