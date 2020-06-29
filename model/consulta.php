<?php

class Consulta{
    public function insertUsers($identificacion, $nombre, $apellido, $email, $telefono, $whatsapp, $cargo, $estado, $fecha_ingreso, $rutaimg,  $pass){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM usuarios WHERE identificacion = :identificacion OR email = :email";
        $result = $conexion->prepare($sql);
        $result->bindParam(':identificacion', $identificacion);
        $result->bindParam(':email', $email);

        $result->execute();
        $farray=$result->fetch();

        if($farray){
            echo  "<script>alert('Usuario o correo ya registrado')</script>";
            echo '<script>location.href="../views/admin/registrarUsuario.php"</script>';
        }else{
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
    
            $sql = "INSERT INTO usuario (identificacion, nombre, apellido, email, telefono, whatsapp, cargo, estado, fecha_ingreso, foto, pass) VALUES (:identificacion, :nombre, :apellido, :email,:telefono, :whatsapp, :cargo, :estado, :fecha_ingreso, :foto, :pass)";

            $insertar = $conexion->prepare($sql);
            $insertar->bindParam(':identificacion', $identificacion);
            $insertar->bindParam(':nombre', $nombre);
            $insertar->bindParam(':apellido', $apellido);
            $insertar->bindParam(':email', $email);
            $insertar->bindParam(':telefono', $telefono);
            $insertar->bindParam(':whatsapp', $whatsapp);
            $insertar->bindParam(':cargo', $cargo);
            $insertar->bindParam(':estado', $estado);
            $insertar->bindParam(':fecha_ingreso', $fecha_ingreso);
            $insertar->bindParam(':foto', $rutaimg);
            $insertar->bindParam(':pass', $pass);
            
    
            if(!$insertar){
                return "error al cargar recurso";
    
            }else{
                $insertar->execute();
                echo  "<script>alert('Usuario registrado con exito')</script>";
                echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
            }
        }  
    }
    public function insertUsersStandar($identificacion, $nombre, $apellido, $email, $telefono, $whatsapp, $cargo, $estado, $fecha_ingreso, $rutaimg,  $pass){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM usuarios WHERE identificacion = :identificacion OR email = :email";
        $result = $conexion->prepare($sql);
        $result->bindParam(':identificacion', $identificacion);
        $result->bindParam(':email', $email);

        $result->execute();
        $farray=$result->fetch();

        if($farray){
            echo  "<script>alert('Usuario o correo ya registrado')</script>";
            echo '<script>location.href="../../registrarUsuarioStandar.php"</script>';
        }else{
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
    
            $sql = "INSERT INTO usuario (identificacion, nombre, apellido, email, telefono, whatsapp, cargo, estado, fecha_ingreso, foto, pass) VALUES (:identificacion, :nombre, :apellido, :email,:telefono, :whatsapp, :cargo, :estado, :fecha_ingreso, :foto, :pass)";

            $insertar = $conexion->prepare($sql);
            $insertar->bindParam(':identificacion', $identificacion);
            $insertar->bindParam(':nombre', $nombre);
            $insertar->bindParam(':apellido', $apellido);
            $insertar->bindParam(':email', $email);
            $insertar->bindParam(':telefono', $telefono);
            $insertar->bindParam(':whatsapp', $whatsapp);
            $insertar->bindParam(':cargo', $cargo);
            $insertar->bindParam(':estado', $estado);
            $insertar->bindParam(':fecha_ingreso', $fecha_ingreso);
            $insertar->bindParam(':foto', $rutaimg);
            $insertar->bindParam(':pass', $pass);
            
    
            if(!$insertar){
                return "error al cargar recurso";
    
            }else{
                $insertar->execute();
                echo  "<script>alert('Usuario registrado con exito')</script>";
                echo '<script>location.href="../../login.php"</script>';
            }
        }  
    }

   
    public function insertOfertas($nombre){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO oferta (nombre) VALUES ( :nombre)";

        $insertar = $conexion->prepare($sql);
        //$insertar->bindParam(':id_oferta', $id_oferta);
        $insertar->bindParam(':nombre', $nombre);
        
        
        

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Oferta registrada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaOfertas.php"</script>';
        }
    }  
    public function insertOfertaAplicada($nombre, $identificacion){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO ofertas_aplicadas (nombre, identificacion) VALUES ( :nombre, :identificacion)";

        $insertar = $conexion->prepare($sql);
        //$insertar->bindParam(':id_oferta', $id_oferta);
        $insertar->bindParam(':nombre', $nombre);
        $insertar->bindParam(':identificacion', $identificacion);
        
        
        

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Oferta Aplicada con exito')</script>";
            echo '<script>location.href="../../views/aspirante/aplicarOfertas.php"</script>';
        }
    } 
    public function insertSolicitudes($id_solicitud, $solicitud, $descripcion, $cantidad_kilos){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO solicitud (id_solicitud, solicitud, descripcion, cantidad_kilos) VALUES (:id_solicitud, :solicitud, :descripcion, :cantidad_kilos)";

        $insertar = $conexion->prepare($sql);
        $insertar->bindParam(':id_solicitud', $id_solicitud);
        $insertar->bindParam(':solicitud', $solicitud);
        $insertar->bindParam(':descripcion', $descripcion);
        $insertar->bindParam(':cantidad_kilos', $cantidad_kilos);
        
        

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Solicitud registrada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaSolicitud.php"</script>';
        }
    }  

        
    
    public function cargarUsuarios(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM usuario";
        $select = $conexion->prepare($sql);
        $select->execute();

        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    
    

    public function cargarOfertas(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM oferta";
        $select = $conexion->prepare($sql);
        $select->execute();

        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarOfertasAplicadas(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT apli.id_oferta_aplicada,  ofer.nombre as nombreOferta, apli.identificacion, usu.nombre as nombreUsuario, usu.telefono
        FROM ofertas_aplicadas as apli
        INNER JOIN oferta as ofer on ofer.id_oferta = apli.nombre
        INNER JOIN usuario as usu on usu.identificacion = apli.identificacion    
        
        
        ";
        $select = $conexion->prepare($sql);
        $select->execute();

        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }

    
    public function cargarUsuario($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM usuario WHERE identificacion = :identificacion ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":identificacion", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    
    public function cargarOferta($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM oferta WHERE id_oferta = :id_oferta ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":id_oferta", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarOfertaAplicada($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM ofertas_aplicadas WHERE id_oferta_aplicada = :id_oferta_aplicada ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":id_oferta_aplicada", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
   
    public function modificarUsuario($identificacion, $nombre, $apellido, $email,$telefono, $whatsapp, $cargo, $fecha_ingreso){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE usuario SET identificacion = :identificacion, nombre = :nombre, apellido = :apellido, email = :email, telefono = :telefono, whatsapp = :whatsapp, cargo = :cargo, fecha_ingreso = :fecha_ingreso WHERE identificacion = :identificacion";

        $up = $conexion->prepare($sql);

        $up->bindParam(':identificacion', $identificacion);
        $up->bindParam(':nombre', $nombre);
        $up->bindParam(':apellido', $apellido);
        $up->bindParam(':email', $email);
        $up->bindParam(':telefono', $telefono);
        $up->bindParam(':whatsapp', $whatsapp);
        $up->bindParam(':cargo', $cargo);
        $up->bindParam(':fecha_ingreso', $fecha_ingreso);
        $up->bindParam(':estado', $estado);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Usuario ACTUALIZADO con exito')</script>";
            echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
         }
    }
   
    public function modificarOferta($id_oferta, $nombre){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE oferta SET id_oferta = :id_oferta, nombre = :nombre WHERE id_oferta = :id_oferta ";

        $up = $conexion->prepare($sql);
        $up->bindParam(':id_oferta', $id_oferta);
        $up->bindParam(':nombre', $nombre);


        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Oferta Actualizada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaOfertas.php"</script>';
        }
    } 
    public function modificarOfertaAplicada($id_oferta_aplicada, $nombre, $identificacion){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE oferta_aplicada SET id_oferta_aplicada = :id_oferta_aplicada, nombre = :nombre, identificacion = :identificacion WHERE id_oferta_aplicada = :id_oferta_aplicada ";

        $up = $conexion->prepare($sql);
        $up->bindParam(':id_oferta_aplicada', $id_oferta_aplicada);
        $up->bindParam(':nombre', $nombre);
        $up->bindParam(':identificacion', $identificacion);


        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Oferta Actualizada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaOfertasAplicadas.php"</script>';
        }
    } 

    public function eliminarOfertas($idEliminar){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM oferta WHERE id_oferta = :id_oferta";
        $delete = $conexion->prepare($sql);
        $delete->bindParam(':id_oferta', $idEliminar);

        if(!$delete){
            echo  "<script>alert('ERROR AL ELIMINAR')</script>";
            echo '<script>location.href="../../views/admin/listaOfertas.php"</script>';
        }else{
            $delete->execute();
            echo  "<script>alert('OFERTA ELIMINADA CON EXITO')</script>";
            echo '<script>location.href="../../views/admin/listaOfertas.php"</script>';
        }
    }


    public function eliminarUsuario($idEliminar){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM usuario WHERE identificacion = :identficacion";
        $delete = $conexion->prepare($sql);
        $delete->bindParam(':identficacion', $idEliminar);

        if(!$delete){
            echo  "<script>alert('ERROR AL ELIMINAR')</script>";
            echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
        }else{
            $delete->execute();
            echo  "<script>alert('Usuario ELIMINADO con exito')</script>";
            echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
        }
    }
    
    public function eliminarSolicitudes($idEliminar){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM solicitud WHERE id_solicitud = :id_solicitud";
        $delete = $conexion->prepare($sql);
        $delete->bindParam(':id_solicitud', $idEliminar);

        if(!$delete){
            echo  "<script>alert('ERROR AL ELIMINAR')</script>";
            echo '<script>location.href="../../views/admin/listaSolicitud.php"</script>';
        }else{
            $delete->execute();
            echo  "<script>alert('Solicitud ELIMINADA con exito')</script>";
            echo '<script>location.href="../../views/admin/listaSolicitud.php"</script>';
            }
    }

    public function verPerfil($email){
        $result = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
    
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $result=$conexion->prepare($sql);
        $result->bindParam(':email', $email);
        $result->execute();
    
        while($farray = $result->fetch()){
            $resultado[]=$farray;
        }
        return $resultado;
    }

}
    
?>