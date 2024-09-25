<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>

    <main>
        <div>
            <h2>Cadastro de Usuário</h2>
            <form method="POST" action="index.php?action=RegisterView">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name">

                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    
                    <label for="perfil">Perfil</label>
                    <select name="perfil" id="perfil">
                        <option value="admin"> Admin</option>
                        <option value="gestor">Gestor</option>
                        <option value="colaborador">Colaborador</option>
                    </select>

                <button type="submit">Cadastrar</button>
            </form>
            <a href="index.php?action=LoginView">Voltar ao login</a>
        </div>
    </main>
    
</body>
</html>