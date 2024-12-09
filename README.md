# UserCRUD-Tabs

Este projeto foi desenvolvido como parte de uma atividade do Bootcamp Fullstack com PHP do Juventude Digital.

## Descrição

O objetivo do projeto é criar uma aplicação de CRUD (Create, Read, Update, Delete) para gerenciar usuários, utilizando PHP para o back-end, PostgreSQL como banco de dados e Docker para facilitar o gerenciamento de containers e ambientes.

## Estrutura de Diretórios

Essa estrutura é apenas um exemplo e pode variar dependendo das necessidades específicas do projeto

```bash
UserCRUD-Tabs/
├── docker/
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       └── Dockerfile
├── docker-compose.yml
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── delete.php
│   ├── index.php
│   ├── login.php
│   ├── profile.php
│   └── register.php
└── README.md
```

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação utilizada para o desenvolvimento da aplicação.
- **PostgreSQL**: Banco de dados relacional utilizado para armazenar as informações dos usuários.
- **Docker**: Ferramenta que facilita a criação e gerenciamento de containers para garantir que o ambiente de desenvolvimento seja consistente em qualquer máquina.
- **Composer**: Gerenciador de dependências PHP utilizado para instalar bibliotecas e pacotes necessários para o projeto.

## Como Rodar o Projeto

1. Clone o repositório:

```bash
git clone https://github.com/Sir-Vinicius/UserCRUD-Tabs
cd UserCRUD-Tabs
```

2. Certifique-se de ter o Docker instalado em sua máquina.

3. Construa e inicie os containers Docker:

```bash
docker-compose up --build
```

Isso criará os containers para o PHP e PostgreSQL de acordo com a configuração do arquivo docker-compose.yml.

4. Acesse a aplicação no navegador, utilizando a URL padrão do Docker:

```bash
http://localhost:8000
```