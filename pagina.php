<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["usuario"])){
    header("location:login.php?nologin=false");
    
}
$_SESSION["usuario"];
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Validacion de Formulario PHP</title>
	    <link href="css/estilo.css" rel="stylesheet" type="text/css">
	     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	</head>
<body>
   <div class="inicio4">
    <p id="texto2">BIENVENIDO</p>
    <p id="texto2"><?php echo $_SESSION["usuario"]; ?></p>

  <?php 
    
$link = mysql_connect("localhost", "root","erick1008"); 
mysql_select_db("consultorio", $link); 
$result = mysql_query("SELECT nombre, email,tipo,texto FROM comentarios", $link); 
echo "<table border = '1'> \n"; 
echo "<tr><td>nombre</td><td>email</td><td>tipo</td><td>texto</td></tr> \n"; 
while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr> \n"; 
} 
echo "</table> \n"; 
?>    
	  </div> 	
</body>
</html>



