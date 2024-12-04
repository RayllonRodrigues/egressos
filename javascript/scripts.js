<script>
document.getElementById('cadastro-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    const form = event.target;
    const formData = new FormData(form);

    // Exibe carregando (opcional)
    const mensagemDiv = document.getElementById('mensagem');
    mensagemDiv.innerHTML = 'Enviando...';

    // Envia os dados via Fetch API
    fetch('/egressos/formulario/processar_cadastro.php', {
        method: 'POST',
        body: formData,
    })
        .then((response) => response.text()) // Obtém a resposta do PHP
        .then((data) => {
            mensagemDiv.innerHTML = data; // Mostra a mensagem de sucesso ou erro
            form.reset(); // Limpa o formulário (se necessário)
        })
        .catch((error) => {
            console.error('Erro:', error);
            mensagemDiv.innerHTML = 'Ocorreu um erro no envio do formulário.';
        });
});
</script>
