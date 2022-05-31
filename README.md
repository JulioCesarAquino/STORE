<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<img  src="https://i.ibb.co/Np4cvKX/Route-List.png" alt="License">
</p>

## Bem vindo(a), 

Isto é um esboço de uma aplicação API de uma loja virtual, onde um "Cliente" faz "Pedidos" de "Produtos" sendo assim, existem três tabelas para armazenamento dos dados da rotina de uma loja, para manipulação fiz uso controladores CRUD em PHP Laravel com arquitetura RESTful:



## Siga as instruções para a importação da base de dados.
-  Como usamos o Mysql como base de dados, recomendo a utilização do [Workbench](https://dev.mysql.com/get/Downloads/MySQLGUITools/mysql-workbench-community-8.0.29-winx64.msi).
-  Após a instalação, crie uma conexão "mysql" com User: root, Senha: root! já configurados no arquivo .DEV
-  faça a importação do arquivo api-dev.sql para subir a base de dados pronta.

## Download do projeto.
- Baixe o projeto compactado diretamente por este [Link](https://github.com/JulioCesarAquino/STORE/archive/refs/heads/master.zip).
- Via SSH git@github.com:JulioCesarAquino/STORE.git
- ou use o comando git clone https://github.com/JulioCesarAquino/STORE.git para clonar o projeto em sua máquina, através da linha de comando.

## Executando o projeto em um servidor Web local
- Baixe o [PHP](https://drive.google.com/u/0/uc?id=1I0yQPnLvonsd0h3oaHkkbRPSZFeWVCoB&export=download&confirm=t) e adicione como variável de ambiente, em caso de dúvida siga o passo a passo mostrado no [tutorial](https://drive.google.com/file/d/1_npV-qp_bS_dzKB1_PB_VJtXrabMl0Yl/view).

### No Prompt de Comando

```bash
# Acesse o diretório do projeto
C:\ 
cd STORE

# Acesse a pasta public
C:\STORE
cd public

# Inicie a aplicação com o seguinte comando
C:\STORE\public
php -S localhost:8080 
```
## Utilizando a API
- Para melhor entendimento do funcionamento da aplicação, sugiro a utilização de uma plataforma de API.
#### Estarei utilizando o [Insomnia](https://insomnia.rest/)
- Solicitando todos o clientes.
    <img  src="https://i.ibb.co/kck7TV3/get-clients.gif" alt="License">
    
- Adicionando um novo cliente.
    <img  src="https://i.ibb.co/YjTpW6h/post-Clients.gif" alt="License">

## Tecnologias utilizadas

Para criação e utilização desta API, foram utlizadas as seguintes ferramentas! Para controlador [PHP Laravel](https://laravel.com/docs/9.x), para base de dados [MySQL Worckbench](https://www.mysql.com/) e o [Insomnia](https://insomnia.rest/) Para gerenciador de APIs. Dentre outras dependências [COMPOSER](https://getcomposer.org/) do laravel.

## Developed by

Júlio Cesar Aquino - [LinkedIn](https://www.linkedin.com/in/perfyu) 
