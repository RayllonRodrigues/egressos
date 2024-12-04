<?php
require_once '../conexao/db.php';

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe e valida os dados do formulário
    $nome = trim($_POST['nome']);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $telefone = trim($_POST['telefone']);
    $campus = trim($_POST['campus']);
    $area_interesse = trim($_POST['area-interesse']);
    $situacao = trim($_POST['situacao']);

    // Verifica se todos os campos obrigatórios foram preenchidos
    if (!$nome || !$email || !$telefone || !$campus || !$area_interesse || !$situacao) {
        die("Todos os campos são obrigatórios!");
    }

    // Prepara a consulta SQL para inserir os dados
    $stmt = $conn->prepare("INSERT INTO formulario (nome, email, telefone, campus, area_interesse, situacao) VALUES (?, ?, ?, ?, ?, ?)");

    // Verifica se a preparação foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . htmlspecialchars($conn->error));
    }

    // Liga as variáveis aos parâmetros da consulta preparada
    $stmt->bind_param("ssssss", $nome, $email, $telefone, $campus, $area_interesse, $situacao);

    // Executa a consulta
    if ($stmt->execute()) {
        echo "<script type='text/javascript'>
                alert('Cadastro realizado com sucesso!');
                window.location.href = '../index.php'; // Substitua pelo caminho desejado após o cadastro
              </script>";
       
    } else {
        echo "Erro ao realizar cadastro: " . htmlspecialchars($stmt->error);
    }

    // Fecha a consulta preparada e a conexão
    $stmt->close();
    $conn->close();
} else {
    die("Acesso inválido.");
}
?>
