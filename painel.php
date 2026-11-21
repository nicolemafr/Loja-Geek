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
                    <p>AÇÕES</p>
                </div> 

                <div class="itens">

                    <div class="produto">
                        <img src="imagens-adim/perfil-user.png" alt="">
                        <p>Camiseta NIKA</p>
                    </div>

                    <p>Vestuário</p>

                    <p class="quantidade">20</p>

                    <p class="em-estoque">Em estoque</p>

                    <div class="acoes">
                        <img src="imagens-adim/Caneta-Editar.png" alt="Editar">
                        <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                    </div>

                </div>

            </div>
        </main>
    </div>
</body>

</html>