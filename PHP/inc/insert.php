<?php

    //Beispiel eines Insert mit Variablen
    //File ist nur Beispiel und funktioniert so nicht, weil kein Formular oder 
    //sonst irgendwie Variablen übergeben oder gesetzt werden!!!!!!
    $userName = $_POST['userName'];
    $userEmail = $_POST['email'];

    require('conn.php');
    $insert = $connection->query(
        'INSERT INTO users(userName, email)
        Values('$userName', '$userEmail');
        ');

    $connection = null;
    
    //Weiterleitung auf andere Seite
    header("LOCATION: ../index.php")
    if ($connection == null) {
        echo"Connection closed";
    }
?>