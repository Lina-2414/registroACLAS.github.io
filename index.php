<?php
include'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql_check = "SELECT * FROM `usuario`;";

    $result = $conn->query($sql_check);

    if ($result->num_rows > 0){
        echo "El usuario ya está registrado"; 
    } else {
        $sql = "INSERT INTO usuario (name, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE){
            echo "  Registro existoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.";}
            else {
                echo "Error:" . $sql . "<br>" . $conn->error;
           
        }
    }
}
$conn->close();
?>