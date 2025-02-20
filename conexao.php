<?php
$servername = 'localhost'; // Host do servidor MySQL (geralmente localhost no XAMPP)
$username = 'root'; // Nome de usuário do MySQL
$password = ''; // Senha do MySQL
$database = 'erestdb'; // Nome do banco de dados que você deseja conectar

// Cria uma conexão
$mysqli = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

//echo "Conexão bem-sucedida!";

// Agora você pode executar consultas SQL aqui

// Feche a conexão quando terminar
//$mysqli->close();
?>