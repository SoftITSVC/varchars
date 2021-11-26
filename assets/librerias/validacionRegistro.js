funtion validar(){

	var user 		= document.getElementById("user").value;
	var correo 		= document.getElementById("correo").value;
	var contrasena 	= document.getElementById("contrasena").value;
	var contrasena2 = document.getElementById("contrasena2").value;
	var rol 		= document.getElementById("rol").value;
	var check 		= document.getElementById("check").value;

	if(user === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa tu Nombre Completo",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	else if(correo === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa el correo eléctonico",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	else if(contrasena === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa una contraseña",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	else if(contrasena != contrasena2){
		swal({
		  title: "Error",
		  text: "Las contraseñas deben ser iguales",
		  icon: "error",
		  button: true,
		})
		return false;
	}
	else if(rol == "" || rol <= 0){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Selecciona el Tipo de Usuario que eres",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	else if(check === 0){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa una ",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	
}