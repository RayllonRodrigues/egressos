<section id="cursos" class="bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-4">Cursos Destacados</h2>
        <form id="form-cursos">
            <div class="mb-3">
                <label for="campus" class="form-label">Escolha o Campus</label>
                <select id="campus" class="form-select">
                    <option value="">Selecione um campus...</option>
                    <!-- Os campus serão carregados aqui via AJAX -->
                </select>
            </div>
            <div class="mb-3">
                <label for="curso" class="form-label">Escolha o Curso</label>
                <select id="curso" class="form-select" disabled>
                    <option value="">Selecione um curso...</option>
                    <!-- Os cursos serão carregados aqui via AJAX -->
                </select>
            </div>
        </form>
    </div>
</section>

<script>
    // Quando a página carregar, buscar os campus
    window.onload = function() {
        fetchCampus();
    }

    // Função para buscar os campus
    function fetchCampus() {
        fetch('cursos.php')  // Requisição para o arquivo cursos.php
            .then(response => response.json())
            .then(data => {
                const campusSelect = document.getElementById('campus');
                campusSelect.innerHTML = '<option value="">Selecione um campus...</option>'; // Limpar o select antes de preencher
                data.forEach(campus => {
                    const option = document.createElement('option');
                    option.value = campus.id; // id do campus
                    option.textContent = campus.nome_campus; // Nome do campus
                    campusSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar campus:', error));
    }

    // Quando o campus for selecionado, carregar os cursos
    document.getElementById('campus').addEventListener('change', function() {
        const campusId = this.value;
        if (campusId) {
            fetchCursos(campusId);
        } else {
            document.getElementById('curso').disabled = true; // Desabilitar o select de cursos
            document.getElementById('curso').innerHTML = '<option value="">Selecione um curso...</option>';
        }
    });

    // Função para buscar os cursos para o campus selecionado
    function fetchCursos(campusId) {
        fetch(`cursos.php?campus_id=${campusId}`) // Requisição com campus_id
            .then(response => response.json())
            .then(data => {
                const cursoSelect = document.getElementById('curso');
                cursoSelect.disabled = false; // Habilitar o select de cursos
                cursoSelect.innerHTML = '<option value="">Selecione um curso...</option>'; // Limpar o select
                data.forEach(curso => {
                    const option = document.createElement('option');
                    option.value = curso.id; // id do curso
                    option.textContent = curso.nome_curso; // Nome do curso
                    cursoSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar cursos:', error));
    }
</script>
