<?php
    $conn = new mysqli('localhost', 'root', '', 'ajax');
    $id=$conn->real_escape_string($_POST['id']);
    if ($_POST['key']=='edit') {
        $conn->query("SELECT * FROM producto WHERE id='$id'");
        # code...
        $array=mysqli_fetch_array($conn);
        $show='';
        echo  $show="
    
             <table>
                <th>
                    <td>nombre</td>
                    <td>descripcion</td>
                    <td>categoria</td>
                </th>
                <tbody>
                    <tr>", $array['nombre'] ,"</tr>
                    <tr>",  $array['descripcion'] ,"</tr>
                    <tr>", $array['categoria'] ,"</tr>
                </tbody>
            </table>
    
        ";		
        exit($show);
        
    } else{
        exit('ERROR!');
    }