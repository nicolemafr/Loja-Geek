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

                <div class="itens">
                    <p>001</p>

                    <p class="nome">Sofia Rodrigues</p>

                    <p class="data">10/11/2026 - 14:22</p>

                    <p class="total">R$93,50</p>

                    <p class="status">Entregue</p>

                    <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                </div>

            </div>
        </main>
    </div>
</body>

</html>