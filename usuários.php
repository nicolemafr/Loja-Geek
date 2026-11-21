<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/usuarios.css">
    <title>Painel de Estoques</title>
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
            <h1>GERENCIAR USUARIOS</h1>

            <div class="tabela">
                <div class="info">
                    <p class="id">ID</p>
                    <p>NOME</p>
                    <p>E-MAIL</p>
                    <p>TIPO</p>
                    <p class="del">DELETAR</p>
                </div>

                <a href="historico.php" class="itens">
                    <p>001</p>

                    <p>Sofia Rodrigues</p>

                    <p>sofia.rodrigues@gmail.com</p>

                    <p class="tipo"> <span></span> Administrador</p>

                    <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                </a>

                <a  href="historico.php" class="itens">
                    <p>001</p>

                    <p>Sofia Rodrigues</p>

                    <p>sofia.rodrigues@gmail.com</p>

                    <p class="tipo"> <span></span> Administrador</p>

                    <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                </a>
            </div>
        </main>
    </div>
</body>

</html>