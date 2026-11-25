<?php
require "./data/conexao.php";
$sql = "select pedidos.*, usuarios.nome from pedidos inner join usuarios on pedidos.id_usuario = usuarios.id_usuario";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/pedidos.css">
    <title>Pedidos</title>
</head>

<body>
    <?php include "./view-adim/header.php" ?>

    <div class="body">
        <div class="nav">
            <nav>
                <a href="painel.php">Painel</a>
                <a href="usuários.php">Usuários</a>
                <a href="categorias.php">Categorias</a>
                <a class="selected" href="pedidos.php">Pedidos</a>
                <a href="produtos.php">Produtos</a>

                <button type="button">Sair</button>
            </nav>
        </div>

        <main>
            <h1>GERENCIAR PEDIDOS</h1>

            <div class="filtro">
                <form action="">
                    <input type="text" name="" id="" placeholder="Buscar pedido, usuário ou produto...">
                </form>

                <select id="filtro" name="flitro">
                    <option value="none">Todos os status</option>
                    <option value="entrege">Entregue</option>
                    <option value="em trânsito">Em trânsito</option>
                    <option value="processando">Processando</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            </div>

            <div class="tabela">
                <div class="info">
                    <p class="NP">N° DO PEDIDO</p>
                    <p>USUÁRIO</p>
                    <p>DATA E HORA</p>
                    <p>TOTAL</p>
                    <p>STATUS</p>
                    <p>AÇÕES</p>
                </div>

                <?php for ($i = 0; $i < $resultado->num_rows; $i++) {
                    $pedido = $resultado->fetch_assoc(); ?>
                    <div class="itens">
                        <p><?= htmlspecialchars($pedido['id_pedido']) ?></p>

                        <p class="nome"><?= htmlspecialchars($pedido['nome']) ?></p>

                        <p class="data"><?= htmlspecialchars($pedido['data_pedido']) ?></p>

                        <p class="total"><?= htmlspecialchars($pedido['preco_total']) ?></p>

                        <p class="status"><?= htmlspecialchars($pedido['status']) ?></p>

                        <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                    </div>
                <?php } ?>

            </div>
        </main>
    </div>
</body>

</html>