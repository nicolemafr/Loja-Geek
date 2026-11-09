<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>

<header>
    <img class="logo-header" src="./imagens/logo.png" alt="Logo Site">

    <nav>
        <a class="Home-Header <?= $paginaAtual == 'index.php' ? 'ativo' : '' ?>" href="index.php">Home</a>

        <a class="Sobre-Header <?= $paginaAtual == 'sobre.php' ? 'ativo' : '' ?>" href="sobre.php">Sobre</a>

        <a class="Produtos-Header <?= $paginaAtual == 'produtos.php' ? 'ativo' : '' ?>" href="produtos.php">Produtos</a>
    </nav>

    <div class="meio-header">
        <img src="./imagens/Barra-Lupa.png" alt="Lupa">
        <input placeholder="Buscar Produtos..." id="barraPesquisa" name="nome" type="text">
    </div>

    <div class="direita-header">
        <a href="" ><img class="carrinho" src="./imagens/carrinho.png" alt=""></a>
        <a href="" ><img class="perfil-user" src="./imagens/perfil-user.png" alt=""></a>
    </div>
</header>