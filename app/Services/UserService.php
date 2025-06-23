<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\BoasVindasMail;

class UserService
{
    public function listarUsuarios($filtros = [])
    {
        $query = User::query();

        if (!empty($filtros['nome'])) {
            $query->where('name', 'like', '%' . $filtros['nome'] . '%');
        }

        if (!empty($filtros['email'])) {
            $query->where('email', 'like', '%' . $filtros['email'] . '%');
        }

        return $query->paginate(10);
    }

    public function criarUsuario(array $dados)
    {
        $dados['password'] = Hash::make($dados['password']);

        $usuario = User::create($dados);

        Mail::to($usuario->email)->send(new BoasVindasMail($usuario));

        return $usuario;
    }

    public function atualizarUsuario(User $usuario, array $dados)
    {
        if (!empty($dados['password'])) {
            $dados['password'] = Hash::make($dados['password']);
        } else {
            unset($dados['password']);
        }

        $usuario->update($dados);

        return $usuario;
    }

    public function deletarUsuario(User $usuario)
    {
        return $usuario->delete();
    }
}
