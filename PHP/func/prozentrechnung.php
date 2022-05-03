<?php
    $x = $_GET['Verkaufspreis'];
    $y = $_GET['Einkaufspreis'];
    function prozentRechnung($x , $y){
        return ($x / $y) * 100;
    }

    echo (prozentRechnung($x, $y). "%");
?>