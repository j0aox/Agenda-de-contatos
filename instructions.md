<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pré-requisitos

Na sua máquina você terá que ter instalado as seguintes tecnologia
- PHP
- MySQL
- Composer

## Como executar o projeto

Antes de executar o projeto, você terá que criar uma base de dados com o nome (crud)

```bash
Clonar o repositorio
https://github.com/j0aox/Crude-with-Laravel.git

Entrar no diretório que foi criado 
cd Crude-with-Laravel

Instalar Dependências
composer install

Alterar o arquivo 
.env.example para .env

Criar a chave do projeto
php artisan key:generate

Rodar as migrate para criar as tabelas do banco
php artisan migrate

Startar o projeto
php artisan serve

```
Depois de feito tudo isso, abra o navegador e acesse (http://localhost:8000)
