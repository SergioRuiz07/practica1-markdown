<?php
$contactos = [
    ["nombre"=>"Sergio", "telefono"=>684411302, "email"=>"sergio@gmail.com"],
    ["nombre"=>"Rubén", "telefono"=>690633535, "email"=>"ruben@gmail.com"]
];
$usuario = $_POST["nombreG"];
$numero = $_POST["numero"];
$correo = $_POST["correo"];
$contactos[count($contactos)] =  ["nombre"=>$usuario, "telefono"=>$numero, "email"=>$correo];

echo "<table border='1'>";

echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Teléfono</th>";
echo "<th>Email</th>";
echo "</tr>";
foreach ($contactos as $contacto) {
    echo "<tr>";
    foreach ($contacto as $clave => $valor) {;
        echo "<td>".$valor."</td>";
    }
    echo "</tr>";
}
echo "</table>";