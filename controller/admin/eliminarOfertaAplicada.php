<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');


if(isset($_GET['id_ofertaAplicadaE'])){
    $idEliminar = $_GET['id_ofertaAplicadaE'];
    $consulta = new Consulta();
    $result = $consulta->eliminarOfertasAplicadas($idEliminar);
}else{
    echo '<script>alert("error)</script>';
}



?>