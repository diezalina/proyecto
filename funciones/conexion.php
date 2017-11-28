<?php
$conn=new mysqli('localhost','root','erick1008','consultorio');
if($conn->connect_error){
    echo $conn->connect_error;
}
?>