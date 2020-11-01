<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Put Question</title>
    <style>
        body{
            width:100%;
            height:100%;
            background-color:#e5e5e5;
            display:flex;
            justify-content:center;
            align-items:center;
            overflow:hidden;
        }
        form{
            margin-top:30px;
            padding:10px;
            box-shadow: 0 0 5px black;
            text-align:center;
        }
        input{
            width:300px;
            height:30px;
        }
        footer{
            position:absolute;
            bottom:0;
            left:0;
            height:50px;
            font-size:40px;
            text-align:center;
            box-sizing:border-box;
            padding:5px;
            width:100%;
            background-color:blue;
            color:white;
        }
    </style>
</head>
<body>
    <form action='' method='POST'>
        <h3>Question</h3>
        <input name='question'><br>
        <h3>Option 1</h3>
        <input name='option1'><br>
        <h3>Option 2</h3>
        <input name='option2'><br>
        <h3>Option 3</h3>
        <input name='option3'><br>
        <h3>Option 4</h3>
        <input name='option4'><br>
        <h3>Answer</h3>
        <input name='answer'>
        <br><br><br>
        <input type='submit' name='submit'>
    </form>
</body>
</html>

<?php
    include 'db/connect_db.php';
    if (isset($_POST['submit'])) {
        $q = $_POST['question'];
        $o1 = $_POST['option1'];
        $o2 = $_POST['option2'];
        $o3 = $_POST['option3'];
        $o4 = $_POST['option4'];
        $a = $_POST['answer'];
        $sql = "INSERT INTO test VALUES ('".$q."', '".$o1."', '".$o2."','".$o3."','".$o4."','".$a."')"; 
        if ($conn->query($sql) === TRUE) {
            echo "<footer>Successfully Added</footer>";
        } 
        else {
            echo "<footer>Error : ". $conn->error."</footer>";
        }

    }
?>
