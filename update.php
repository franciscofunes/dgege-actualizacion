<!DOCTYPE html>

<?php 

include 'db.php';
include_once 'includes/header.php';

$id = (int)$_GET['id'];

$sql = "select * from baseprimaria2 where ID= '$id'";

$rows = $db-> query($sql);

$row = $rows->fetch_assoc();



if (isset($_POST['send'])) {
    $nombre_escuela = htmlspecialchars($_POST['nombre_establecimiento']);
    $de = htmlspecialchars($_POST['de']);
    $tipo_jornada = htmlspecialchars($_POST['tipo_jornada']);
    $horario = htmlspecialchars($_POST['horario']);
    $salas_inicial = htmlspecialchars($_POST['salas_inicial']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $nombre_apellido_dir_titular = htmlspecialchars($_POST['nombre_apellido_dir_titular']);
    $nombre_apellido_dire_acargo = htmlspecialchars($_POST['nombre_apellido_dire_acargo']);
    $celular_dir = htmlspecialchars($_POST['celular_dir']);
    $column_1er_grado = htmlspecialchars($_POST['column_1er_grado']);
    $column_2do_grado = htmlspecialchars($_POST['column_2do_grado']);
    $column_3er_grado = htmlspecialchars($_POST['column_3er_grado']);
    $column_4to_grado = htmlspecialchars($_POST['column_4to_grado']);
    $column_5to_grado = htmlspecialchars($_POST['column_5to_grado']);
    $column_6to_grado = htmlspecialchars($_POST['column_6to_grado']);
    $column_7mo_grado = htmlspecialchars($_POST['column_7mo_grado']);
    $niv1 = htmlspecialchars($_POST['niv1']);
    $acel1 = htmlspecialchars($_POST['acel1']);
    $total_secciones = htmlspecialchars($_POST['total_secciones']);
    $column_1er_grado2 = htmlspecialchars($_POST['column_1er_grado2']);
    $column_2do_grado2 = htmlspecialchars($_POST['column_2do_grado2']);
    $column_3er_grado2 = htmlspecialchars($_POST['column_3er_grado2']);
    $column_4to_grado2 = htmlspecialchars($_POST['column_4to_grado2']);
    $column_5to_grado2 = htmlspecialchars($_POST['column_5to_grado2']);
    $column_6to_grado2 = htmlspecialchars($_POST['column_6to_grado2']);
    $column_7mo_grado2 = htmlspecialchars($_POST['column_7mo_grado2']);
    $niv2 = htmlspecialchars($_POST['niv2']);
    $acel2 = htmlspecialchars($_POST['acel2']);
    $total = htmlspecialchars($_POST['total']);
    $mail_oficial = htmlspecialchars($_POST['mail_oficial']);
    $direccion_supervision = htmlspecialchars($_POST['direccion_supervision']);
    $tel_supervision = htmlspecialchars($_POST['tel_supervision']);
    $datos_supervisor = htmlspecialchars($_POST['datos_supervisor']);
    $cel_supervisor = htmlspecialchars($_POST['cel_supervisor']);
    $casero = htmlspecialchars($_POST['casero']);
    $nombre_casero = htmlspecialchars($_POST['nombre_casero']);
    $tel_casero = htmlspecialchars($_POST['tel_casero']); 
    
    
    $sql4 ="UPDATE `baseprimaria2` SET `NOMBRE_ESTABLECIMIENTO`='$nombre_escuela',`DE`='$de',`TIPO_JORNADA`='$tipo_jornada',`HORARIO`='$horario',`SALAS_INICIAL`='$salas_inicial',`DIRECCION`='$direccion',`TELEFONO`='$telefono',`NOMBRE_APELLIDO_DIR_TITULAR`='$nombre_apellido_dir_titular',`NOMBRE_APELLIDO_DIRE_ACARGO`='$nombre_apellido_dire_acargo',`CELULAR_DIR`='$celular_dir',`Column_1er_Grado`='$column_1er_grado',`Column_2do_Grado`='$column_2do_grado',`Column_3er_Grado`='$column_3er_grado',`Column_4to_Grado`='$column_4to_grado',`Column_5to_Grado`='$column_5to_grado',`Column_6to_Grado`='$column_6to_grado',`Column_7mo_Grado`='$column_7mo_grado',`Niv`='$niv1',`Acel`='$acel1',`TOTAL_SECCIONES`='$total_secciones',`Column_1er_Grado_1`='$column_1er_grado2',`Column_2do_Grado_1`='$column_2do_grado2',`Column_3er_Grado_1`='$column_3er_grado2',`Column_4to_Grado_1`='$column_4to_grado2',`Column_5to_Grado_1`='$column_5to_grado2',`Column_6to_Grado_1`='$column_6to_grado2',`Column_7mo_Grado_1`='$column_7mo_grado2',`Niv_1`='$niv2',`Acel_1`='$acel2',`Total`='$total',`MAIL_OFICIAL`='$mail_oficial',`DIRECCION_SUPERVISI_N`='$direccion_supervision',`TELEFONO_SUPERVISION`='$tel_supervision',`APELLIDO_NOMBRE_SUPERVISOR`='$datos_supervisor',`TELEFONO_DEL_SUPERVISOR_A`='$cel_supervisor',`TIENE_CASERO`='$casero',`NOMBRE_CASERO`='$nombre_casero',`TELEFONO_1`='$tel_casero' WHERE ID ='$id'";

    

    
    $val = $db->query($sql4);

    if ($val) {
        header("Location: includes/exito.php");
        //$message = "¡Cambios realizados con éxito! ✔️";
        //echo "<script type='text/javascript'>alert('$message');</script>";
        //echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
        exit();
    };
}

?>




<body>
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-auto col-md-offset-2 mb-2">
                <h1>Actualizar Información ✏️ </h1>
            </div>     
            <div class="col-md-10 col-md-offset-1">
                <!-- Formulario actualizacion datos -->
                <form method="post">
                    <div class="form-group">
                    <hr>
                        <div class="row mb-4"> 
                            
                            <div class="col">
                                
                                <label for="">Escuela</label>
                                <input type="text" name="nombre_establecimiento" required value="<?php echo $row['NOMBRE_ESTABLECIMIENTO']?>" class="form-control">                             
                            </div>
                            <div class="col">
                                <label for="">DE</label>
                                <input type="text" name="de" required value="<?php echo $row['DE']?>" class="form-control"> 
                            </div>
                            <div class="col">
                                <label for="">Jornada</label>
                                <input type="text" name="tipo_jornada" required value="<?php echo $row['TIPO_JORNADA']?>" class="form-control">                            
                            </div>                        
                        </div>

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Horario</label>
                                <input type="text" name="horario" required value="<?php echo $row['HORARIO']?>" class="form-control">                           
                            </div>
                            <div class="col">
                                <label for="">Sala In.</label>
                                <input type="text" name="salas_inicial" required value="<?php echo $row['SALAS_INICIAL']?>" class="form-control"> 
                            </div>
                            <div class="col">
                                <label for="">Dirección</label>
                                <input type="text" name="direccion" required value="<?php echo $row['DIRECCION']?>" class="form-control">                          
                            </div>                        
                        </div>

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Tel. Escuela</label>
                                <input type="text" name="telefono" required value="<?php echo $row['TELEFONO']?>" class="form-control">                         
                            </div>
                            <div class="col">
                                <label for="">Dir. Titular</label>
                                <input type="text" name="nombre_apellido_dir_titular" required value="<?php echo $row['NOMBRE_APELLIDO_DIR_TITULAR']?>" class="form-control"> 
                            </div>
                        </div>    
                        <div class="row mb-4">    
                            <div class="col">
                                <label for="">Dir. a cargo</label>
                                <input type="text" name="nombre_apellido_dire_acargo" required value="<?php echo $row['NOMBRE_APELLIDO_DIRE_ACARGO']?>" class="form-control">                         
                            </div>
                            <div class="col">
                                <label for="">Cel. Director/a</label>
                                <input type="text" name="celular_dir" required value="<?php echo $row['CELULAR_DIR']?>" class="form-control">                          
                            </div>                          
                        </div>
                        <!-- GRUPO Matriculas 1 -->
                        <hr>
                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">1er Grado</label>
                                <input type="text" name="column_1er_grado" required value="<?php echo $row['Column_1er_Grado']?>" class="form-control">  
                            </div>
                            <div class="col">
                                <label for="">2do Grado</label>
                                <input type="text" name="column_2do_grado" required value="<?php echo $row['Column_2do_Grado']?>" class="form-control">   
                            </div>
                            <div class="col">
                                <label for="">3er Grado</label>
                                <input type="text" name="column_3er_grado" required value="<?php echo $row['Column_3er_Grado']?>" class="form-control">                       
                            </div>   
                            <div class="col">
                                <label for="">4to Grado</label>
                                <input type="text" name="column_4to_grado" required value="<?php echo $row['Column_4to_Grado']?>" class="form-control">                     
                            </div> 
                        </div>    
                        <div class="row mb-4">       
                            <div class="col">
                                <label for="">5to Grado</label>
                                <input type="text" name="column_5to_grado" required value="<?php echo $row['Column_5to_Grado']?>" class="form-control">                    
                            </div>   
                            <div class="col">
                                <label for="">6to Grado</label>
                                <input type="text" name="column_6to_grado" required value="<?php echo $row['Column_6to_Grado']?>" class="form-control">                     
                            </div> 
                            <div class="col">
                                <label for="">7mo Grado</label>
                                <input type="text" name="column_7mo_grado" required value="<?php echo $row['Column_7mo_Grado']?>" class="form-control">                     
                            </div>                             
                        </div>  

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Nivelación</label>
                                <input type="text" name="niv1" required value="<?php echo $row['Niv']?>" class="form-control">                         
                            </div>
                            <div class="col">
                                <label for="">Aceleración</label>
                                <input type="text" name="acel1" required value="<?php echo $row['Acel']?>" class="form-control">                          
                            </div>     
                            <div class="col">
                                <label for="">Total Secc.</label>
                                <input type="text" name="total_secciones" required value="<?php echo $row['TOTAL_SECCIONES']?>" class="form-control">                          
                            </div>                       
                        </div>
                        <!-- FIN -->
                        <!-- GRUPO Matriculas 2 -->
                        <hr>
                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">1er Grado</label>
                                <input type="text" name="column_1er_grado2" required value="<?php echo $row['Column_1er_Grado_1']?>" class="form-control">  
                            </div>
                            <div class="col">
                                <label for="">2do Grado</label>
                                <input type="text" name="column_2do_grado2" required value="<?php echo $row['Column_2do_Grado_1']?>" class="form-control">   
                            </div>
                            <div class="col">
                                <label for="">3er Grado</label>
                                <input type="text" name="column_3er_grado2" required value="<?php echo $row['Column_3er_Grado_1']?>" class="form-control">                       
                            </div>   
                            <div class="col">
                                <label for="">4to Grado</label>
                                <input type="text" name="column_4to_grado2" required value="<?php echo $row['Column_4to_Grado_1']?>" class="form-control">                     
                            </div>
                        </div>    
                        <div class="row mb-4">  
                            <div class="col">
                                <label for="">5to Grado</label>
                                <input type="text" name="column_5to_grado2" required value="<?php echo $row['Column_5to_Grado_1']?>" class="form-control">                    
                            </div>   
                            <div class="col">
                                <label for="">6to Grado</label>
                                <input type="text" name="column_6to_grado2" required value="<?php echo $row['Column_6to_Grado_1']?>" class="form-control">                     
                            </div> 
                            <div class="col">
                                <label for="">7mo Grado</label>
                                <input type="text" name="column_7mo_grado2" required value="<?php echo $row['Column_7mo_Grado_1']?>" class="form-control">                     
                            </div>
                        </div>      
                            
                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Nivelación</label>
                                <input type="text" name="niv2" required value="<?php echo $row['Niv']?>" class="form-control">                         
                            </div>
                            <div class="col">
                                <label for="">Aceleración</label>
                                <input type="text" name="acel2" required value="<?php echo $row['Acel']?>" class="form-control">                          
                            </div>     
                            <div class="col">
                                <label for="">Total</label>
                                <input type="text" name="total" required value="<?php echo $row['Total']?>" class="form-control">                         
                            </div>                   
                        </div>  
                        <!-- FIN -->
                        <hr>
                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Mail oficial</label>
                                <input type="text" name="mail_oficial" required value="<?php echo $row['MAIL_OFICIAL']?>" class="form-control">                             
                            </div>
                            <div class="col">
                                <label for="">Dir. Sup.</label>
                                <input type="text" name="direccion_supervision" required value="<?php echo $row['DIRECCION_SUPERVISI_N']?>" class="form-control"> 
                            </div>
                            <div class="col">
                                <label for="">Tel. Sup.</label>
                                <input type="text" name="tel_supervision" required value="<?php echo $row['TELEFONO_SUPERVISION']?>" class="form-control">                            
                            </div>                        
                        </div>

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Supervisor/a</label>
                                <input type="text" name="datos_supervisor" required value="<?php echo $row['APELLIDO_NOMBRE_SUPERVISOR']?>" class="form-control">                             
                            </div>
                            <div class="col">
                                <label for="">Cel. Supervisor/a</label>
                                <input type="text" name="cel_supervisor" required value="<?php echo $row['TELEFONO_DEL_SUPERVISOR_A']?>" class="form-control"> 
                            </div>                    
                        </div>
                        <hr>
                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">¿Tiene Casero?</label>
                                <input type="text" name="casero" required value="<?php echo $row['TIENE_CASERO']?>" list="option_list" class="form-control">
                                <datalist id="option_list">
                                    <option>Si</option>
                                    <option>No</option>
                                </datalist>                             
                            </div>
                            <div class="col">
                                <label for="">Nombre Casero</label>
                                <input type="text" name="nombre_casero" required value="<?php echo $row['NOMBRE_CASERO']?>" class="form-control"> 
                            </div>  
                            <div class="col">
                                <label for="">Télefono Casero</label>
                                <input type="text" name="tel_casero" required value="<?php echo $row['TELEFONO_1']?>" class="form-control"> 
                            </div>                      
                        </div>                   
                    </div>
                    <input type="submit" name="send" value="Guardar" class="btn btn-success">&nbsp;
                    <!-- Button trigger modal -->
                    <a href="index.php" class="btn btn-danger">Salir sin guardar</a>        
                </form>
            </div>     
        </div>
    </div>
</body>

<script type="text/javascript">
window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmación cambios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
        <input type="submit" name="send" value="Guardar" class="btn btn-success">&nbsp;
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

