<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

