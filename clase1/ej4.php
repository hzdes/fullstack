<?php
    $animales = [
        0 => "Leon",
        1 => "Tigre",
        2 => "Tortuga",
        3 => "Ratón",
        4 => "Gato",
    ];

    // Mostramos el array
    var_dump($animales);

    echo "Me gustan los animales: <br> $animales[0]";
    for($i = 1; $i < count($animales) - 1; $i++){
        echo ", $animales[$i]";
    };
    echo " y " . $animales[count($animales) - 1];
    
    // Añadimos dos animales mas al array $animales
    $animales[] = "Jirafa";
    $animales[] = "Oso Panda";

    // Mostramos los cambios
    var_dump($animales);

    // Reemplazamos $animales[0], que es Leon, por Pez
    $animales[0] = "Pez";

    // Mostramos el cambio
    var_dump($animales);

    // Agregamos dos animales mas en las posiciones 100 y 16
    $animales[100] = "Elefante";
    $animales[16] = "Colibrí";

    // Mostramos el cambio
    var_dump($animales);

    
?>