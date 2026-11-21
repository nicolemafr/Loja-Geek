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
                <p class="selected">Painel</p>
                <p>Usuários</p>
                <p>Categorias</p>
                <p>Pedidos</p>
                <p>Produtos</p>

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
                
            </div>
        </main>
    </div>
</body>

</html>