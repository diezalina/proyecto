<?php
    try {
        require_once('funciones/conexion.php');
        $nombre=$_GET['nombre'];
        $email=$_GET['email'];
        $tipo=$_GET['tipo'];
        $texto=$_GET['texto'];
       
        $sql="INSERT INTO
        comentarios(nombre,email,tipo,texto)";
        $sql .="values('{$nombre}','{$email}','{$tipo}','{$texto}');";
        $resultado=$conn->query($sql);
        }
    catch(Exception $e){
        $error=$e->getMessage();
    }
?>
    
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div class="bloque">
            <h1>Registro</h1>
    <?php
    if ($resultado){
        echo "Correcto";
    }
            else
                echo 'Error '.$error;
    ?>
        </div>
    </body>
</html>