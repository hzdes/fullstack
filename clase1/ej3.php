<?php
    $variable01 = true;    
    $variable02 = false;
    $variable03 = 0;
    $variable04 = 1;
    $variable05 = 6;
    $variable06 = '';
    $variable07 = "3";
    $variable08 = "true";
    $variable09 = 'false';
    $variable10 = null;
    
    $varInt = 5; // Una variable con un numero entero (int)
    $varFloat = 0.5; // Una variable con un numero decimal (float)
    $varSingleString = 'String'; // Una variable con un cadena con comillas simples (string)
    $varDoubleString = "String $varSingleString"; // Una variable con una cadena con comillas dobles y una referencia a una variable
   
    function tipoDato($varN)
    {
        if ( $varN == true )
        {
            echo 'el valor ' . $varN . ' es verdadero.<br>';
        }
        else
        {
            echo 'el valor ' . $varN . ' es falso.<br>';
        }
    }
    
    tipoDato($variable01);
    tipoDato($varInt);
    tipoDato($varFloat);
    tipoDato($varSingleString);
    tipoDato($varDoubleString);
    tipoDato(0);
    tipoDato(false);
    tipoDato("");
    tipoDato(null);

    echo "<b>Nota</b>: Las variables que hagan referencia a 0, \"0\", false o \"\", dan falsos logicos."
?>