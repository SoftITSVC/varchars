<?php 

require '../assets/librerias/conexion.php';

$buscar = "SELECT correo FROM usuario WHERE correo='$correoUser'";
$result = $mysqli->query($buscar);

$row = $result->fetch_assoc();
$correo =  $row['correo'];

if($correo == $correoUser){

    echo '<script type="text/javascript">
                alert(".: El Ususario ya Existe :.");
                window.location.href="../registro.php";
                </script>';

}
else{
    $consulta = "INSERT INTO usuario (user, correo, contrasena, rol) 
            VALUES ('$nombreUser','$correoUser','$contrasenaUser','$rolUser')";
    $resultado = $mysqli->query($consulta);


    if($resultado > 0){
        echo '<script type="text/javascript">
                alert(".: El registro se realizo con Exito!! :.");
                window.location.href="../login.php";
                </script>';
    }
    else{
        echo '<script type="text/javascript">
                alert(".: Ocurrio un Error :( :.");
                window.location.href="../registro.php";
                </script>';
    }
}






//alertify.success(".: El registro se realizo con Exito!! :.");
 ?>