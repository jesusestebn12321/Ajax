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
                        <form action="#">
                            <td><input type="hidden" value="'.$data["id"].'" id="idRow'.$data["id"].'">'.$data["id"].'</td>
                            <td><input type="text" class="form-control" value="'.$data["nombre"].'" id="nombreRow'.$data["id"].'"></td>
                            <td><input type="text" class="form-control" value="'.$data["descripcion"].'" id="descripcionRow'.$data["id"].'"></td>
                            <td><input type="text" class="form-control" value="'.$data["categoria"].'" id="categoriaRow'.$data["id"].'"></td>
                            <td>
                                <input type="button" onclick="store('.$data["id"].')"  value="Edit" class="btn btn-primary">
                                <input type="button" value="View" class="btn">
                                <input type="button" onclick="destroy('.$data["id"].')" value="Destroy" class="btn btn-danger">	
                            </td>
                        </form>
                    </tr>
                ';
            }
            exit($respuesta);
        }
    }    