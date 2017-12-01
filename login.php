<?php
session_start();
$valido=true;
      if(isset($_POST['entrar'])){
        
         $host="localhost";
         $usuario="root";
         $contra="sucontraseña";
         $db="consultorio";
         
        
        $testconec= mysql_pconnect($host,$usuario,$contra) or die ("No se puede conectar");
        mysql_select_db($db) or die ("No se encuentra la base de datos especificada");
        
        
         $nombre=$_POST['usuario'];
         $contrasena=$_POST['contra'];
         $consulta="SELECT  usuario,password FROM usuarios where usuario='$nombre' AND password='$contrasena'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
          
             $_SESSION["usuario"]=$nombre;
             header("location:pagina.php?login=true");
         }               
      }
?>




<!DOCTYPE html>

<html>
<head>
    <title>Validacion de Formulario PHP</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>

<body>


    <div class="form2">
        <p>Ingresa los datos correspondientes</p>

        <form action="login.php" method=
        "post">
            <p>Usuario:</p><input name="usuario" type="text"><br>

            <p>Contraseña:</p><input name="contra" type="password"><br><br>
            <input name="entrar" type="submit" value="ENTRAR">
            <?php if ($valido==false) {
                echo '<p>Datos incorrectos <br/><a href="login.php">Intente de nuevo</a></p>';
        
            }?>
        </form>
    </div>
</body>
</html>