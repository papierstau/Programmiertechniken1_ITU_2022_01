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

        
        include 'inc/for.php';
   
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
        $ichBinNichts = null;
        
        echo ($_ich_bin_ein_string);
        print ("<br>Hallo Welt<br>");
        var_dump($_ich_bin_ein_string."<br>"); 
        
        // Keywords sind nicht case-sensitive (Groß- und Kleinschreibung ist egal)
        // Bei Variablen wird ide Schreibweise beachtet
        ECHO($ichBinEineZahl ."<br>");
        eChO($IchBinEineZahl ."<br>". $_ich_bin_ein_string ."<br>");

        $ergbnis = $_ichBinEineZahl + $ichBinEineZahl;
        $ergbnis2 = $ichBinEineZahl * $IchBinEineZahl;
        $ergbnis3 =  $IchBinEineZahl / $ichBinEineZahl;
        $ergbnis4 =  $IchBinEineZahl % $ichBinEineZahl;
        $ergbnis5 =  ($_ichBinEineZahl + $IchBinEineZahl) % $ichBinEineZahl;
        $ergbnis6 =  $IchBinEineZahl ** $ichBinEineZahl; //Exponentation
        // echo ($ergbnis);
        // echo ($ergbnis2);
        // echo ($ergbnis3);
        // echo ($ergbnis6);

        $a = 5;
        $b = 4; 
        // $c = $a + $b;
        // $a += $b; // $a= $a+$b
        // $a %= $b;
        // echo($a);

        // var_dump ($a == $b);
        // var_dump ($a != $b);
        // var_dump ($a < $b);
        // var_dump ($a > $b);
        // var_dump ($a <= $b);
        var_dump ($a >= $b);
        $wort1 = "Pause";
        $wort2 = " zu kurz";
        $wort1 .= $wort2;
        echo ($wort1 . $wort2 . "<br>");

        $a = 6;
        $b = 4;

        if($a  == 5){
            echo ("ja a ist 5");
        }elseif($a >= $b){
            echo("a ist größer b");
        }elseif($a <= 10){
            echo("a ist kleiner als 10");
        }else{
            echo("a ist nicht 5");
        }

        $x = 8; 
        $y= "Hallo";
        $z = 2.5;
        // or auch als ||
        if ($x == $z or $y == "Hallo") {
            $g = $x + $z;
            echo($g);
        }

        // and auch als &&
        if ($x != $y and $x <= $z) {
            echo ("true");
        }else{
            echo("false");
        }

        $t = true;
        if(!$t){
            echo("false");
        }else{
            echo($y);
        }

        $zahl = 10;
        switch ($zahl) {
            case 1:
                echo(1);
                break;
            
            case 5:
                echo(5);
                break;
            case 10:
                echo(10);
                break;
            default:
                # Kein Fall trifft zu
                break;
        }

        // $whileZahl = 0;
        // while (++$whileZahl <= 10 ) {
        //     if($whileZahl % 2 != 0){
        //     echo("<br>".$whileZahl);
        //     } 
        // }
        
        $do = 5;
        do {
            if($do == 0){

                break;
            }
            $do--;
            echo("<br>".$do);
        } while ($do <= 5);
        
        
        
    ?>
</body>
</html>