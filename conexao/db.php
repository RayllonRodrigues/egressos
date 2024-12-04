<?php
// Arquivo de Conexão com o Banco de Dados

$servername = "localhost"; // ou o IP do seu servidor de banco de dados
$username = "root"; // Seu usuário do banco de dados
$password = "41418162218"; // Sua senha do banco de dados
$dbname = "egressos"; // Nome do seu banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>