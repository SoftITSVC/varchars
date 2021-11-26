<?php
require '../assets/librerias/conexion.php';

$Select="SELECT*FROM usuario where id_usuario='$id'";
$result=$mysqli->query($Select);
$row=$result->fetch_assoc();

?>