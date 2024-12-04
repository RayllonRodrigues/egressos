<?php
// Incluir arquivo de conexão com o banco de dados
include('/db/db.php');

// Verificar se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $curso_id = $_POST['curso_id'];
    $campus_id = $_POST['campus_id'];
    $ano_conclusao = $_POST['ano_conclusao'];
    $situacao_atual = $_POST['situacao_atual'];

    // SQL para inserir os dados na tabela 'egressos'
    $sql = "INSERT INTO egressos (nome, email, telefone, curso_id, campus_id, ano_conclusao, situacao_atual) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar a consulta SQL
    if ($stmt = $conn->prepare($sql)) {
        // Vincular os parâmetros
        $stmt->bind_param("sssiiss", $nome, $email, $telefone, $curso_id, $campus_id, $ano_conclusao, $situacao_atual);

        // Executar a consulta
        if ($stmt->execute()) {
            // Se a inserção for bem-sucedida, redirecionar para uma página de sucesso
            header('Location: sucesso.php');
            exit();
        } else {
            // Caso haja um erro na execução da query
            echo "Erro ao salvar os dados: " . $stmt->error;
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        // Caso haja um erro ao preparar a query
        echo "Erro ao preparar a consulta: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>
