<?php
if ($_POST['key']=='TableProduct') {

    $conn = new mysqli('localhost', 'root', '', 'ajax');
    $sql = $conn->query("SELECT * FROM producto");
    $respuesta='';
    while($data = $sql->fetch_array()) {
        $respuesta= '
        <tr id="producto'.$data["id"].'">
        <td>'.$data["id"].'</td>
        <td>'.$data["nombre"].'</td>
        <td>'.$data["categoria"].'</td>
        <td>'.$data["descripcion"].'</td>
                <td>
                <input type="button" data-toggle="modal" data-target="#modalUpdate"  value="Edit" class="btn btn-primary">
                <input type="button" value="View" class="btn">
                    <input type="button" onclick="destroy('.$data["id"].')" value="Destroy" class="btn btn-danger">	
                    </td>
            </tr>
            ';
    }
    exit($respuesta);
    }else {
        exit('reachedMax');
    }
