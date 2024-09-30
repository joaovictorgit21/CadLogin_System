<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Web -->
    <title>Cadastro de Usuário</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./components/css/registerUser.css">
    
</head>
<body>

    <main>
        <div class="container">
            <h2>Registro de Usuário</h2>
            <br>
            <form method="POST" action="index.php?action=RegisterView">
                <section class="secName">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" placeholder="Name">
                </section>
                <br>
                <section class="secEmail">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Email">
                </section>
                <br>
                <section class="secPass">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Password">
                </section>
                <br>
                <section class="secProfile">
                    <label for="profile">Perfil:</label>
                    <br>
                    <select name="profile" id="profile" class="profile">
                        <option value="admin"> Admin</option>
                        <option value="gestor">Gestor</option>
                        <option value="colaborador">Colaborador</option>
                    </select>
                </section>
                <br>
                <button class="btnRegister" type="submit">Cadastrar</button>
            </form>
            <br>
            <a class="backLogin" href="index.php?action=LoginView">Voltar ao login</a>
        </div>
    </main>
    
</body>
</html>