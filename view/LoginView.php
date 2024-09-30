<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Web -->
    <title>Login de Usuário</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./components/css/loginUser.css">

</head>
<body>

    <main>
        <div class="container">
            <h2>Login de Usuário</h2>

            <br>
            <form class="formLogin" action="index.php?action=LoginView" method="POST">
                <section class="secEmail">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="email">
                </section>
                <br>
                <section class="secPass">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" placeholder="password">
                </section>
                <br>
                <button class="btnLogin" name="btnLogin" type="submit">Login</button>
            </form>
            <br>

            <a class="toRegister" href="index.php?action=RegisterView">Cadastrar-se</a>
        </div>
    </main>
    
</body>
</html>