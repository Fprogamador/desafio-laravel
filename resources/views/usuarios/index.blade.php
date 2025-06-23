@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Lista de Usuários</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" action="{{ route('usuarios.index') }}" class="mb-3 row g-3">
        <div class="col-md-4">
            <input type="text" name="nome" class="form-control" placeholder="Filtrar por nome" value="{{ request('nome') }}">
        </div>
        <div class="col-md-4">
            <input type="email" name="email" class="form-control" placeholder="Filtrar por e-mail" value="{{ request('email') }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Filtrar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Limpar</a>
            <a href="{{ route('usuarios.create') }}" class="btn btn-success float-end">Novo Usuário</a>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja deletar este usuário?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Nenhum usuário encontrado.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $usuarios->links() }}

</div>
@endsection
