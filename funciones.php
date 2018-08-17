<?php
    include_once "./superficies.php";

    
    $numeroMagico = 100;

    function mayor(int $a, int $b, int $c = null){
        if($c == null){
            $c = $numeroMagico;
        }
        
        if($a > $b && $ $a > $c){
            return $a;
        } else if ($b > $a && $b > $c){
            return $b;
        } else if ($c > $a && $c > $b){
            return $c;
        } else {
            return "Se pasaron parametros incorrectos";
        }
    }

    function tabla($base, $limite = null){
        global $numeroMagico;
        $array = [];

        if($limite == null){
            $limite = $numeroMagico;
        } 

        for($i=$base; $i<=$limite; $i++){
            $array[] = $i;
        }

        return $array;
    }


?>