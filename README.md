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
git clone https://github.com/seuusuario/seurepositorio.git
cd seurepositorio

