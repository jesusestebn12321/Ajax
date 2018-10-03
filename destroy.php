<?php 
$conn = new mysqli('localhost', 'root', '', 'ajax');

if ($_POST['key']=='destroy'){		
		$id = $conn->real_escape_string($_POST['id']);
		$conn->query( "DELETE FROM producto WHERE id= '$id' ");
		exit('Success!'.' Se a Eliminado con exito');	
	}else{
			exit('ERROR!');
}