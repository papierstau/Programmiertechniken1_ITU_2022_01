<?php
    include_once 'inc/conn.php';

    if($connection){
        $ausgabe = "SELECT * FROM users";

        foreach($connection->query($ausgabe) as $row){
            echo $row['ID']." "."<br>";
            echo $row['userName']." "."<br>";
            echo $row['email']." "."<br>";
        }

        $connection = null;
    }
?>