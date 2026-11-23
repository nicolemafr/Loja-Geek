<?php
include "./data/conexao.php";

session_start();

$nome = $_SESSION["usuario_nome"] ?? "Usuário";

$paginaAtual = basename($_SERVER['PHP_SELF']);
?>

<header>

    <img class="logo-header" src="./imagens/logo.png" alt="Logo Site">

    <nav>

        <a class="Home-Header <?= $paginaAtual == 'home.php' ? 'ativo' : '' ?>" href="home.php">
            HOME
        </a>

        <a class="Sobre-Header <?= $paginaAtual == 'sobre.php' ? 'ativo' : '' ?>" href="sobre.php">
            SOBRE
        </a>

        <a class="Produtos-Header <?= $paginaAtual == 'produtos.php' ? 'ativo' : '' ?>" href="produtos.php">
            PRODUTOS
        </a>

    </nav>

    <div class="meio-header">

        <img src="./imagens/Barra-Lupa.png" alt="Lupa">

        <input placeholder="Buscar Produtos..." id="barraPesquisa" name="nome" type="text">

    </div>

    <div class="direita-header">

        <a href="">
            <img class="carrinho" src="./imagens/carrinho.png" alt="">
        </a>

        <button id="btnPerfil">

            <img class="perfil-user" src="./imagens/Fundo-Perfil1.png" alt="">
            <img class="avatar-header" src="./imagens/avatar11.png" alt="">

        </button>


        <div id="modalPerfil" class="modal-perfil">

            <div class="modal-cima">

                <div class="escrita-modal-cima">

                    <h3>MINHA CONTA</h3>

                    <p><?= htmlspecialchars($nome) ?></p>

                </div>

                <div class="fotoUser-modal">

                    <img class="fundo-modal" src="./imagens/Fundo-Perfil1.png" alt="">
                    <img class="avatar-modal" src="./imagens/avatar11.png" alt="">
                </div>

            </div>


            <div class="modal-meio">
                <div class="editar">
                    <a href="/editar-PerfilUsuario.php">
                        EDITAR PERFIL
                    </a>
                </div>
                <div class="pedido">
                    <a href="">
                        MEUS PEDIDOS
                    </a>
                </div>
                <div class="Sair">

                    <a href="../logout.php">
                        SAIR
                    </a>

                </div>

            </div>


            <div class="modal-baixo">

                <a href="">

                    CRIAR UMA NOVA CONTA

                    <img src="./imagens/modal-adicionar.png" alt="">

                </a>

            </div>

        </div>

    </div>

    <script src="./assets/modal.js"></script>

</header>