
<?php
    for ($i = 0; $i <= 10; $i++) { 
        echo $i. "<br>";
    }

    // Multidimension
    // Ar(array)ray
    /* $colors = array("blue", ["red","orange"], "green", "1");
    echo $colors[1][1].$colors[2];

    var_dump ($colors); */
    
    $colors = array("blue", "red","orange", "green", "1");

    echo "-----------------------<br>";

    for ($i = 0; $i < count($colors)-1; $i++) { 
        echo $colors[0][$i]. "<br>";
    }

    //$value speichert jeden einzelnen Wert zwischen, 
    //während die foreach-Schleife über das Array läuft
    // foreach($colors as $value){
    //     echo ($value . "<br>");
    // }

    $alter = array("Peter"=>"12", "Benno"=>"15", "Dieter"=>"52");

    foreach($alter as $key => $value){
        echo($key . " = " . $value . "<br>");
    }

    function halloWorld(){
        echo ("<br>Hallo Welt<br>");
    }
    halloWorld();

    function addieren(int $zahl1 , int $zahl2){
        return $zahl1 + $zahl2;
    }

    function helperFunction(){
        halloWorld();
    }

    echo addieren(5, 7);

    helperFunction();

    function prozentRechnung($x , $y){
        return ($x / $y) * 100;
    }

    echo prozentRechnung(100, 300);
    
?>