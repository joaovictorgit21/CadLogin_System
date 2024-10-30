<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="./components/css/dashboard.css">
</head>
 
<body class="<?= $_SESSION['perfil']?>">
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil']?></h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil']?>.</p>

        <?php if ($_SESSION['perfil'] == 'admin'): ?>
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>

        <?php elseif ($_SESSION['perfil'] == 'gestor'): ?>
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>

        <?php else:?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <a href="index.php?action=logout" class="btn btnLogout">Logout</a>
    </div>
</body>
</html>