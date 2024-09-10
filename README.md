## Iniciar o projeto 

php 8.2 ou superior

## Instalar as dependências do php
composer install

## Gerar a chave
php artisan key:generate

## criar o projeto
composer create-project laravel/laravel .

## Iniciar o projeto com o laravel

php artisan serve

## Acessar o conteúdo padrão

http://127.0.0.1:8000

## Criar migration

php artisan make:migration create_name_table

## Adicionar campo na migration

php artisan make:migration alter_tabela_add_campo_table

## Executar as migration
php artisan migrate

## Usar os arquivos do github

git clone --branch <branch name> <url do repositório> .

## verificar a breach

git branch

## Baixar as atualizações

git pull

## Criar view
php artisan make:view nome

php artisan make:view courses/show

## Criando as seeds
php artisan db:seed

## Rollback da migrate
php artisan migrate:rollback

## Criando a validação do formulário pelo Request
php artisan make:request tabelaRequest

## Criando um componente na pasta de views
php artisan make:component nomedocomponente --view






