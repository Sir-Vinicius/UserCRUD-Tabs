# Variáveis para facilitar
DOCKER_COMPOSE = docker-compose
SERVICE = app

# Alvos do Makefile

# "make" sem nenhum argumento rodará esse alvo por padrão
up:
    # Subir os containers com docker-compose
    $(DOCKER_COMPOSE) up -d

# Para rodar o banco de dados, criando a tabela e dados (chama o init.sql automaticamente na primeira vez)
migrate:
    $(DOCKER_COMPOSE) exec db psql -U postgres -d bancoCRUD -f /docker-entrypoint-initdb.d/init.sql

# "down" vai parar os containers
down:
    $(DOCKER_COMPOSE) down

# Para rodar tudo (subir os containers e fazer a migração)
init: up migrate
