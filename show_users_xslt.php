<?php
    include './db/connect_db.php';

    $xml = new SimpleXMLElement('<xml/>');


    $sql = "SELECT * from user"; 
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while($user_row = $result->fetch_assoc()) {
            $user_xml = $xml->addChild('user');
            $user_xml->addChild('name', $user_row["name"]);
            $user_xml->addChild('email', $user_row["email"]);
            $user_xml->addChild('username', $user_row["username"]);
            $user_xml->addChild('phone', $user_row["phone"]);
        }    
    }
    else{
        echo 'No Data';
    }
    
    $conn->close();
    // Header('Content-type: text/xml');
    $xsl = new DOMDocument;
    $xsl->load('xmlstyle.xsl');
    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl);
    echo $proc->transformToXML($xml);
    
?>
