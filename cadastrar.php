<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <h1>CADASTRE-SE</h1>

        <form method="POST">
            <div>
                <label for="nome">NOME</label>
                <input type="text" name="nome" id="nome" autocomplete="off" placeholder="Ex.: Maria Silva">
            </div>

            <div>
                <label for="email">EMAIL</label>
                <input type="email" name="email" id="email" autocomplete="off" required placeholder="Ex.: mariasilva@gmail.com">
            </div>

            <div>
                <label for="senha">SENHA</label>
                <input type="password" name="senha" id="senha" autocomplete="off" required placeholder="Ex.: 123456">
                <a href="login.php">Já tem uma conta?</a>
            </div>

            <button type="submit">CADASTRAR</button>
            <div class="BotaoF"></div>
        </form>
    </main>
</body>

</html>