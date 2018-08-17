<?php
    $varInt = 5; // Una variable con un numero entero (int)
    $varFloat = 0.5; // Una variable con un numero decimal (float)
    $varSingleString = 'String'; // Una variable con un cadena con comillas simples (string)
    $varDoubleString = "String $varSingleString"; // Una variable con una cadena con comillas dobles y una referencia a una variable
    var_dump($varInt, $varFloat, $varSingleString, $varDoubleString) // var_dump de todas las variables;
?>