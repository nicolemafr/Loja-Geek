<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/produtopesquisa.css">
    <title>Produto-Barra de Pesquisa</title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="body">
        <div class="filtro">
            <h2>CATEGORIAS</h2>
            <p class="selected">Todos</p>
            <p>Colecionáveis</p>
            <p>Vestuário</p>
            <p>Acessórios</p>
            <p>Decoração</p>
            <p>Games</p>

            <div class="Fpreco">
                <h2>Preço</h2>
            </div>

            <h2>Disponibilidade</h2>
            <p> <span class="full"></span> Em estoque</p>
            <p> <span></span> Esgotado</p>
        </div>

        <section>
            <div class="info-top">
                <div class="text">
                    <h2>NAVEGUE</h2>
                    <p>120 produtos encontrados</p>
                </div>

                <div class="filtro2">
                    Ordenar por:
                    <select id="categoria" name="categoria">
                        <option value="none">Selecione...</option>
                        <option value="funko pop">Funko Pop</option>
                        <option value="mangás">Mangás</option>
                        <option value="vestuário">Vestuário</option>
                        <option value="decoração">Decoração</option>
                        <option value="utensílios">Utensílios</option>
                        <option value="comics">Comics</option>
                        <option value="cartas">Cartas</option>
                        <option value="acessórios">Acessórios</option>
                    </select>
                </div>
            </div>

            <div class="produtos">
                <div class="produto">
                    <img src="imagens/produto1.png" alt="">
                    <h3>Funko Pop Sakura</h3>
                    <p>Naruto</p>
                    <h2>R$ 149,90</h2>
                    <div class="info">
                        <p> <span></span> Em estoque</p>
                        <img src="imagens/Carrinho 2.png" alt="">
                    </div>
                </div>

                <div class="produto">
                    <img src="imagens/produto1.png" alt="">
                    <h3>Funko Pop Sakura</h3>
                    <p>Naruto</p>
                    <h2>R$ 149,90</h2>
                    <div class="info">
                        <p> <span></span> Em estoque</p>
                        <img src="imagens/Carrinho 2.png" alt="">
                    </div>
                </div>

                <div class="produto">
                    <img src="imagens/produto1.png" alt="">
                    <h3>Funko Pop Sakura</h3>
                    <p>Naruto</p>
                    <h2>R$ 149,90</h2>
                    <div class="info">
                        <p> <span></span> Em estoque</p>
                        <img src="imagens/Carrinho 2.png" alt="">
                    </div>
                </div>

                <div class="produto">
                    <img src="imagens/produto1.png" alt="">
                    <h3>Funko Pop Sakura</h3>
                    <p>Naruto</p>
                    <h2>R$ 149,90</h2>
                    <div class="info">
                        <p> <span></span> Em estoque</p>
                        <img src="imagens/Carrinho 2.png" alt="">
                    </div>
                </div>

                <div class="produto">
                    <img src="imagens/produto1.png" alt="">
                    <h3>Funko Pop Sakura</h3>
                    <p>Naruto</p>
                    <h2>R$ 149,90</h2>
                    <div class="info">
                        <p> <span></span> Em estoque</p>
                        <img src="imagens/Carrinho 2.png" alt="">
                    </div>
                </div>

                <div class="produto">
                    <img src="imagens/produto1.png" alt="">
                    <h3>Funko Pop Sakura</h3>
                    <p>Naruto</p>
                    <h2>R$ 149,90</h2>
                    <div class="info">
                        <p> <span></span> Em estoque</p>
                        <img src="imagens/Carrinho 2.png" alt="">
                    </div>
                </div>

            </div>

            <div class="numeracao">
                <p class="selected">1</p>
                <p>2</p>
                <p>3</p>
                <p>...</p>
            </div>
        </section>
    </div>
    <?php include "./view/footer.php" ?>
</body>

</html>