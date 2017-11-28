<?php
    try {
<<<<<<< HEAD
        require_once('funciones/conexion.php');
        $nombre=$_GET['nombre'];
        $email=$_GET['email'];
        $tipo=$_GET['tipo'];
        $texto=$_GET['texto'];
       
        $sql="INSERT INTO
        comentarios(nombre,email,tipo,texto)";
        $sql .="values('{$nombre}','{$email}','{$tipo}','{$texto}');";
=======
        require_once(funciones/conexion.php);
        $nombre=$_GET['nombre'];
        $email=$_GET['email'];
        $consulta=$_GET['consulta'];
       
        $sql="INSERT INTO
        comentarios(nombre,email,consulta)";
        $sql .="values('{$nombre}','{$email}','{$consulta}');";
>>>>>>> e1a2e72fb84c1de25d3b7875b6acbf582d7d2d0d
        $resultado=$conn->query($sql);
        }
    catch(Exception $e){
        $error=$e->getMessage();
    }
?>
    
<<<<<<< HEAD
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
=======
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilos.css">
>>>>>>> e1a2e72fb84c1de25d3b7875b6acbf582d7d2d0d
    </head>
    <body>
        <div class="bloque">
            <h1>Registro</h1>
    <?php
    if ($resultado){
        echo "Correcto";
    }
<<<<<<< HEAD
            else
                echo 'Error '.$error;
=======
>>>>>>> e1a2e72fb84c1de25d3b7875b6acbf582d7d2d0d
    ?>
        </div>
    </body>
</html>