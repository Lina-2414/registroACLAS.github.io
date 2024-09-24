<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];


 $servidor = "localhost";
 $usuario_db = "root";
 $contrasena_db = " ";
 $nombre_db = "mi_base_de_datos";

 $conexion = mysqli_connect($servidor, $usuarios, $contrasena, $usuario);

 if (!$conexion) {
     die("Error de conexión: " . mysqli_connect_error());
 }


 ?>