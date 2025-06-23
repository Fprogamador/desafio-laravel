<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-light">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow-sm rounded-lg border-0">
                <div class="card-body text-center p-5">
                    <h3 class="mb-3 text-success">
                        <i class="bi bi-check-circle-fill"></i> <!-- ícone Bootstrap -->
                        {{ __("Login efetuado com sucesso!") }}
                    </h3>
                    <p class="lead mb-4 text-secondary">
                        {{ __("Bem-vindo de volta ao seu painel de controle.") }}
                    </p>

                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary me-2">
                        Gerenciar Usuários
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">
                            Sair
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
