<?php 

require '../assets/librerias/conexion.php';

$consulta = "INSERT INTO vendedor (correo, domicilio, curp, telefono, codigo_postal, rfc, foto_vendedor, foto_credencial_f, foto_credencial_t, correo_contacto) 
			VALUES ('$correoVendedor', '$domicilioVendedor','$curpVendedor','$telefonoVendedor','$codigo_postalVendedor', '$rfcVendedor', '$fotoVendedor', '$foto_credencial_f_Vendedor','$foto_credencial_tVendedor', '$correo_contactoVendedor')";
$resultado = $mysqli->query($consulta);


if($resultado > 0){
	echo '<script type="text/javascript">
            alert(".: El registro se realizo con Exito!! :.");
            </script>';
}
else{
	echo '<script type="text/javascript">
            alert(".: Ocurrio un Error :( :.");
            </script>';
}

//alertify.success(".: El registro se realizo con Exito!! :.");
 ?>