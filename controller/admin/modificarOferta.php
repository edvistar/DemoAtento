<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$id_oferta = $_POST['id_oferta'];
$nombre      = $_POST['nombre'];




if(strlen($nombre) > 0 ){
    
    $consulta = new Consulta();
    $result = $consulta->modificarOferta($id_oferta, $nombre);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/modificarOferta.php"</script>';
    }


?>