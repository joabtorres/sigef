<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-lg" style="width: 400px;">
        <div class="card-body">
            <h3 class="text-center mb-4"><i class="bi bi-lock-fill"></i> Acesso ao Sistema</h3>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Digite sua senha">
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary">Entrar</button>
                    <a href="{{ route('forgot') }}" class="text-center small text-decoration-none">Esqueci minha
                        senha</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
