<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhes.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Detalhes do Pedido</title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="body">
        <div>
            <h1>DETALHES DO PEDIDO</h1>
            <p>Confira todas as informações sobre seu pedido. </p>
        </div>

        <div class="pedido">
            <div class="info">
                <div>
                    <h3>Pedido #017</h3>
                    <span>Entrega</span>
                </div>
                <p>Realizado em: 10/11/2026 - 14:22</p>
            </div>

            <div class="pago">
                <p>Total pago</p>
                <span>R$93,00</span>
            </div>
        </div>

        <div class="item">
            <h2>Itens do Pedido</h2>

            <div class="produto">
                <div class="info-produ">
                    <img src="imagens/produto1.png" alt="">

                    <div>
                        <h1>BONECO FUNKO POP SAKURA</h1>
                        <h2>NARUTO</h2>
                    </div>
                </div>

                <div class="info-produ2">
                    <p>1 unidade</p>
                    <h1>R$93,00</h1>
                </div>
            </div>
        </div>

        <div class="pagamento">
            <div>
                <h3>Pagamento</h3>
                <p>via PIX</p>
            </div>

            <p>Pagamento Aprovado</p>
        </div>
    </div>

    <?php include "./view/footer.php" ?>
</body>

</html>