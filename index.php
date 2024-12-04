<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de Acompanhamento de Egressos do IFTO">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; style-src 'self' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; font-src 'self' https://cdnjs.cloudflare.com; data:;">
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload;">
    <title>Sistema de Egressos - IFTO</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/mapa.css">
</head>

<body>
    <!-- Header -->
    <header class="bg-light py-4 text-center">
        <div class="container">
            <h1 class="display-4">Sistema de Egressos do IFTO</h1>
            <p class="lead">Acompanhe sua jornada após a conclusão do curso.</p>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo_ifto.png" alt="Logo IFTO" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#oportunidades">Oportunidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cadastro">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-success text-white text-center py-5">
        <div class="container">
            <h2 class="mb-4">Faça parte da nossa comunidade!</h2>
            <p class="fs-5">Mantenha-se conectado e descubra oportunidades exclusivas para egressos do IFTO.</p>
            <a href="#cadastro" class="btn btn-outline-light btn-lg mt-3">Cadastre-se Agora</a>
        </div>
    </section>

    <!-- Sobre -->
    <section id="sobre" class="py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Sobre o Sistema</h2>
            <p class="text-muted">Acompanhe sua trajetória acadêmica e profissional com suporte exclusivo.</p>
            <div class="row g-4">
                <div class="col-md-4">
                    <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                    <h5>Acompanhamento</h5>
                    <p>Monitore sua evolução após a conclusão do curso.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-briefcase fa-3x text-success mb-3"></i>
                    <h5>Oportunidades</h5>
                    <p>Acesse vagas de emprego e programas de formação contínua.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-network-wired fa-3x text-warning mb-3"></i>
                    <h5>Networking</h5>
                    <p>Conecte-se com outros egressos e profissionais da sua área.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Oportunidades -->
    <section id="oportunidades" class="bg-light py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Oportunidades de Trabalho</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Desenvolvedor Web</h5>
                            <p>Responsável pelo desenvolvimento e manutenção de sistemas web.</p>
                            <p><strong>Local:</strong> Tocantinópolis, TO</p>
                            <a href="#" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Analista de Suporte</h5>
                            <p>Atendimento e suporte técnico a clientes.</p>
                            <p><strong>Local:</strong> Araguaína, TO</p>
                            <a href="#" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Designer Gráfico</h5>
                            <p>Criação de material visual para campanhas publicitárias.</p>
                            <p><strong>Local:</strong> Palmas, TO</p>
                            <a href="#" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cadastro -->
    <section id="cadastro" class="py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Mapa dos Campi</h2>
        <div id="map-container" class="position-relative">
            <div class="campus" data-name="Araguaína" data-historia="Fundado em 2010, oferece cursos técnicos e superiores." style="top: 50px; left: 100px;"></div>
            <div class="campus" data-name="Araguatins" data-historia="Inaugurado em 2008, referência em cursos agrícolas." style="top: 100px; left: 200px;"></div>
            <div class="campus" data-name="Tocantinópolis" data-historia="Com mais de 15 anos, destaca-se em engenharia." style="top: 150px; left: 300px;"></div>
        </div>
        <div id="info" class="mt-3"></div>
    </div>
</section>


    <!-- Footer -->
    <footer class="bg-dark text-white py-4 text-center">
        <div class="container">
            <p>&copy; 2024 Sistema de Egressos IFTO. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="/javascript/scripts.js"></script>
</body>

</html>
