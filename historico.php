<?php include "./data/conexao.php";
$id = $_GET['id'];
$sql = "SELECT itens_pedido.*, produtos.nome AS produto, categorias.nome AS categoria, pedidos.data_pedido as data FROM itens_pedido INNER JOIN produtos ON itens_pedido.id_produto = produtos.id_produto INNER JOIN categorias ON produtos.id_categoria = categorias.id_categoria INNER JOIN pedidos ON itens_pedido.id_pedido = pedidos.id_pedido WHERE itens_pedido.id_pedido =$id";
$sql2 = "select nome, email from usuarios where id_usuario = $id";
$resultado = $conn->query($sql);
$resultado2 = $conn->query($sql2);
$dados = $resultado2->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/historico.css">
    <title>Historico do Usuario</title>
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
            <h1> <a href="usuários.php"><img src="imagens-adim/left.png" alt=""></a> HISTORICO DO USUARIO</h1>

            <div class="nome">
                <h2><?= $dados['nome'] ?></h2>
                <p><?= $dados['email'] ?></p>
            </div>

            <div class="tabela">
                <div class="info">
                    <p class="id">ID</p>
                    <p class="prod">PRODUTO</p>
                    <p class="ct">CATEGORIA</p>
                    <p class="dt">DATA</p>
                    <p class="del">PREÇO</p>
                </div>

                <div class="itens">
                    <?php for ($i = 0; $i < $resultado->num_rows; $i++) {
                    $pedido = $resultado->fetch_assoc(); ?>
                    <p><?= htmlspecialchars($pedido['id_pedido']) ?></p>

                    <p class="prodN"><?= htmlspecialchars($pedido['produto']) ?></p>

                    <p><?= htmlspecialchars($pedido['categoria']) ?></p>

                    <p><?= htmlspecialchars($pedido['data']) ?></p>

                    <p>R$<?= htmlspecialchars($pedido['subtotal']) ?></p>
                    <?php } ?>
                </div>

            </div>

            <div class="compra">
                <div class="QuanC">
                    <h2>Quantidade de Compras</h2>

                    <h2>5 vezes</h2>
                </div>
                <div class="Total">
                    <h2>Total de Gasto</h2>

                    <h2>R$187,00</h2>
                </div>
            </div>
        </main>
    </div>
</body>

</html>