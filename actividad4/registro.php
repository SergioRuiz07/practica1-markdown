<?php
session_start();
$usuario = $_POST['nombreG'];
$email = $_POST['correo'];
$edad = $_POST['edad'];
$valido = validar($usuario, $email, $edad);
if(empty($valido)){
    echo "Bienvenido " . $usuario;
} else {
    foreach($valido as $nErrores => $fallos){
        echo $fallos.'<br>';
    }
}
function validar($usuario,$email,$edad){
    $errores = array();
    if(empty($usuario)){
        $errores[] = "El nombre de usuario es requerido";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores[]="El formato del correo no es correcto";
    }
    if($edad<18){
        $errores[]="La edad debe ser mayor o igual a 18";
    }

    return $errores;
}