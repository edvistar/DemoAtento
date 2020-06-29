<?php

function cargarOf(){
    $consulta = new Consulta();
    $result = $consulta->cargarOfertas();

    if(!isset($result)){
        echo '
        <div class="bienvenida">
         <h1> No hay Ofertas registradas</h1>
         </div>';
    }else{
        echo '
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Oferta</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["id_oferta"].'</td>
                <td>'.$farray["nombre"].'</td>
                <td><a href="editarOferta.php?id_oferta='.$farray["id_oferta"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/admin/eliminarOferta.php?id_ofertaE='.$farray["id_oferta"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}



?>