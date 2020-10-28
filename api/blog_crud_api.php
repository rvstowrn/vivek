<?php
  include '../db/connect_db.php';
  session_start();
  $operation = $_POST['operation'];
  $username = $_SESSION['username'];
  if($operation == 'add_blog'){
    $text = $_POST['text'];
    $topic = $_POST['topic'];

    $target_dir = "../uploads/";
    $uniquesavename=time().uniqid(rand()). '.jpg';
    $target_file = $target_dir . $uniquesavename ;
    $filename = $_FILES["img_input"]["tmp_name"];
    move_uploaded_file($filename,  $target_file);

    $sql = "INSERT INTO blog VALUES ('".$text."', '".$uniquesavename."', '".$username."','".$topic."')"; 
    if ($conn->query($sql) === TRUE) {
        header('location: ../feed.php');
    } 
    else {
        echo "Error : ". $conn->error;
    }
  }
?>