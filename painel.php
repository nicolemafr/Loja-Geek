<?php
require "./data/conexao.php";
$sql = "Select * from produtos";
$sql2 = "Select categorias.nome from produtos inner 
join categorias on categorias.id_categoria = produtos.id_categoria";
$resultado = $conn->query($sql);
$resultado2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/painel.css">
    <title>Painel de Estoques</title>
</head>

<body>
    <?php include "./view-adim/header.php" ?>

    <div class="body">
        <div class="nav">
            <nav>
                <a class="selected" href="painel.php">Painel</a>
                <a href="usuários.php">Usuários</a>
                <a href="categorias.php">Categorias</a>
                <a href="pedidos.php">Pedidos</a>
                <a href="produtos.php">Produtos</a>

                <button type="button">Sair</button>
            </nav>
        </div>

        <main>
            <h1>GERENCIAR ESTOQUE</h1>

            <button type="submit" class="adicionar">
                ADICIONAR PRODUTO +
                <img src="imagens-adim/Botão8.png" alt="" class="AddF">
            </button>

            <div class="caixas">
                <div class="caixa">
                    <p>Total de produtos</p>

                    <span>48</span>
                </div>
                <div class="caixa estoque">
                    <p>Em estoque</p>

                    <span>16</span>
                </div>
                <div class="caixa estoqueB">
                    <p>Estoque baixo</p>

                    <span>8</span>
                </div>
                <div class="caixa esgotado">
                    <p>Esgotados</p>

                    <span>4</span>
                </div>
            </div>

            <div class="tabela">

                <div class="info">
                    <p>PRODUTO</p>
                    <p>CATEGORIA</p>
                    <p>QUANTIDADE</p>
                    <p>STATUS</p>
                    <p>DELETAR</p>
                </div>
                <?php for ($i = 0; $i < $resultado->num_rows; $i++) {
                    $produto = $resultado->fetch_assoc();
                    $categoria = $resultado2->fetch_assoc();
                    ?>
                    <div class="itens">
                        <div class="produto">
                            <img src="<?= htmlspecialchars($produto['imagem']) ?>" alt="">
                            <p><?= htmlspecialchars($produto['nome']) ?></p>
                        </div>

                        <p><?= htmlspecialchars($produto['nome']) ?></p>
                        <p class="quantidade"><?= htmlspecialchars($produto['quantidade_estoque']) ?></p>
                        <?php if ($produto['quantidade_estoque'] > 0) { ?>
                            <p class="em-estoque">Em estoque</p>
                        <?php } else { ?>
                            <p>Sem estoque</p>
                        <?php } ?>

                        <div class="acoes">
                            <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                        </div>
                    </div>
                <?php } ?>

            </div>
        </main>
    </div>
</body>

</html>