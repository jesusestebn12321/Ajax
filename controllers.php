<?php 
	if ($_POST['key']=='add'){		
	# code...
		$conn = new mysqli('localhost', 'root', '', 'ajax');
		$nombre = $conn->real_escape_string($_POST['nombre']);
		$descripcion = $conn->real_escape_string($_POST['descripcion']);
		$categoria = $conn->real_escape_string($_POST['categoria']);
		$conn->query("INSERT INTO producto (nombre, descripcion, categoria) 
					VALUES ('$nombre', '$descripcion', '$categoria')");
		exit('Success!'.' Registrado con Exito');	
	}else{
<<<<<<< HEAD
		exit('ERROR');
=======
		exit('ERROR!'.'Todos los campos son requeridos');
>>>>>>> 721dc8b2369ad393b94f6f4c2a0c95f925b70363
	}
 