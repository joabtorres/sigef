<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow" style="width: 400px;">
        <div class="card-body">
            <h4 class="text-center mb-4"><i class="bi bi-fingerprint"></i> Recuperar Senha</h4>

            <form method="POST" action="{{ route('forgot.post') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">E-mail cadastrado</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-success">Enviar link de recuperação</button>
                    <a href="{{ route('login') }}" class="text-center small text-decoration-none">Voltar ao
                        login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
