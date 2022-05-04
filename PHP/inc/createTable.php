<?php
    require('conn.php');

    // Tabelle erstellen
    $createTable = $connection->query('CREATE TABLE users(
        ID INT AUTO_INCREMENT NOT NULL,
        userName VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY(ID)
        )
        ENGINE = INNODB
    ');
    $connection = null;
    if ($connection == null) {
        echo"Connection closed";
    }
?>