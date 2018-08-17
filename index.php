<?php 
    include('funciones.php');

    $ejNum = 0;
    echo "<h1>Ejercitacion Funciones PHP</h1>";

    $ejNum++;
    echo "<h2>Ejercicio $ejNum</h2>";
    echo "<h3>Con 3 numeros distintos (1, 2 ,3)</h3>";
    echo mayor(1,2,3);

    echo "<h3>Con 2 numeros iguales (2, 3 ,3)</h3>";
    echo mayor(2,3,3);


    echo "<h3>Con  solo 2 numeros (2, 3)</h3>";
    echo mayor(2,3);

    $ejNum++;
    echo "<h2>Ejercicio $ejNum</h2>";

    //Variables
    $numeros = tabla(1, 20);
    $numerosSinLimite = tabla(10);

    echo "<h3>Con limite (1, 20)</h3>";
    foreach($numeros as $key => $value){
        echo "$key => $value <br>";
    }

    echo "<h3>Sin limite (1)</h3>";
    foreach($numerosSinLimite as $key => $value){
        echo "$key => $value <br>";
    }
    var_dump($numerosSinLimite);

    $ejNum++;
    echo "<h2>Ejercicio $ejNum</h2>";
    echo "<h3>Superficie de un triangulo (Base = 10, altura = 20)</h3>";
    echo triangulo(10, 20);
    echo "<br>";

    echo "<h3>Superficie de un Cuadrado (Lado = 10)</h3>";
    echo cuadrado(10);
    echo "<br>";

    echo "<h3>Superficie de un rectangulo (Base = 10, altura = 20)</h3>";
    echo rectangulo(10, 20);
    echo "<br>";

    echo "<h3>Superficie de un circulo (Radio = 10)</h3>";
    echo circulo(10, 20);
    echo "<br>";

    

    
?>
