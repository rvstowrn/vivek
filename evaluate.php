<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluate</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href='./styles/evaluate_style.css' rel='stylesheet'>
    
</head>
<body>
    <form method='POST' action='./api/evaluate_api.php'>
        <?php
            include './db/connect_db.php';
            $sql =  "select * from test order by RAND() limit 5";
            $result = $conn->query($sql);
            $containers = ['blue','red','green','yellow','cyan'];
            shuffle($containers); 
            $itr = -1;
            while($row = $result->fetch_assoc()) {
                $itr = $itr + 1;
                echo "<div class='block ".$containers[$itr]."' id='".$containers[$itr]."'>
                        <nav class='pushpin-nav ".$containers[$itr]."' data-target='".$containers[$itr]."'>EVALUATE BLOGGING SKILL</nav>
                        <input class='hidden' name='question".$itr."' value='".$row['question']."'>
                        <h3> Q . ".$row['question']."</h3>
                        <div>
                            <input type='radio' value='".$row['option1']."' name='answer".$itr."'>
                            <label>".$row['option1']."</label>
                        </div>
                        <div>
                            <input type='radio' value='".$row['option2']."' name='answer".$itr."'>
                            <label>".$row['option2']."</label>
                        </div>
                        <div>
                            <input type='radio' value='".$row['option3']."' name='answer".$itr."'>
                            <label>".$row['option3']."</label>
                        </div>
                        <div>
                            <input type='radio' value='".$row['option4']."' name='answer".$itr."'>
                            <label>".$row['option4']."</label>
                        </div>
                    </div>
                ";
            }
        ?>
        <button class='bottom_submit'>SUBMIT</button>
    </form>
    <script src='./scripts/evaluate_script.js'></script>
</body>
</html>