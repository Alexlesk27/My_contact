Link do video: https://youtu.be/6gAvYJKHya4
# Projeto de Contatos - Backend (API)

Este é o backend do projeto de gerenciamento de contatos. Ele fornece uma API para adicionar, editar, excluir e listar contatos. 

## Tecnologias Utilizadas

- Laravel
- MySQL

## Funcionalidades

- Adicionar novo contato
- Listar contatos existentes
- Editar contato
- Excluir contato
- Upload de imagens de perfil dos contatos

## Instalação

1. Clone o repositório:
   git clone <link-do-repositorio-backend>
Navegue até o diretório do projeto:

cd nome-do-diretorio-backend
Instale as dependências:


composer install
Configure o arquivo .env com as informações do banco de dados e outras configurações necessárias.

Execute as migrações:

php artisan migrate
Inicie o servidor de desenvolvimento:


php artisan serve

Endpoints

POST /v1/contact - Adicionar um novo contato

GET /v1/contact - Listar todos os contatos

PUT /v1/contact/{id} - Editar um contato existente

DELETE /v1/contact/{id} - Excluir um contato

Licença
Este projeto está licenciado sob a licença MIT.
