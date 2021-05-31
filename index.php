<!DOCTYPE html>

<?php include 'db.php';

$page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && (int)$_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5);

$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "select * from baseprimaria2 limit ".$start.", ".$perPage." ";
$total = $db->query("select * from baseprimaria2")->num_rows;
$pages = ceil($total / $perPage);

$rows = $db-> query($sql);

include_once 'includes/header.php';
?>
<body>
    <div class="container">         
        <div class="row justify-content-center">
          <!-- search bar -->            
            <div class="search col-lg-10 text-center mb-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Etevos.png" width="250"alt="logo bs as">
                <h2 class="text-center">ACTUALIZACIÓN INFORMACIÓN</h2>
                <h3>Clickea la lupa e ingresa tu código de carga</h3>
                <div>
                <form action="search.php" method="post" class="form-group">
                    <input type="password" placeholder="Código de carga y pulsa Enter" name="search" autocomplete="off" >
                </form>
            </div>                  
        </div>
        
    </div>
    
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

