<?php
//create connection

try {

    /* $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'test'; */

    $connection = new PDO('mysql:host=localhost;dbname=beispiel;charset=utf8', 'root','');

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