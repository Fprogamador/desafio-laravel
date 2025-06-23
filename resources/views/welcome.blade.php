<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Minha Aplicação - Bem-vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Bem-vindo à Minha Aplicação Laravel sobre o Desafio de Desenvolvimento Laravel Dinamk</h1>
        <p class="lead">Sistema de gerenciamento simples com Laravel</p>

        <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Registrar</a>
    </div>
</body>
</html>
