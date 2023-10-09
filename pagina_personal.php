<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['id'];

$sql = "SELECT usuario FROM usuarios WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $usuario = $row['usuario'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Personal</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $usuario; ?>!</h2>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
