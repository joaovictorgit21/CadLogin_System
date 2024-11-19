<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5 d-none-custom">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Editar Usuário</h2>
            </div>
            <div class="card-body">
                <form method="post" action="index.php?action=edit&id=<?= $dataUser['id'] ?>">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="<?= $dataUser['nome'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $dataUser['email'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="perfil" class="form-label">Perfil:</label>
                        <select name="perfil" id="perfil" class="form-select">
                            <option value="admin" <?= $dataUser['perfil'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="gestor" <?= $dataUser['perfil'] == 'gestor' ? 'selected' : '' ?>>Gestor</option>
                            <option value="colaborador" <?= $dataUser['perfil'] == 'colaborador' ? 'selected' : '' ?>>Colaborador</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2">Salvar</button>
                        <a href="index.php?action=list" class="btn btn-secondary">Voltar para Lista de Usuários</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>