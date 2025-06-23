# Projeto Laravel - Sistema de Gerenciamento de Usuários

## Descrição

Aplicação web desenvolvida com Laravel 10 para gerenciamento completo de usuários, incluindo autenticação, cadastro, edição, listagem com filtros, exclusão e envio de e-mail de boas-vindas. O projeto foi desenvolvido para atender aos requisitos de uma vaga júnior, focando em boas práticas, segurança, performance e usabilidade.

---

## Tecnologias Utilizadas

- Laravel 10
- PHP 8.x
- Bootstrap 5 (via CDN)
- Mailtrap (para teste de envio de e-mails)
- MySQL (ou outro banco configurado via `.env`)
- PHPUnit para testes automatizados

---

## Funcionalidades Principais

- Cadastro de usuário com validação e envio de e-mail de boas-vindas
- Login e logout seguros
- Listagem paginada de usuários com filtro por nome e e-mail
- Edição e deleção de usuários (apenas para usuários autenticados)
- Layout responsivo e amigável utilizando Bootstrap
- Testes automatizados cobrindo funcionalidades críticas

---

## Estrutura do Projeto

- Controllers: separados em Single Action Controllers (`__invoke`) para operações simples
- Camada de Serviço: `UserService` para encapsular a lógica de negócio de usuário
- Validação: todas as validações via Form Requests para garantir segurança e organização
- Views: Blade templates com Bootstrap e Blade Components para reaproveitamento
- Testes: testes unitários e de feature em `tests/` cobrindo autenticação e gerenciamento

---

## Configuração e Instalação

1. Clone o repositório:

```bash
git clone https://github.com/Fprogamador/desafio-laravel.git
cd desafio-laravel

2. Instale as dependências PHP
Certifique-se de ter o Composer instalado.

composer install

Copie o arquivo .env e configure

cp .env.example .env

3. Depois, edite o .env e configure suas variáveis de ambiente, como conexão com o banco de dados e Mailtrap:

Caso você não tenha um banco de dados configurado, siga os passos abaixo para usar o XAMPP, que já inclui o MySQL e o phpMyAdmin:

3.1/ Instale o XAMPP
Baixe e instale o XAMPP em:
https://www.apachefriends.org/index.html

3.2. Inicie os serviços
Abra o Painel de Controle do XAMPP e inicie:

Apache

MySQL

3.3. Acesse o phpMyAdmin
Acesse via navegador:
http://localhost/phpmyadmin

4.3 Crie o banco de dados
Clique em "Novo" no menu lateral.

Informe o nome desafio_laravel.

Clique em "Criar".

Não é necessário criar tabelas manualmente. As tabelas serão criadas ao rodar o comando:

php artisan migrate

APP_NAME="Desafio Laravel"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desafio_laravel
DB_USERNAME=root
DB_PASSWORD=

O MailTrap ja esta configurado.

⚠️ Crie o banco de dados com o nome desafio_laravel no phpMyAdmin ou outro gerenciador MySQL.

4. Gere a chave da aplicação

php artisan key:generate

5. Rode as migrações

php artisan migrate

6. Instale as dependências front-end com o NPM
Certifique-se de ter o Node.js e o NPM instalados:

npm install
npm run dev

7. Inicie o servidor

php artisan serve
Acesse o sistema em: http://localhost:8000

8. Teste o envio de e-mails
Após cadastrar um novo usuário, verifique o inbox do Mailtrap para ver o e-mail de boas-vindas.
Para isso clique no botão SandBox->My Sandbox
Os email-s estarão no lado esquerdo

9. Executar testes automatizados
