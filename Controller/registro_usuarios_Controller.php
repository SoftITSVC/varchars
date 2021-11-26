<?php 

require '../assets/librerias/conexion.php';

$nombreUser     = $_POST['user'];
$correoUser     = $_POST['correo'];
$contrasenaUser     = $_POST['contrasena'];
$rolUser      = $_POST['rol'];

require '../Model/registro_usuariosModel.php';

 ?>