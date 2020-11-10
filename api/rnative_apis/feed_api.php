<?php
    include '../../db/connect_db.php';

    $xml = new SimpleXMLElement('<feed_xml/>');


    $sql = "SELECT * from blog"; 
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while($feed_row = $result->fetch_assoc()) {
            $feed_xml = $xml->addChild('blog-no-'.$feed_row["img_src"]);
            $feed_xml->addChild('text', $feed_row["text"]);
            $feed_xml->addChild('imgid', $feed_row["img_src"]);
            $feed_xml->addChild('author', $feed_row["author"]);
            $feed_xml->addChild('topic', $feed_row["topic"]);
        }    
    }
    else{
        echo 'No Data';
    }
    
    $conn->close();

    Header('Content-type: text/xml');
    print($xml->asXML());
    
?>
