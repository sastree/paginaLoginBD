<?php
session_start();
include('conexion.php');

if(isset($_POST['registrar'])){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>
    <h2>Registro de usuario</h2>
    <form method="post" action="">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br>
        <label>Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <input type="submit" name="registrar" value="Registrar">
        <a href="login.php">Ya tienes cuenta? Inicia sesion aquí</a>
    </form>
</body>
</html>
