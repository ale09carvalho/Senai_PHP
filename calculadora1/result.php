<?php
    // funções para cada culculo exceto (pontencia pq ja existe)

function somar($x, $y){
    return $x + $y;
}

function subtrair($x, $y){
    return $x - $y;
}

function multiplicar($x, $y){
    return $x * $y;
}

function dividir($x, $y){
    return $x / $y;
}

function resto ($x, $y){
    return $x % $y;
}

// declaraçao de variavis
    $x = str_replace(",",".",$_POST['x']);
    $y = str_replace(",",".",$_POST['y']);
    $operador = $_POST['operador'];


    //estrutura de desiçao switch case

    switch ($operador){
        case "soma":
            echo somar($x, $y);
            break;

        case "subtração":
            echo subtrair($x, $y);
            break;
        case "multiplicação":
            echo multiplicar($x, $y);
            break;

        case "divisão":
            echo dividir($x, $y);
            break;

        case "resto":
            echo resto($x, $y);
            break;

        case "potência":
            echo pow($x, $y);
            break;
    }

