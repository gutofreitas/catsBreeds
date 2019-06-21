# catsBreeds
Esta API será utilizada para realizar consultas na API TheCatApi, e armazenar o cache da consulta em banco de dados.


Requisitos
==
    PHP 7.1.3 or higher;
    PDO-mysql PHP extension enabled;
    and the [usual Symfony application requirements][1].

Instalação
==
Execute os comandos abaixo para instalar o projeto:

  $ git clone https://github.com/gutofreitas/catsBreeds.git;
  
  $ cd catsBreeds;
  
  $ composer install;

Database create and migration
==
  $ php bin/console doctrine:database:create;
  
  $ php bin/console doctrine:migrations:diff;
  
  $ php bin/console doctrine:migrations:migrate;
  
  Lembrando de ajustar as credenciais de acesso a base de dados, no arquivo .env, localizado na raiz do projeto.

Use
==
Execute este comando para executar o servidor da Web integrado e acessar o aplicativo em seu navegador em http://localhost:8000;

$ php bin/console server:run

Documentacão
==
Para ter acesso a documentação da API, basta acessar:;
  
  http://localhost:8000
