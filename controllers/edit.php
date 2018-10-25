<?php
    $conn = new mysqli('localhost', 'root', '', 'ajax');
    $id=$conn->real_escape_string($_POST['id']);
    $nombre=$conn->real_escape_string($_POST['nombre']);
    $descripcion=$conn->real_escape_string($_POST['descripcion']);
    $categoria=$conn->real_escape_string($_POST['categoria']);
    if ($_POST['key']=='edit') {
        $conn->query("UPDATE producto SET nombre='$nombre', descripcion='$descripcion', categoria='$categoria' WHERE id='$id'");				
        exit('Success!'.' Se a Editado este registro');
        
    } else{
        exit('ERROR!');
    }
        