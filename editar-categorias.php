<?php include "./data/conexao.php";
$id = $_GET['id'];
$sql = "SELECT categorias.*, produtos.quantidade_estoque, produtos.imagem, produtos.nome as produto_nome FROM categorias left JOIN produtos  ON categorias.id_categoria = produtos.id_categoria WHERE categorias.id_categoria = $id";
$resultado = $conn->query($sql);
$dados = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/editar-categoria.css">
    <title>Editar Categorias</title>
</head>

<body>
    <?php include "./view-adim/header.php" ?>

    <div class="body">
        <div class="nav">
            <nav>
                <a href="painel.php">Painel</a>
                <a href="usuários.php">Usuários</a>
                <a href="categorias.php">Categorias</a>
                <a href="pedidos.php">Pedidos</a>
                <a href="produtos.php">Produtos</a>

                <button type="button">Sair</button>
            </nav>
        </div>

        <main>
            <h1> <a href="categorias.php"><img src="imagens-adim/left.png" alt=""></a> EDITAR <?= $dados['nome'] ?></h1>

            <div class="caixas">
                <div class="caixa">
                    <p>Total de produtos</p>

                    <span><?= $dados['quantidade_estoque'] ?></span>
                </div>
                <div class="caixa estoque">
                    <p>Em estoque</p>

                    <span>12</span>
                </div>
                <div class="caixa estoqueB">
                    <p>Estoque baixo</p>

                    <span>3</span>
                </div>
                <div class="caixa esgotado">
                    <p>Esgotados</p>

                    <span>1</span>
                </div>
            </div>

            <div class="tabela">

                <div class="info">
                    <p>PRODUTO</p>
                    <p>QUANTIDADE</p>
                    <p>STATUS</p>
                    <p>AÇÕES</p>
                </div>
                <?php for ($i = 0; $i < $resultado->num_rows; $i++) {?>
                <div class="itens">
                    <div class="produto">
                        <img src="<?= $dados['imagem'] ?>" alt="">
                        <p><?= $dados['produto_nome'] ?></p>
                    </div>

                    <p class="quantidade"><?= $dados['quantidade_estoque'] ?></p>

                    <p class="em-estoque">Em estoque</p>

                    <div class="acoes">
                        <img src="imagens-adim/Caneta-Editar.png" alt="Editar">
                        <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                    </div>
                </div>
                <?php } ?>
            </div>
        </main>
    </div>
</body>

</html>