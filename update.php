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
    
    
    
    


    $sql2 = "UPDATE baseprimaria2 SET NOMBRE_ESTABLECIMIENTO= '$nombre_escuela' WHERE ID ='$id'";


    
    $val = $db->query($sql2);

    if ($val) {
        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
        exit();
    };
}


?>



<body>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-auto col-md-offset-2 mb-5 mt-5">
                <h1 class="text-center">Actualizar Información ✏️ </h2>
            </div>     
            <div class="col-md-10 col-md-offset-1">
                <!-- Formulario actualizacion datos -->
                <form method="post">
                    <div class="form-group">
                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Nombre Escuela</label>
                                <input type="text" name="nombre_establecimiento" required value="<?php echo $row['NOMBRE_ESTABLECIMIENTO']?>" class="form-control">                             
                            </div>
                            <div class="col">
                                <label for="">DE</label>
                                <input type="text" name="de" required value="<?php echo $row['DE']?>" class="form-control"> 
                            </div>
                            <div class="col">
                                <label for="">Tipo de Jornada</label>
                                <input type="text" name="tipo_jornada" required value="<?php echo $row['TIPO_JORNADA']?>" class="form-control">                            
                            </div>                        
                        </div>

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Horario</label>
                                <input type="text" name="horario" required value="<?php echo $row['HORARIO']?>" class="form-control">                           
                            </div>
                            <div class="col">
                                <label for="">Salas inicial</label>
                                <input type="text" name="salas_inicial" required value="<?php echo $row['SALAS_INICIAL']?>" class="form-control"> 
                            </div>
                            <div class="col">
                                <label for="">Dirección</label>
                                <input type="text" name="direccion" required value="<?php echo $row['DIRECCION']?>" class="form-control">                          
                            </div>                        
                        </div>

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Télefono</label>
                                <input type="text" name="telefono" required value="<?php echo $row['TELEFONO']?>" class="form-control">                         
                            </div>
                            <div class="col">
                                <label for="">Director/a Titular</label>
                                <input type="text" name="nombre_apellido_dir_titular" required value="<?php echo $row['NOMBRE_APELLIDO_DIR_TITULAR']?>" class="form-control"> 
                            </div>
                            <div class="col">
                                <label for="">Director/a a cargo</label>
                                <input type="text" name="nombre_apellido_dire_acargo" required value="<?php echo $row['NOMBRE_APELLIDO_DIRE_ACARGO']?>" class="form-control">                         
                            </div>
                            <div class="col">
                                <label for="">Cel. Director/a</label>
                                <input type="text" name="celular_dir" required value="<?php echo $row['CELULAR_DIR']?>" class="form-control">                          
                            </div>                          
                        </div>
                        <!-- GRUPO Matriculas 1 -->
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
                                <input type="text" name="column_2do_grado" required value="<?php echo $row['Column_3er_Grado']?>" class="form-control">                       
                            </div>   
                            <div class="col">
                                <label for="">4to Grado</label>
                                <input type="text" name="column_2do_grado" required value="<?php echo $row['Column_4to_Grado']?>" class="form-control">                     
                            </div> 
                            <div class="col">
                                <label for="">5to Grado</label>
                                <input type="text" name="column_2do_grado" required value="<?php echo $row['Column_5to_Grado']?>" class="form-control">                    
                            </div>   
                            <div class="col">
                                <label for="">6to Grado</label>
                                <input type="text" name="column_2do_grado" required value="<?php echo $row['Column_6to_Grado']?>" class="form-control">                     
                            </div> 
                            <div class="col">
                                <label for="">7mo Grado</label>
                                <input type="text" name="column_2do_grado" required value="<?php echo $row['Column_7mo_Grado']?>" class="form-control">                     
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
                                <label for="">Total Secciones</label>
                                <input type="text" name="total_secciones" required value="<?php echo $row['TOTAL_SECCIONES']?>" class="form-control">                          
                            </div>                       
                        </div>
                        <!-- FIN -->
                        <!-- GRUPO Matriculas 2 -->
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
                                <input type="text" name="column_2do_grado2" required value="<?php echo $row['Column_3er_Grado_1']?>" class="form-control">                       
                            </div>   
                            <div class="col">
                                <label for="">4to Grado</label>
                                <input type="text" name="column_2do_grado2" required value="<?php echo $row['Column_4to_Grado_1']?>" class="form-control">                     
                            </div> 
                            <div class="col">
                                <label for="">5to Grado</label>
                                <input type="text" name="column_2do_grado2" required value="<?php echo $row['Column_5to_Grado_1']?>" class="form-control">                    
                            </div>   
                            <div class="col">
                                <label for="">6to Grado</label>
                                <input type="text" name="column_2do_grado2" required value="<?php echo $row['Column_6to_Grado_1']?>" class="form-control">                     
                            </div> 
                            <div class="col">
                                <label for="">7mo Grado</label>
                                <input type="text" name="column_2do_grado2" required value="<?php echo $row['Column_7mo_Grado_1']?>" class="form-control">                     
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

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">Mail oficial</label>
                                <input type="text" name="mail_oficial" required value="<?php echo $row['MAIL_OFICIAL']?>" class="form-control">                             
                            </div>
                            <div class="col">
                                <label for="">Dir. Supervisión</label>
                                <input type="text" name="direccion_supervision" required value="<?php echo $row['DIRECCION_SUPERVISI_N']?>" class="form-control"> 
                            </div>
                            <div class="col">
                                <label for="">Tel. Supervisión</label>
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

                        <div class="row mb-4"> 
                            <div class="col">
                                <label for="">¿Tiene Casero?</label>
                                <input type="text" name="casero" required value="<?php echo $row['TIENE_CASERO']?>" class="form-control">                             
                            </div>
                            <div class="col">
                                <label for="">Nombre Casero</label>
                                <input type="text" name="nombre_casero" required value="<?php echo $row['NOMBRE_CASERO']?>" class="form-control"> 
                            </div>  
                            <div class="col">
                                <label for="">Tel. Casero</label>
                                <input type="text" name="tel_casero" required value="<?php echo $row['TELEFONO_1']?>" class="form-control"> 
                            </div>                      
                        </div>                   
                    </div>
                    <input type="submit" name="send" value="Actualizar" class="btn btn-success">&nbsp;  
                    <a href="index.php" class="btn btn-warning">Cancelar</a>        
                </form>
            </div>     
        </div>
    </div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

