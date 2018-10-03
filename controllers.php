<?php 
	if ($_POST['key']=='add'){		
	# code...
		$conn = new mysqli('localhost', 'root', '', 'ajax');
		$nombre = $conn->real_escape_string($_POST['nombre']);
		$descripcion = $conn->real_escape_string($_POST['descripcion']);
		$categoria = $conn->real_escape_string($_POST['categoria']);
		$conn->query("INSERT INTO producto (nombre, descripcion, categoria) 
					VALUES ('$nombre', '$descripcion', '$categoria')");
		exit('Success!');	
	}else{
		exit('ERROR');
	}
 