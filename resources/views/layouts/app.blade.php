<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SIGEF - Sistema de Gestão de Escalas de Funcionários')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            /* Faz o conteúdo crescer e empurra o footer para baixo */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">SIGEF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><i
                                class="bi bi-speedometer2"></i>
                            Inicial</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> <i class="bi bi-people"></i> Escalas </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('scales.register') }}"><i
                                        class="bi bi-plus-square"></i> Cadastrar</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('scales') }}"><i class="bi bi-binoculars"></i>
                                    Consultar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> <i class="bi bi-people"></i> Funcionários </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('employees.register') }}"><i
                                        class="bi bi-plus-square"></i> Cadastrar</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('employees') }}"><i class="bi bi-binoculars"></i>
                                    Consultar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> <i class="bi bi-people"></i> Configurações </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('company') }}"><i class="bi bi-plus-square"></i>
                                    Empresa</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-binoculars"></i> Consultar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> <i class="bi bi-people"></i> Usuários </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus"></i> Cadastrar</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-binoculars"></i> Consultar</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-gear"></i> Editar
                                    Perfil</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="bi bi-box-arrow-left"></i> Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <footer class="text-center py-3 mt-auto border-top container">
        <small> © 2025 - Joab Torres | Todos os direitos reservados</small>
    </footer>
    @vite(['resources/js/bootstrap.bundle.min.js'])
</body>

</html>
