<?php 

require '../assets/librerias/conexion.php';


$correoVendedor         = $_POST['correo'];
$domicilioVendedor      = $_POST['domicilio'];
$curpVendedor           = $_POST['curp'];
$telefonoVendedor       = $_POST['telefono'];
$codigo_postalVendedor  = $_POST['codigo_postal'];
$rfcVendedor            = $_POST['rfc'];
$fotoVendedor           = addslashes(file_get_contents($_FILES['foto_vendedor']['tmp_name']));
$foto_credencial_f_Vendedor     = addslashes(file_get_contents($_FILES['foto_credencial_f']['tmp_name']));
$foto_credencial_tVendedor      = addslashes(file_get_contents($_FILES['foto_credencial_t']['tmp_name']));
$correo_contactoVendedor      = $_POST['correo_contacto'];

require '../Model/registroVendedoresModel.php';

 ?>