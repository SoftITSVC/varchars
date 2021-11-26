funtion validar(){
	var correo 			= document.getElementById("correo").value;
	var domicilio 		= document.getElementById("domicilio").value;
	var curp 			= document.getElementById("curp").value;
	var telefono 		= document.getElementById("telefono").value;
	var codigo_postal 	= document.getElementById("codigo_postal").value;
	var rfc 			= document.getElementById("rfc").value;
	var foto_vendedor 		= document.getElementById('foto_vendedor').value, extension = foto_vendedor.substring(foto_vendedor.lastIndexOf('.'),foto_vendedor.length);
	//var foto_credencial_f 	= document.getElementById("foto_credencial_f").value;
	//var foto_credencial_t 	= document.getElementById("foto_credencial_t").value;
	var correo_contacto 	= document.getElementById("correo_contacto").value;

	if(domicilio === ""){
		alert("No existe el domicilio");
		return false;
	}
	else if(curp === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa el CURP",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	else if(telefono === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa un telefono",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	else if(codigo_postal === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa el codigo postal ",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
	else if(rfc === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa el RFC ",
		  icon: "warning",
		  button: true,
		})
		return false;
	}/*
	else if(foto_vendedor === null){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "No ha seleccionado una imagen",
		  icon: "warning",
		  button: true,
		})
		return false;
	}*/
	else if(document.getElementById('foto_vendedor').getAttribute('accept').split(',').indexOf(extension) < 0){
		swal({
		  title: "Archivo inválido",
		  text: "No se permite la extensión. Solo se aceptan imagenes JPG y PNG",
		  icon: "error",
		  button: true,
		})
		return false;
	}
	else if(correo_contacto === ""){
		swal({
		  title: "Todos los campos son obligatorios",
		  text: "Ingresa el correo eléctonico",
		  icon: "warning",
		  button: true,
		})
		return false;
	}
}