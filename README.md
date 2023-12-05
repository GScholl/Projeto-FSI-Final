# Projeto ERP +

Este projeto foi construído com o intuito de automatizar o módulo de vendas de um ERP, com base nisso foi desenvolvido o ERP+.

Foram Utilizados as seguintes tecnologias WEB:

PHP
Foi utilizado PHP como linguagem WEB por conta de ser uma linguagem amplamente utilizada na WEB.

Laravel
Em nosso Projeto foi utilizado Laravel como framework para mantermos os padrões de Projeto e seguir a arquitetura MVC.

Laravel/UI
Scaffolding do Laravel para o sistema de autenticação de sistemas, usando a      biblioteca sanctum para autenticação



DomPDF
Foi Utilizado o DomPDF para gerar PDF de relatórios pdf de vendas e de clientes.

AdminLTE
Template que utiliza HTML, CSS  e Bootstrap.

Javascript
Linguagem Utilizada em conjunto com o php para Requisições Assíncronas.



## Configuração

Certifique-se de ter o Laravel instalado antes de começar.

### Instalação

1. Clone este repositório:
     ```bash
     git clone  https://github.com/GScholl/Projeto-FSI-Final.git
  
2 - Baixe o xampp ou Wamp ou laragon server  de acordo com sua preferencia para executar o Banco de dados Mysql.


3 - Execute a instalação do Servidor Apache baixado acima.

4 - Inicie o serviço MySQL
 
5 -  Dentro da pasta Raiz do Projeto, abra o terminal e execute o comando:

  
    php artisan migrate

para criação do banco de dados.
	
6 - Rode o Comando 
   
    php artisan db:seed


para popular o banco de dados com dados aleatórios.


7 - Rode o comando e acesse a url do servidor fornecida

  
     php artisan serve

8 - Registre-se no sistema e poderá acessar todas as funcionalidades.
