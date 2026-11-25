<?php
require "./data/conexao.php";
$sql = "Select * from usuarios";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/usuarios.css">
    <title>Usuários</title>
</head>

<body>
    <?php include "./view-adim/header.php" ?>

    <div class="body">
        <div class="nav">
            <nav>
                <a href="painel.php">Painel</a>
                <a class="selected" href="usuários.php">Usuários</a>
                <a href="categorias.php">Categorias</a>
                <a href="pedidos.php">Pedidos</a>
                <a href="produtos.php">Produtos</a>

                <button type="button">Sair</button>
            </nav>
        </div>

        <main>
            <h1>GERENCIAR USUARIOS</h1>

            <div class="tabela">
                <div class="info">
                    <p class="id">ID</p>
                    <p>NOME</p>
                    <p>E-MAIL</p>
                    <p>TIPO</p>
                    <p class="del">DELETAR</p>
                </div>
                <?php for ($i = 0; $i < $resultado->num_rows; $i++) {
                    $usuario = $resultado->fetch_assoc();
                ?>
                    <a href="historico.php?id=<?= ($usuario['id_usuario']) ?>" class="itens">
                        <p><?= htmlspecialchars($usuario['id_usuario']) ?></p>

                        <p><?= htmlspecialchars($usuario['nome']) ?></p>

                        <p><?= htmlspecialchars($usuario['email']) ?></p>

                        <?php if ($usuario['adm'] == 1) { ?>
                            <p class="tipo"> <span></span> Administrador</p>
                        <?php } else { ?>
                            <p>Usuário</p>
                        <?php } ?>

                        <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                    </a>
                <?php } ?>
            </div>
        </main>
    </div>
</body>

</html>