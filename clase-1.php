<?php
    require_once "fn.php";
    // Clase
    $claseNum++;
    $ejNum = 0;
    echo "<article class='desplegable'>";
    echo "<div class='acordion-header open' data-target='clase$claseNum'>";
    echo "<h2>Clase $claseNum: Variables y tipos de variable</h2>";
    echo "</div>";
    echo "<div id='clase" . $claseNum . "' class='clase acordion open'>";
    // Ejercicio
    $ejNum++;
    echo "<div class='acordion-header open' data-target='consigna$claseNum-$ejNum'>";
    echo "<h3>Ejercicio $ejNum</h3>";
    echo "</div>";
    echo "<div id='consigna$claseNum-$ejNum' class='consigna acordion open'>
            Crear las siguientes variables y mostrarlas utilizando echo y var_dump:
                <ol type='a'>
                    <li>Una variable con un número entero.</li>
                    <li>Una variable con un número decimal.</li>
                    <li>Una variable con una cadena, utilizando comillas simples.</li>
                    <li>Una variable con una cadena, utilizando comillas dobles.</li>
                    <li>A la variable del punto a​, asignarle una cadena de caracteres.</li>
                    <li>A la variable del punto c​, asignarle un número decimal.</li>
                    <li>¿Qué sucede con el tipo de dato de las variables del punto e​ y punto f​?</li>
                    <li>¿Qué sucede si a la variable del punto a​ le asignamos otro valor numérico, pero encerrado
                    entre comillas?</li>
                </ol>";        
            codeParse("./clase$claseNum/ej$ejNum.php");
    echo "</div>";
    // end Ejercicio    
    
    // Ejercicio
    $ejNum++;
    echo "<div class='acordion-header open' data-target='consigna$claseNum-$ejNum'>";
    echo "<h3>Ejercicio $ejNum</h3>";
    echo "</div>";
    echo "<div id='consigna$claseNum-$ejNum' class='consigna acordion open'>
    En base a la frase “​Tres tristes tigres tragan trigo en un trigal
    ​ ”, crear una variable por cada palabra, donde el nombre de cada variable indique la posición de la palabra en la frase.<br>
        <ol type='a'>
            <li>¿Se puede asignar como nombre de la variable un número ($1, $2, $3)?</li>
            <li>Asignarle a cada variable su posición numérica escrita como texto (\$uno, \$dos, \$tres).</li>
            <li>Imprimir la frase utilizando todas las variables que declaramos.</li>
            <li>Imprimir una oración, utilizando al menos dos variables ya declaradas en el punto anterior.</li>
        </ol>"; 
        codeParse("./clase$claseNum/ej$ejNum.php");       
    echo "</div>";
    // end Ejercicio 

    
    // Ejercicio
    $ejNum++;
    echo "<div class='acordion-header open' data-target='consigna$claseNum-$ejNum'>";
    echo "<h3>Ejercicio $ejNum</h3>";
    echo "</div>";
    echo "<div id='consigna$claseNum-$ejNum' class='consigna acordion open'>
        Ejecutar el código del archivo ejercicio3.php. Reemplazar en la llamada a la función tipoDato(dato) el parámetro \"dato\" por las distintas variables declaradas en nuestro archivo. Observar si el tipo de dato devuelve true o false."; 
        codeParse("./clase$claseNum/ej$ejNum.php");       
    echo "</div>";
    // end Ejercicio 

    
    // Ejercicio
    $ejNum++;
    echo "<div class='acordion-header open' data-target='consigna$claseNum-$ejNum'>";
    echo "<h3>Ejercicio $ejNum</h3>";
    echo "</div>";
    echo "<div id='consigna$claseNum-$ejNum' class='consigna acordion open'>
        Crear un array numérico con 5 strings de animales diferentes. Luego de esto, ejecutar un ​var_dump para ver los resultados. 
        <ol type='a'>
            <li>Agregar 2 nuevos animales al final del array, y ejecutar otro ​var_dump​ para ver los resultados.</li> 
            <li>Imprimimos la siguiente oración “Me gustan los animales: animal1, animal2, ...” con los 7 animales que declaramos.</li>
            <li>Reemplazar el primer animal por uno nuevo, e imprimir el resultado.</li>
            <li>Agregar un nuevo animal en la posición 100, e imprimir el resultado.</li>
            <li>Agregar un nuevo animal en la posición 16, e imprimir el resultado.</li>
        </ol> 
    "; 
        codeParse("./clase$claseNum/ej$ejNum.php");       
    echo "</div> </article>";
    // end Ejercicio

?>