<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    #[Test]
    public function usuario_pode_ser_cadastrado()
    {
        $response = $this->post('/usuarios', [
            'name' => 'Teste Usuário',
            'email' => 'teste@usuario.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect('/usuarios');
        $this->assertDatabaseHas('users', ['email' => 'teste@usuario.com']);
    }

    #[Test]
    public function usuario_pode_ser_listado()
    {
        User::factory()->count(3)->create();

        $response = $this->get('/usuarios');

        $response->assertStatus(200);
        $response->assertViewHas('usuarios');
    }

    #[Test]
    public function usuario_pode_ser_atualizado()
    {
        $user = User::factory()->create();

        $response = $this->put("/usuarios/{$user->id}", [
            'name' => 'Nome Atualizado',
            'email' => 'atualizado@usuario.com',
            'password' => '',
            'password_confirmation' => '',
        ]);

        $response->assertRedirect('/usuarios');
        $this->assertDatabaseHas('users', ['email' => 'atualizado@usuario.com']);
    }

    #[Test]
    public function usuario_pode_ser_deletado()
    {
        $user = User::factory()->create();

        $response = $this->delete("/usuarios/{$user->id}");

        $response->assertRedirect('/usuarios');
        $this->assertDeleted($user);
    }
}
