
<?php
    require"./data/conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Document</title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="produtoContainer">
        <div class="sub-img">
            <img src="https://placehold.co/150x180" alt="">
            <img src="https://placehold.co/150x180" alt="">
            <img src="https://placehold.co/150x180" alt="">
        </div>

        <div class="img-Produto-principal"><img src="https://placehold.co/600x600" alt=""></div>


        <div class="infoProduto">

            <div class="text-info">
                <h1><?php 2 ?></h1>
                <p class="categoriatext">bbbbbbbbbbbbbbbbbbbb</p>
                <div class="promo-card">
                    <p>EM PROMOÇÃO</p>
                </div>
                <h3>R$149,90</h3>
                <h2>R$93,90</h2>
            </div>
            <div class="qtd-produto">
                <div class="divisor-produto">
                    <p>TAMANHO</p>
                    <span class="tamanho">TAMANHO ÚNICO</span>
                </div>
                <div class="divisor-produto">
                    <p>QUANTIDADE</p>
                    <div class="quantidade">
                        <img src="imagens/Botao-carrinho.png" alt="">

                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                </div>
            </div>
            <div class="btns">
                <a class="btn1" href="">
                    <p>COMPRAR AGORA</p>
                </a>
                <a class="btn2" href="">
                    <p>ADICIONAR AO CARRINHO</p>
                </a>
            </div>
        </div>

    </div>



    <div class="titulo-avaliacao">
        <h1>AVALIAÇÕES <img src="./imagens/star-avaliacao.png" alt=""></h1>
    </div>
    <div class="avaliacoes-container">
        <div class="avaliacao">
            <div class="avaliacao-cima">

                <img src="./imagens/foto-avalia1.png" alt="">
                <div class="nome-avaliacao">
                    <h4>Lukas Alfenas</h4>
                    <div class="nota-estrela">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                    </div>
                </div>

            </div>

            <div class="texto-avaliacao">
                <p>Comprei o produto para minha namorada e ela me disse que o produto é de ótima qualidade, compraria
                    novamente, sem medo!</p>
            </div>
        </div>
        <div class="avaliacao">
            <div class="avaliacao-cima">

                <img src="./imagens/foto-avalia2.png" alt="">
                <div class="nome-avaliacao">
                    <h4>Sophia Caldas</h4>
                    <div class="nota-estrela">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                    </div>
                </div>

            </div>

            <div class="texto-avaliacao">
                <p>Minha quarta aqui e como sempre uma entrega excepicional! Com atenção a todos os detalhes. Indico a
                    todas as minha amigas!</p>
            </div>
        </div>
        <div class="avaliacao">
            <div class="avaliacao-cima">

                <img src="./imagens/foto-avalia3.png" alt="">
                <div class="nome-avaliacao">
                    <h4>Kayque Marinho</h4>
                    <div class="nota-estrela">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                        <img src="./imagens/estrela-nota.png" alt="">
                    </div>
                </div>

            </div>

            <div class="texto-avaliacao">
                <p>Adorei o produto, ótimo custo benefício, o prazo de entrega se estendeu mais do que o esperado.
                    Porém, continuarei comprando aqui</p>
            </div>
        </div>
    </div>

    <div class="titulo-recomendacao">
        <h1>RECOMENDAÇÕES</h1>
    </div>
    <div class="overflow-recomendacao">
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/funko1.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Funko Pop Sakura</h4>
                <p>Naruto</p>
                <h3>R$ 149,90</h3>
                <h2>R$ 93,50</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/decoracao1.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Luminária 9¾</h4>
                <p>Harry Potter</p>
                <h3>R$ 82,57</h3>
                <h2>R$ 54,30</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/cartas11.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Baralho Pokémon</h4>
                <p>Pokémon</p>
                <h3>R$ 72,10</h3>
                <h2>R$ 61,80</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/utensilio4.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Caneca One Piece</h4>
                <p>Utensílios</p>
                <h3>R$ 86,70</h3>
                <h2>R$ 67,30</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/cosplay9.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Fantasia AOT</h4>
                <p>Cosplay</p>
                <h3>R$ 149,90</h3>
                <h2>R$ 93,50</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/cartas8.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Cartas Naruto</h4>
                <p>Naruto</p>
                <h3>R$ 54,90</h3>
                <h2>R$ 32,99</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/funko2.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Funko Pop Batman</h4>
                <p>Heróis</p>
                <h3>R$ 179,90</h3>
                <h2>R$ 109,99</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/utensilio6.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Necessair Marvel</h4>
                <p>Marvel</p>
                <h3>R$ 129,90</h3>
                <h2>R$ 83,50</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
        <div class="cards-promo">
            <div class="img-promo">
                <img src="./img/funko14.png" alt="">
            </div>
            <div class="escrita-promo">
                <h4>Funko Pop Gojo</h4>
                <p>Funko Pop</p>
                <h3>R$ 219,90</h3>
                <h2>R$ 169,99</h2>
            </div>
            <a class="btn-promo" href="">
                <p>SAIBA MAIS</p>
            </a>
        </div>
    </div>



    <?php include "./view/footer.php" ?>
</body>

</html>