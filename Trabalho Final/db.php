<?php
$servername = "localhost"; // ou seu servidor
$username = "root"; // seu usuário do MySQL
$password = "Sabrina@05"; // sua senha do MySQL
$dbname = "php_db";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
