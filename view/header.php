<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>

<header>

    <img class="logo-header" src="./imagens/logo.png" alt="Logo Site">

    <nav>

        <a class="Home-Header <?= $paginaAtual == 'index.php' ? 'ativo' : '' ?>" href="index.php">
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

            <img class="perfil-user" src="./imagens/perfil-user.png" alt="">

        </button>


        <div id="modalPerfil" class="modal-perfil">

            <div class="modal-cima">

                <div class="escrita-modal-cima">

                    <h3>MINHA CONTA</h3>

                    <p>João Vitor</p>

                </div>

                <div class="fotoUser-modal">

                    <img src="./imagens/perfil-user.png" alt="">

                </div>

            </div>


            <div class="modal-meio">

                <a href="">
                    EDITAR PERFIL
                </a>

                <div class="Sair">

                    <a href="">
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