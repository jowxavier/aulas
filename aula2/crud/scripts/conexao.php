<?php
// Variáveis de conexão
$servername = "mysql";
$username = "root";
$password = "xavier";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, 'cadastro');

// Verifica se conexão tem erro
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
