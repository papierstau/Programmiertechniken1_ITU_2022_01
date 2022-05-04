<?php
    // Datenbankverbindung
    try{
        $username = 'root';
        $password = '';
        $dbName = 'beispiel';

        $connection = new PDO('mysql:host=localhost; dbname=beispiel;charset=utf8', 'root', '');

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo"<br> Connected successfully<br>";
    }
    catch(PDOException $e){
        echo "<br>Connection failed: " . $e -> getMessage();
    }
?>