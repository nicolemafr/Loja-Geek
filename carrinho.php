<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/carrinho.css">
    <title>Carrinho</title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="info">
        <h1>MEU CARRINHO</h1>

        <p>Continuar comprando</p>
    </div>

    <section>
        <div class="itens">
            <div class="itens-info">
                <h2>Produto</h2>
                <h2>Preço</h2>
                <h2>Quantidade</h2>
                <h2>Total</h2>
                <span></span>
            </div>

            <div class="item">

                <div class="produto">
                    <section class="prodinfo">
                        <img src="imagens/produto1.png" alt="Funko Pop Sakura">

                        <div>
                            <h3>Funko Pop Sakura</h3>
                            <h4>Funko Pop</h4>
                        </div>
                    </section>
                </div>

                <span class="preco">R$149,99</span>

                <div class="quantidade">
                    <img src="imagens/Botao-carrinho.png" alt="">

                    <button type="button">-</button>
                    <span>1</span>
                    <button type="button">+</button>
                </div>

                <span class="total">R$149,99</span>

                <button class="excluir" type="button" aria-label="Excluir produto">
                    <img src="imagens/Lixeira.png" alt="">
                </button>
            </div>
        </div>

        <div class="resumo">

        </div>
    </section>
</body>

</html>