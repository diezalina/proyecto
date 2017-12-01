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
        print '<script language="JavaScript">'; 
        print 'alert("Su comentario fue enviado con exito :D");'; 
        print '</script>'; 
        require('index.html');
        }
       
    catch(Exception $e){
        $error=$e->getMessage();
    }
?>

