<?php 

$usuario=$_POST['correo'];
$contra=$_POST['contrasena'];

session_start();

$_SESSION['correo'] = $usuario;

$conexion = mysqli_connect("localhost","root","","artesanias");

$query= "SELECT * FROM usuario WHERE correo='$usuario' and contrasena='$contra'";

$resultado=mysqli_query($conexion,$query);

$filas=mysqli_num_rows($resultado);
if ($filas)
{
   
    $consulta = "SELECT rol FROM usuario WHERE correo='$usuario' and contrasena='$contra'";
    $result = $mysqli->query($consulta);

	$row = $result->fetch_assoc();
	$rol =  $row['rol'];

	if($rol == "Soy Cliente"){
		echo '
		    <script>
		    alert(".: Bienvenid@ Cliente :.");
		    window.location="../tienda.php";
		    </script> ';
		    $_SESSION['usuario'] = $usuario;
	}

	else if($rol == "Soy Vendedor"){
		echo '
		    <script>
		    alert(".: Bienvenid@ Cliente :.");
		    window.location="../tienda.php";
		    </script> ';
		    $_SESSION['usuario'] = $usuario;
	}
	/*echo '
		    <script>
		    alert(".: Bienvenid@ Cliente :.");
		    window.location="../tienda.php";
		    </script> ';*/
    //$_SESSION['usuario'] = $usuario;

}
else
{
     echo '
    <script>
    alert(".: ERROR :. \n El usuario NO existe, verifique los datos de acceso.");
    window.location="../login.php";
    </script> ';
      
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>