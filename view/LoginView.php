<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
</head>
<body>

    <main>
        <form action="index.php?action=LoginView" method="POST">
            <section>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="email">

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="password">
            </section>
            <button class="btnLogin" name="btnLogin" type="submit">Login</button>
        </form>

        <a href="index.php?action=RegisterView">Cadastrar-se</a>
    </main>
    
</body>
</html>