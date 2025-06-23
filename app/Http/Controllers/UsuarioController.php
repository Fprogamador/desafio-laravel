<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\BoasVindasMail;
use App\Services\UserService;

class UsuarioController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index(Request $request)
    {
        $usuarios = $this->userService->listarUsuarios($request->only(['nome', 'email']));
        return view('usuarios.index', compact('usuarios'));
    }

    public function store(StoreUsuarioRequest $request)
    {
        $this->userService->criarUsuario($request->validated());
        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso!');
    }

    public function update(UpdateUsuarioRequest $request, User $usuario)
    {
        $this->userService->atualizarUsuario($usuario, $request->validated());
        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy(User $usuario)
    {
        $this->userService->deletarUsuario($usuario);
        return redirect()->route('usuarios.index')->with('success', 'Usuário deletado com sucesso!');
    }
    public function create()
    {
        return view('usuarios.create');
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }


}
