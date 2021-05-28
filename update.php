<!DOCTYPE html>

<?php include 'db.php';

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

    $sql2 = "UPDATE baseprimaria2 SET NOMBRE_ESTABLECIMIENTO= '$nombre_escuela' WHERE ID ='$id'";


    
    $val = $db->query($sql2);

    if ($val) {
        echo "<script type='text/javascript'>window.location.href = 'update.php';</script>";
        exit();
    };
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Actualizar- Tareas por hacer</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-auto col-md-offset-2 mb-5 mt-5">
                <h2 class="text-center mb-5">Actualizar Información ✏️ </h2>
            </div>     
            <div class="col-md-10 col-md-offset-1">
                <form method="post">
                    <div class="form-group">
                        <label for="">Nombre Escuela</label>
                        <input type="text" name="nombre_establecimiento" required value="<?php echo $row['NOMBRE_ESTABLECIMIENTO']?>" class="form-control"> 

                        <label for="">DE</label>
                        <input type="text" name="de" required value="<?php echo $row['DE']?>" class="form-control"> 

                        <label for="">Tipo de Jornada</label>
                        <input type="text" name="tipo_jornada" required value="<?php echo $row['TIPO_JORNADA']?>" class="form-control"> 

                        <label for="">Horario</label>
                        <input type="text" name="horario" required value="<?php echo $row['HORARIO']?>" class="form-control"> 

                        <label for="">Salas inicial</label>
                        <input type="text" name="salas_inicial" required value="<?php echo $row['SALAS_INICIAL']?>" class="form-control"> 

                        <label for="">Dirección</label>
                        <input type="text" name="direccion" required value="<?php echo $row['DIRECCION']?>" class="form-control"> 

                        <label for="">Télefono</label>
                        <input type="text" name="telefono" required value="<?php echo $row['TELEFONO']?>" class="form-control">      
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

</html>