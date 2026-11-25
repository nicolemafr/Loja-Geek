<?php
require "./data/conexao.php";
$sql = "Select * from categorias";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/categoria.css">
    <title>Categorias</title>
</head>

<body>
    <?php include "./view-adim/header.php" ?>

    <div class="body">
        <div class="nav">
            <nav>
                <a href="painel.php">Painel</a>
                <a href="usuários.php">Usuários</a>
                <a class="selected" href="categorias.php">Categorias</a>
                <a href="pedidos.php">Pedidos</a>
                <a href="produtos.php">Produtos</a>

                <button type="button">Sair</button>
            </nav>
        </div>

        <main>
            <h1>GERENCIAR CATEGORIAS</h1>

            <div class="caixas">
                <?php for ($i = 0; $i < $resultado->num_rows; $i++) {
                    $categoria = $resultado->fetch_assoc(); ?>
                    <a href="editar-categorias.php" class="caixa">
                        <div class="Fundo">
                            <img src="<?= htmlspecialchars($categoria['imagem']) ?>" alt="">
                        </div>

                        <div class="info">
                            <div>
                                <span>15 PRODUTOS</span>
                                <p><?= htmlspecialchars($categoria['nome']) ?></p>
                            </div>

                            <img src="imagens-adim/Botão add.png" alt="">
                        </div>
                    </a>
                <?php } ?>
            </div>
        </main>
    </div>
</body>

</html>