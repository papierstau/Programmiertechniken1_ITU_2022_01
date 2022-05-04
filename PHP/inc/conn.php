<?php
    // Datenbankverbindung
    try{
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'beispiel';

        $connection = new PDO('mysql:host='.$servername.'; dbname='.$dbName.';charset=utf8', $username, $password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo"<br> Connected successfully<br>";
    }
    catch(PDOException $e){
        echo "<br>Connection failed: " . $e -> getMessage();
    }
?>