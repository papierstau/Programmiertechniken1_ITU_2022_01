<?php
    require('./conn.php');

    $person = 'users';

    #Ersstellen einer Tabelle mit SQL und PHP
    $createTable1 = $connection->query('CREATE TABLE users(
                    id INT(255) AUTO_INCREMENT NOT NULL, #id als Primärschlüssel - Immer nur einen pro Tabelle
                    user VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    vorname VARCHAR(255) NOT NULL,
                    lastname VARCHAR(255) NOT NULL,
                    PRIMARY KEY(id) 
                    )
                    ENGINE = INNODB
    ');
    $connection = null;

?>
