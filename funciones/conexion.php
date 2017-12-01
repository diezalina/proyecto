<?php
$conn=new mysqli('localhost','root','sucontraseña','consultorio');
if($conn->connect_error){
    echo $conn->connect_error;
}
?>