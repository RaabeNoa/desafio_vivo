## Desafio VIVO

O desafio foi desenvolvido utilizando Framework Laravel e banco de dados MySQL.

### Instruções

Para executar a aplicação é necessário

- Alterar o arquivo .env conforme .env.example
- Criar um banco de dados com o mesmo nome adicionado no arquivo .env

OBS: Para o envio de email é necessário informar MAIL_USERNAME e MAIL_PASSWORD


Rodar os comandos:

- composer install
- php artisan migrate
- php artisan 
- php artisan queue:work

### Rotas

- /knowledge     : Lista de conhecimentos cadastrados no sistema
- /knowledge/add : Formulário para adicionar novo conhecimento
- /applications  : Lista de aplicações
- /applications/apply : Formulário de aplicação
