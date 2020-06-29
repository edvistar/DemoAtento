<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$id_oferta_aplicada = $_POST['id_oferta_aplicada'];
$nombre      = $_POST['nombre'];
$identificacion      = $_POST['identificacion'];



if(strlen($nombre) > 0 && strlen($identificacion) > 0 ){
    
    $consulta = new Consulta();
    $result = $consulta->modificarOfertaAplicada($id_oferta_aplicada, $nombre, $identificacion);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/modificarOfertaAplicada.php"</script>';
    }


?>