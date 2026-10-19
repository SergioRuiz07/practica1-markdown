<?php
session_start();
$nombre = $_SESSION['nombre'];
echo  "Bienvenido, ".$nombre." , tu sesión está activa".'<br>';
echo '<a href="logout.php">Cerrar sesión</a>';