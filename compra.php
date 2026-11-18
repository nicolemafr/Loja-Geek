<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/compra.css">
    <title>Compra</title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="body">
        <div class="identi">
            <h2>IDENTIFCAÇÃO</h2>

            <p>Usamos seus dados para processar seu pedido, enviar atualizações de entrega e ofertas, conforme a nossa Política de Privacidade.</p>

            <form method="POST">
                <label for="email">Email</label>
                <input type="email" autocomplete="off" required placeholder="ex: maria@gmail.com" name="email" id="email">

                <label for="cpf">CPF</label>
                <input type="text" autocomplete="off" required placeholder="000.000.000-00" name="cpf" id="cpf">
            </form>
        </div>

        <div class="endetre">
            <h2>ENDEREÇO DE ENTREGA</h2>

            <form method="POST">
                <label for="nome">Nome do destinatário</label>
                <input type="text" autocomplete="off" required placeholder="Maria" name="nome" id="nome">

                <label for="cpf">Telefone</label>
                <input type="text" autocomplete="off" required placeholder="(00) 00000-0000" name="nome" id="nome">

                <label for="cep">CEP</label>
                <input type="text" autocomplete="off" required placeholder="00000-000" name="cep" id="cep">
            </form>

            <p class="cep">Não sabe seu CEP?</p>
        </div>

    </div>

    <div class="paga">
        <h2>PAGAMENTO</h2>

        <div class="option">
            <div class="bola"></div>

            <div>
                <h1>PIX</h1>
                <p>APROVAÇÃO IMEDIATA</p>
            </div>
        </div>
    </div>

    <div class="finalizar">
        <button type="submit">FINALIZAR COMPRA</button>

        <img src="imagens/botao-editar.png" alt="">
    </div>

    <?php include "./view/footer.php" ?>
</body>

</html>