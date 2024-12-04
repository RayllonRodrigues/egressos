<?php
// Incluindo o arquivo de conexão com o banco de dados
include('/db/db.php');

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário e faz a sanitização para evitar SQL Injection
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $curso = mysqli_real_escape_string($conn, $_POST['curso']);
    $ano_conclusao = mysqli_real_escape_string($conn, $_POST['ano_conclusao']);
    $situacao = mysqli_real_escape_string($conn, $_POST['situacao']);

    // Prepara a consulta SQL para inserir os dados
    $sql = "INSERT INTO egressos (nome, email, telefone, curso_id, ano_conclusao, situacao) 
            VALUES ('$nome', '$email', '$telefone', '$curso', '$ano_conclusao', '$situacao')";

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
