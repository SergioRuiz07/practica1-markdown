<?php
$alumnos = [
   "Sergio" => 10,
    "Manuel" => 4,
    "Carlos" => 0,
    "Samuel" => 5,
    "Jaime" => 9,

];

$notaTotal =0;
foreach ($alumnos as $nombre => $nota){
    echo "Nombre $nombre, Nota $nota ".evaluarNota($nota). "\n";
    $notaTotal += $nota;
}

$promedio = $notaTotal / count($alumnos);
echo "El promedio es de $promedio";

function evaluarNota(float $nota):string{
    $mensaje = match(true){
        $nota <=4 => "Suspenso",
        $nota > 4 && $nota < 7 => "Aprobado",
        $nota > 6  && $nota < 9=> "Notable",
        default => "Sobresaliente",
    };
    return $mensaje;
}