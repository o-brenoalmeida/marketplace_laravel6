﻿# Índice
- [Descrição](#descricao)  
- [Tecnologias Utilizadas ](#tecnologias-utilizadas)
- [Como baixar o projeto  ](#como-baixar-o-projeto)

## 🔖 Descrição

Projeto de **Marketplace** utilizado para o aprendizado do framework **Laravel**. Inicialmente o projeto foi desenvolvido na versão 6, mas ao término haverá migração para as versões 7 e 8. Foi utilizado como base o curso [**Laravel 6 na Prática - Criando um Marketplace**](https://www.udemy.com/course/laravel-6-na-pratica) no Udemy do **Nanderson** .

---

## 🚀Tecnologias utilizadas

Esse projeto foi desenvolvido utilizando as seguintes tecnologias

- [PHP](https://https://https://www.php.net/)  
- [Laravel](https://laravel.com/)
- [HTML](https://www.w3schools.com/html/)
- [CSS](https://www.w3schools.com/css/default.asp)
- [Bootstrap](https://getbootstrap.com/)

---

## 📂Como baixar o projeto

```bash
    # Clonar o repositório
    $ git clone https://github.com/o-brenoalmeida/marketplace_laravel6.git

    # Entrar no diretório
    $cd cd storage/

    # Criar os diretórios dentros de storage
    $mkdir -p framework/{sessions,views,cache}

    # Dar permissões
    $chmod -R 775 framework

    # Subir o server
    $php artisan serve

    # Atualizar o arquivo env com as configurações de conexão de banco de dados
    -

    # Executar as migrations
    $php artisan migrate

    # Popular com as seed o banco de dados
    $php artisan db:seed

```