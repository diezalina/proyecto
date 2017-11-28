<?php
    try {
        require_once(funciones/conexion.php);
        $nombre=$_GET['nombre'];
        $email=$_GET['email'];
        $consulta=$_GET['consulta'];
       
        $sql="INSERT INTO
        comentarios(nombre,email,consulta)";
        $sql .="values('{$nombre}','{$email}','{$consulta}');";
        $resultado=$conn->query($sql);
        }
    catch(Exception $e){
        $error=$e->getMessage();
    }
?>
    
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <div class="bloque">
            <h1>Registro</h1>
    <?php
    if ($resultado){
        echo "Correcto";
    }
    ?>
        </div>
    </body>
</html>