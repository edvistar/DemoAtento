<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



//$id_oferta  = $_POST['id_oferta'];
$nombre          = $_POST['nombre'];
$identificacion  = $_POST['identificacion'];



//strlen($id_oferta) > 0 && 
if(strlen($nombre) > 0 && strlen($identificacion) > 0 ){
    
    $consulta = new Consulta();
    $result = $consulta->insertOfertaAplicada($nombre, $identificacion);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/aspirante/aplicarOfertas.php"</script>';
    }


?>