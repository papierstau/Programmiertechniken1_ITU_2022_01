<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #Ich bin Zeilenkommentar
        //Ich bin ebenfalls ein Zeilenkommentar
        /*
            Ich bin eine Mehrzeilenkommentar
        */
        $_ichBinEineZahl = 1; #Integer
        $ichBinEineZahl = 15;
        $IchBinEineZahl = 5; #Integer
        $_ich_bin_ein_string = 'Wort'; //String
        $fliessKommaZahl = 2.3; //Float
        $ichBinEinBool = false; //Boolean
        
        echo ($_ich_bin_ein_string);
        print ("<br>Hallo Welt<br>");
        var_dump($_ich_bin_ein_string);
        
        ECHO($ichBinEineZahl ."<br>");
        
        eChO($IchBinEineZahl);

        //create connection

        try {

            $connection = new PDO('mysql:host=localhost;dbname=beispiel;charset=utf8', 'root','Afp@2017');
    
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            echo "<br>Connected successfully<br>";

        } 
        catch(PDOException $e) {
    
            echo "Connection failed: " . $e->getMessage();
    
        }
        if($connection){
            
            $sql = "SELECT * FROM test";
            foreach ($connection->query($sql) as $row) {
            echo $row['id']." "."<br />";
            echo $row['name']."<br /><br />";
        }
        }
        //create connection

        $connection = null;

        if ($connection == null) {
            echo ("connection closed");
        }
        
    ?>
</body>
</html>