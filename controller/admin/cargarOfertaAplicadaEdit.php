<?php
    function cargarOfertaAplicadaEditar(){
    
        if(isset($_GET['id_oferta_aplicada'])){
            $consulta = new Consulta();
            $id_oferta_aplicada = $_GET['id_oferta_aplicada'];
            $result = $consulta->cargarOfertaAplicada($id_oferta_aplicada);
            foreach($result as $farray){
                echo '
                
                <form action="../../controller/admin/modificarOfertaAplicada.php" id="loginForm" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Id oferta</label>
                    <input type="number" name="id_oferta_aplicada" value="'.$farray['id_oferta_aplicada'].'" class="form-control" required >
                </div>
                <div class="form-group col-lg-12">
                    <label>Nombre</label>
                    <input type="text" name="nombre" value="'.$farray['nombre'].'" class="form-control" required>
                </div> 
                <div class="form-group col-lg-12">
                    <label>Identificacion</label>
                    <input type="number" name="identificacion" value="'.$farray['identificacion'].'" class="form-control" required>
                </div> 
               
            </div>
                <div class="text-center">
                    <button class="btn btn-success loginbtn">Actualizar</button>
                    <button class="btn btn-default">Cancel</button>
                </div>
            </form>
                ';      
                
            }
           
            
        }
    }
    


?>