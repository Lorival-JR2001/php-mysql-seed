# 📦 Projeto Semente PHP com Docker + MySQL + phpMyAdmin

Projeto semente de aplicação PHP rodando em um ambiente Docker com suporte a banco de dados MySQL e interface de gerenciamento via phpMyAdmin.

---

## 🧰 Tecnologias utilizadas

- PHP 8.1
- MySQL 5.7
- Apache
- phpMyAdmin
- Docker + Docker Compose

---

## 🚀 Como rodar o projeto

### 1. ⚙️ Requisitos

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Visual Studio Code (VS Code)](https://code.visualstudio.com/)

### 2. ▶️ Rodar os containers

Execute no terminal na raiz do projeto:

```bash
docker compose up -d --build
```

Isso irá:

- Iniciar o Apache com PHP
- Iniciar o banco de dados MySQL
- Iniciar o phpMyAdmin

---

## 🌐 Acessos

- Aplicação PHP: [http://localhost:8080](http://localhost:8080)
- phpMyAdmin: [http://localhost:8081](http://localhost:8081)

#### Credenciais do banco:

- **Servidor:** `db`
- **Usuário:** `root`
- **Senha:** `root`
- (ou use `user` / `pass` se preferir o usuário não-root)

---

## 📁 Banco de dados

O banco `tododb` será criado automaticamente com uma tabela `todos` assim que a aplicação for acessada pela primeira vez.

---

## ✅ Extensões recomendadas no VS Code

Para melhor experiência no desenvolvimento:

- 🔵 **PHP Extension Pack** – Suporte ao desenvolvimento PHP  
  [`felixfbecker.php-pack`](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-pack)

- 🐳 **Docker** – Gerencie seus containers dentro do VS Code  
  [`ms-azuretools.vscode-docker`](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker)

- 🧩 **PHP Intelephense** – Autocompletar e análise inteligente  
  [`bmewburn.vscode-intelephense-client`](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)

- 🔧 **Dev Containers**
  [`ms-vscode-remote.remote-containers`](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)

---

## 🧪 Funcionalidades do sistema

- Página inicial simples
- Página "Sobre"
- CRUD de tarefas estilo "To-Do" com:
  - Adição de tarefas
  - Remoção de tarefas
  - Armazenamento em banco MySQL
---

## ▶️ Outros comandos

Acessar shell do container:

```bash
docker exec -it [container_name] bash
```

Verificar disponibilidade:

```bash
curl -I http://localhost:[port]/
```

## 📄 Licença

Este projeto é de livre uso para fins educacionais e prototipagem.