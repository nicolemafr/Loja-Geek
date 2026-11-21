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
                <h2>Sofia Rodrigues</h2>
                <p>sofia.rodrigues@gmail.com</p>
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
                    <p>001</p>

                    <p class="prodN">FUNKO POP MULHER ARANHA</p>

                    <p>MARVEL</p>

                    <p>28/04/2018</p>

                    <p>R$93,50</p>
                </div>

                <div class="itens">
                    <p>001</p>

                    <p class="prodN">FUNKO POP MULHER ARANHA</p>

                    <p>MARVEL</p>

                    <p>28/04/2018</p>

                    <p>R$93,50</p>
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