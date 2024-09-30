# 🎉 System of Register and Login User with PHP

## 🌟 Visão Geral:

<p>
  Este projeto é um Sistema de Gerenciamento de Usuários, que permite o registro, autenticação e gerenciamento de perfis de usuários. Cada usuário pode ter um perfil de acesso diferente,     como Admin, Gestor ou Colaborador, o que pode determinar o nível de acesso e permissões dentro da aplicação.
</p>

## 👥 O projeto conta com três tipo de usuário do sistema:

<ul>
  <li> 👨‍💼 Admin</li>
  <li> 📊 Gestor</li>
  <li> 🤝 Colaborador</li>
</ul>

## ⚙️ Funcionalidade

<ul>
  <li>📝 Registro de Usuário</li>
  <li>🔑 Login de Usuário</li>
  <li>🔒 Sessão do Usuário</li>
  <li>📂 Perfil de Acesso</li>
</ul>

### 📝 Registro de Usuário:

<p>
  Os usuários podem se registrar na plataforma preenchendo um formulário com os seguintes campos:
</p>

<ul>
  <li>🧑 Nome: Nome completo do usuário</li>
  <li>📧 Email: Email único de cada usuário</li>
  <li>🔑 Senha: Senha para o acesso do usuário | Armazenada de forma segura usando o algoritmo de hashing</li>
  <li>🔖 Perfil: Tipo do usuário no sistema (admin, gestor ou colaborador)</li>
</ul>

### 🔑 Login de Usuário:

<p>
  Usuários registrados podem acessar a plataforma por meio do login:
</p>

<ul>
  <li>📧 Email: Email registrado no sistema</li>
  <li>🔑 Senha: Senha para o acesso registrada | será verificada através do <code>password_verify()</code></li>
</ul>

### 🔒 Sessão do Usuário:

<p>
  Após o login bem-sucedido, uma sessão é iniciada para o usuário, armazenando:
</p>

<ul>
  <li>🆔 <strong>ID do Usuário</strong></li>
  <li>👤 <strong>Perfil</strong> do usuário para controle de permissões</li>
</ul>

### 📂 Perfis de Acesso:

<p>
  Os usuários têm diferentes níveis de acesso dependendo do perfil:
</p>

<ul>
  <li>👨‍💼 <strong>Admin:</strong> Acesso completo ao sistema (a ser definido).</li>
  <li>📊 <strong>Gestor:</strong> Acesso a áreas de gerenciamento de equipe ou projetos (a ser definido).</li>
  <li>🤝 <strong>Colaborador:</strong> Acesso limitado (a ser definido).</li>
</ul>

## 🔄 Fluxo de Funcionamento:

### 🏗️ Padrão Utilizado:
<p>
  O padrão MVC (Model-View-Controller) é uma arquitetura amplamente utilizada para separar as responsabilidades em aplicações web, facilitando a manutenção e escalabilidade. 
</p>

<ol>
  <li>🧩 Model (Modelo): Gerencia a lógica de dados e a comunicação com o banco</li>
  <li>👁️ View (Visão): Exibe a interface do usuário, onde os usuários interagem com a aplicação.</li>
  <li>🔄 Controller (Controlador): Intermediário que processa as entradas do usuário, chamando o modelo e decidindo qual visão renderizar</li>
</ol>

<ol>
  <li>👤 O usuário interage com a view (ex.: preenche um formulário).</li>
  <li>🔄 A view envia os dados para o controller apropriado (ex.: AuthController para login).</li>
  <li>🔗 O controller processa os dados, interagindo com o model (ex.: verifica as credenciais no UserModel).</li>
  <li>🔄 Dependendo do resultado, o controller pode redirecionar para outra view ou retornar uma mensagem de erro.</li>
</ol>

## 🌐 Rotas e Fluxo da Aplicação:

<p>
  A aplicação utiliza o arquivo Routes.php para gerenciar o roteamento, que determina qual controlador e método serão acionados com base no parâmetro action passado pela URL
</p>

### 🔗 Rotas:

<ul>
  <li>🔑 Login: Quando <code>action=LoginView</code>, o AuthController é chamado para processar o login do usuário.</li>
  <li>📝 Registro: Com <code>action=RegisterView</code>, o UserController é invocado para lidar com o registro de um novo usuário.</li>
  <li>📥 Padrão: Se não houver uma action especificada, a aplicação redireciona para a função de login por padrão, garantindo que o usuário sempre tenha uma entrada.</li>
</ul>

## 🗄️ Estrutura do Banco de Dados:

### 🛠️ Criação do Banco de Dados:
``` mysql
-- Criação do Banco de Dados
CREATE DATABASE `sistema_usuario`;

-- Seleção do Banco de Dados
USE `sistema_usuario`;

-- Criação da Tabela de Usuários
CREATE TABLE `usuarios` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    perfil ENUM('admin', 'gestor', 'colaborador') NOT NULL,
    creat_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Descrição dos Campos:
<ul>
  <li> 🆔 ID: Chave primária única de cada usuário. </li>
  <li> 📖 Nome: Nome completo do usuário. </li>
  <li> ✉ Email: E-mail do usuário, usado para login.</li>
  <li> 🔑 Senha: Senha do usuário, armazenada com hashing para segurança.</li>
  <li> 👤 Perfil: Define o nível de acesso do usuário (admin, gestor, colaborador).</li>
  <li> 📅 Creat_at: Data de criação do registro no sistema.</li>
</ul>

## 📁 Arquitetura e Estrutura de Pastas do Projeto:
```
C:.
│   Auth.php
│   Database.sql
│   index.html
│   index.php
│   Logout.php
│   README.md
│   Routes.php
│
├───controller
│       AuthController.php
│       DashBoardController.php
│       UserController.php
│
├───model
│       DatabaseModel.php
│       UserModel.php
│
└───view
        DashBoardView.php
        EditUserView.php
        ListUserView.php
        LoginView.php
        RegisterView.php
```

## 💻 Tecnologias e Ferramentas Utilizadas:

|  Utilidade  | Tecnologia|
|-------------|-----------|
| 🖥 Back-End   |    PHP    |
| 👁‍🗨 Front-End  | HTML e CSS|
| 🎲 Database   |   MySQL   |

<p>
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=php,html,css,mysql" />
  </a>
</p>

|  Utilidade  | Ferramenta|
|-------------|-----------|
| 🔧   IDE     |   VSCode  |
| 🖥 Servidor   |XAMPP, Apache|
| 🎮 Controle de Versão| GIT e GitHub |

<p>
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=git,github,vscode" />
  </a>
</p>

## 📦 Instalação:

### 🛠 Pré-Requisito:

<ul>
  <li><strong>Servidor:</strong>  Apache. </li>
  <li><strong>PHP 7.4+:</strong> O sistema requer PHP e as extensões PDO. </li>
  <li><strong>MySQL:</strong> Banco de dados utilizado para armazenar os dados de usuários. </li>
</ul>

``` bash
git clone https://github.com/joaovicorgit21/CadLogin_System
```

#### 📤 Importe o Banco de Dados:
<p>
  Use o script database.sql ou o código SQL fornecido para criar o banco de dados e a tabela de usuários.
</p>

#### ⚙️ Configure as credenciais do banco de dados:
<p>
  Edite o arquivo DatabaseModel.php e insira suas credenciais de acesso ao MySQL.
</p>

## 📈 Linguagem mais utilizada:

<img width=10% src="https://img.shields.io/github/languages/top/vitorgabrieldevk/Account_Management_System"/>

## Autores:

# 👨‍💻 Programador Criador

| [<img loading="lazy" src="https://avatars.githubusercontent.com/u/10586424?v=4" width=95><br><sub>João Victor Farias</sub>](https://github.com/leonardossrocha)
| :--: |

# 📲 Programador Adaptador

| [<img loading="lazy" src="https://avatars.githubusercontent.com/u/111014716?s=400&u=5d8ff835762bc44c2651472ac96f0f9fc1f953a6&v=4" width=95><br><sub>João Victor Farias</sub>](https://github.com/joaovictorgit21)
| :---: |
