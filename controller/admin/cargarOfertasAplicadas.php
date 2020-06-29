<?php

function cargarOfApli(){
    $consulta = new Consulta();
    $result = $consulta->cargarOfertasAplicadas();

    if(!isset($result)){
        echo '
        <div class="bienvenida">
         <h1> No hay Ofertas registradas</h1>
         </div>';
    }else{
        echo '
        <table class="table table-bordered table-hover tablita">
            <thead>
                <tr>
                    <th>Id Oferta</th>
                    <th>Nombre Oferta</th>
                    <th>Identificacion</th>
                    <th>Nombre Aspirante</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["id_oferta_aplicada"].'</td>
                <td>'.$farray["nombreOferta"].'</td>
                <td>'.$farray["identificacion"].'</td>
                <td>'.$farray["nombreUsuario"].'</td>
                <td>'.$farray["telefono"].'</td>
                
                <td><a href="editarOfertaAplicada.php?id_oferta_aplicada='.$farray["id_oferta_aplicada"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/admin/eliminarOfertaAplicada.php?id_ofertaAplicadaE='.$farray["id_oferta_aplicada"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}



?>