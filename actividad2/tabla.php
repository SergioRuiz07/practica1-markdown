<?php
$numero = readline("Dime un número");
$Valido = ($numero >= 0) ? true : false;
if ($Valido){
    if($numero == 0) {
        echo "La tabla del 0 siempre es 0";
    } else {
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo $resultado."\n"."<br>";
        }
    }
} else echo "No es valido";
