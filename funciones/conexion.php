<?php
$conn=new mysqli('localhost','root','contraseña','consultorio');
if($conn->connect_error){
    echo $conn->connect_error;
}
?>