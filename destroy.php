<?php 
$conn = new mysqli('localhost', 'root', '', 'ajax');

if ($_POST['key']=='destroy'){		
		$id = $conn->real_escape_string($_POST['id']);
		$conn->query( "DELETE FROM producto WHERE id= '$id' ");
		exit('Success!');	
	}else{
			exit('ERROR!');
}