<?php 

$db = mysqli_connect("localhost","root","","cms");

if (!$db) {
    echo "Error en la conexión";
    exit;
}
//echo "Conexión correcta";
?>

