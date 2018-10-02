<?php  
    if ($_POST['key']=='getProducto'){		
        $conn = new mysqli('localhost', 'root', '', 'ajax');
        $start = $conn->real_escape_string($_POST['start']);
        $limit = $conn->real_escape_string($_POST['limit']);
        $sql = $conn->query("SELECT * FROM producto LIMIT $start , $limit");
        if ($sql->num_rows>0) {
            $respuesta='';
            while($data = $sql->fetch_array()) {
                $respuesta ='
                
                    <tr id="'.$data["id"].'">
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
        }
    }    