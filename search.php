<!DOCTYPE html>

<?php include 'db.php';

    if (isset($_POST['search'])) {
        $pass = htmlspecialchars($_POST['search']);

        $sql = "SELECT * FROM baseprimaria2 WHERE PASS_DIRECTOR LIKE '%$pass%' ";
        //$sql2 = "SELECT * FROM baseprimaria2 WHERE PASS_DIRECTOR LIKE '%$pass%' INNER JOIN usuarios ON baseprimaria2.ID=usuarios.id";

        $rows = $db-> query($sql);

       
        
    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>DGEGE -Actualizar Matriculas</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-2 mb-5 mt-5 ">
                <h2 class="text-center mb-5">DGEGE - ACTUALIZACIÓN DE DATOS </h2>
                <button onclick="print()" type="button" class="btn btn-secondary float-right"><i class="bi bi-printer"></i> Imprimir</button>
            </div>
            <!--Search bar-->
            <div class="col-md-10 text-center">
                <h4 >BUSCADOR</h4> 
                  <form action="search.php" method="post" class="form-group">
                    <input type="text" placeholder="Ingresa el id y presiona enter" name="search" class="form-control">
                  </form>  
              
            </div>
            <!-- search logic results -->
            <?php if (mysqli_num_rows($rows) < 1) : ?>
            <h2 class="text-danger text-center">No se encontró ningún resultado</h2>
            <div class="col-md-10 text-center">
                <a href="index.php" class="btn btn-warning">Volver</a> 
            </div>
            <?php else: ?>
            <!-- DATA TABLE -->
            <div class="col-lg-11 col-lg-offset-1">
                <table class="table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Establecimiento</th>
                            <th scope="col">DE</th>
                            <th scope="col">Jornada</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Salas Inicial</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Télefono</th>
                            <th scope="col">Director/a titular</th>
                            <th scope="col">Director/a a cargo</th>
                            <th scope="col">Cel. Director/a</th>
                            <th scope="col">1er Grado</th>
                            <th scope="col">2do Grado</th>
                            <th scope="col">3er Grado</th>
                            <th scope="col">4to Grado</th>
                            <th scope="col">5to Grado</th>
                            <th scope="col">6to Grado</th>
                            <th scope="col">7mo grado</th>
                            <th scope="col">Niv</th>
                            <th scope="col">Acel</th>
                            <th scope="col">Total Secciones</th>
                            <th scope="col">1er Grado</th>
                            <th scope="col">2do Grado</th>
                            <th scope="col">3er Grado</th>
                            <th scope="col">4to Grado</th>
                            <th scope="col">5to Grado</th>
                            <th scope="col">6to Grado</th>
                            <th scope="col">7mo grado</th>
                            <th scope="col">Niv</th>
                            <th scope="col">Acel</th>
                            <th scope="col">Total Secciones</th>
                            <th scope="col">Mail oficial</th>
                            <th scope="col">Dirección Supervisión</th>
                            <th scope="col">Télefono Supervisión</th>
                            <th scope="col">Supervisor/a</th>
                            <th scope="col">Cel. Supervisor/a</th>
                            <th scope="col">¿Tiene Casero?</th>
                            <th scope="col">Nombre Casero</th>
                            <th scope="col">Télefono Casero</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php while ($row = $rows ->fetch_assoc()): ?>
                                <?php if ($row['PASS_DIRECTOR'] === $pass ) { ?>
                                <th scope="row"><?php echo $row['ID'] ?></th>
                                <td class="col-md-10"><?php echo $row['NOMBRE_ESTABLECIMIENTO'] ?></td>
                                <td class="col-md-10"><?php echo $row['DE'] ?></td>
                                <td class="col-md-10"><?php echo $row['TIPO_JORNADA'] ?></td>
                                <td class="col-md-10"><?php echo $row['HORARIO'] ?></td>
                                <td class="col-md-10"><?php echo $row['SALAS_INICIAL'] ?></td>
                                <td class="col-md-10"><?php echo $row['DIRECCION'] ?></td>
                                <td class="col-md-10"><?php echo $row['TELEFONO'] ?></td>
                                <td class="col-md-10"><?php echo $row['NOMBRE_APELLIDO_DIR_TITULAR'] ?></td>
                                <td class="col-md-10"><?php echo $row['NOMBRE_APELLIDO_DIRE_ACARGO'] ?></td>
                                <td class="col-md-10"><?php echo $row['CELULAR_DIR'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_1er_Grado'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_2do_Grado'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_3er_Grado'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_4to_Grado'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_5to_Grado'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_6to_Grado'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_7mo_Grado'] ?></td>
                                <td class="col-md-10"><?php echo $row['Niv'] ?></td>
                                <td class="col-md-10"><?php echo $row['Acel'] ?></td>
                                <td class="col-md-10"><?php echo $row['TOTAL_SECCIONES'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_1er_Grado_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_2do_Grado_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_3er_Grado_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_4to_Grado_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_5to_Grado_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_6to_Grado_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Column_7mo_Grado_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Niv_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Acel_1'] ?></td>
                                <td class="col-md-10"><?php echo $row['Total'] ?></td>
                                <td class="col-md-10"><?php echo $row['MAIL_OFICIAL'] ?></td>
                                <td class="col-md-10"><?php echo $row['DIRECCION_SUPERVISI_N'] ?></td>
                                <td class="col-md-10"><?php echo $row['TELEFONO_SUPERVISION'] ?></td>
                                <td class="col-md-10"><?php echo $row['APELLIDO_NOMBRE_SUPERVISOR'] ?></td>
                                <td class="col-md-10"><?php echo $row['TELEFONO_DEL_SUPERVISOR_A'] ?></td>
                                <td class="col-md-10"><?php echo $row['TIENE_CASERO'] ?></td>
                                <td class="col-md-10"><?php echo $row['NOMBRE_CASERO'] ?></td>
                                <td class="col-md-10"><?php echo $row['TELEFONO_1'] ?></td>
                                <td><a href="update.php?id=<?php echo $row['ID'];?>" class="btn btn-success">Editar</a></td>
                                <td><a href="delete.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                                <?php }; ?>
                            <?php endwhile; ?>
                    </tbody>             
                </table>
                <!--PAGINATION-->
                <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-center">
                          <?php for ($i = 1; $i <= $pages; $i++): ?>
                                 <li class="page-item"><a class="page-link" href="?page=<?php echo $i;?>"><?php echo $i; ?></a></li>
                          <?php endfor; ?>                      
                        </ul>                    
                </nav>   
                
                <div class="col-md-10 justify-content">
                        <a href="index.php" class="btn btn-warning">Volver</a> 
                 </div>  
                <?php endif; ?>                            
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">Nueva tarea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
         <form method="post" action="add.php">
            <div class="form-group">
                <label for="">Nombre Tarea</label>
                <input type="text" required name="task" class="form-control">         
            </div>
            <input type="submit" name="send" value="Agregar tarea" class="btn btn-success">            
         </form>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>