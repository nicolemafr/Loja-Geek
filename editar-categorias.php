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
            <h1> <img src="imagens-adim/left.png" alt=""> EDITAR MANGÁS</h1>

            <div class="caixas">
                <div class="caixa">
                    <p>Total de produtos</p>

                    <span>15</span>
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

                <div class="itens">
                    <div class="produto">
                        <img src="imagens-adim/Manga9-2.png" alt="">
                        <p>Mangá de Naruto</p>
                    </div>

                    <p class="quantidade">120</p>

                    <p class="em-estoque">Em estoque</p>

                    <div class="acoes">
                        <img src="imagens-adim/Caneta-Editar.png" alt="Editar">
                        <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                    </div>
                </div>

                <div class="itens">
                    <div class="produto">
                        <img src="imagens-adim/Manga9-2.png" alt="">
                        <p>Mangá de Naruto</p>
                    </div>

                    <p class="quantidade">120</p>

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