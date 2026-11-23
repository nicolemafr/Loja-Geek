<?php

session_start();

if(isset($_SESSION["usuario_id"])){
    header("Location: /home.php");
} else {
    header("Location: /login.php");
}

<<<<<<< HEAD
    <div class="hero-container">

        <div class="lado-esquerdoHero">
            <h1 class="h1-hero-1"><span class="span1">MUNDO PEQUENO </span>DEMAIS</h1>
            <h1 class="h1-hero-2">PARA <span class="span2">TANTOS UNIVERSOS</span></h1>
            <p>Dos mundos que você já conhece aos que ainda vai descobrir, seu próximo achado está aqui.</p>
            <a class="btn-hero" href="/produtos.php">
                <h4>EXPLORAR PRODUTOS</h4><img src="./imagens/setinha.png" alt="">
            </a>
        </div>

        <div class="lado-direitoHero">
            <img src="./imagens/gojo-hero2.png" alt="">
        </div>
    </div>

    <div class="cards-container">
        <div class="card-titulo">
            <h1>CATEGORIAS</h1>
        </div>
        <div class="cards">
            <div class="card">
                <div class="img-card">
                    <img class="img1" src="./imagens/Manga9-2.png" alt="">
                    <img class="img2" src="./imagens/Manga15-2.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>MANGÁS</h3>
                    </div>
                    <a href="/"><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img class="img3" src="./imagens/vestuario1.png" alt="">
                    <img class="img4" src="./imagens/vestuario2.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>VESTUÁRIO</h3>
                    </div>
                    <a href=""><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img class="img6" src="./imagens/decoracao1-2.png" alt="">
                    <img class="img5" src="./imagens/decoracao2-2.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>DECORAÇÃO</h3>
                    </div>
                    <a href=""><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img class="img7" src="./imagens/funko5-2.png" alt="">
                    <img class="img8" src="./imagens/funko7-2.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>FUNKO POP</h3>
                    </div>
                    <a href=""><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img class="img10" src="./imagens/acessorio2.png" alt="">
                    <img class="img9" src="./imagens/acessorio1.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>ACESSÓRIOS</h3>
                    </div>
                    <a href=""><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img class="img12" src="./imagens/carta2.png" alt="">
                    <img class="img11" src="./imagens/carta1.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>CARTAS</h3>
                    </div>
                    <a href=""><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img class="img14" src="./imagens/comic2.png" alt="">
                    <img class="img13" src="./imagens/comic1.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>COMICS</h3>
                    </div>
                    <a href=""><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img class="img16" src="./imagens/utensilio2.png" alt="">
                    <img class="img15" src="./imagens/utensilio1.png" alt="">

                </div>
                <div class="info-card">
                    <div class="escrita-card">
                        <p>15 PRODUTOS</p>
                        <h3>UTENSÍLIOS</h3>
                    </div>
                    <a href=""><img class="btn-seta" src="./imagens/botao-seta.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="infos-home">
        <div class="info">
            <h2>11</h2>
            <h3>ANOS NO MERCADO</h3>
            <p>Conectando fãs aos seus universos favoritos.</p>
        </div>
        <div class="info">
            <h2>+120</h2>
            <h3>PRODUTOS EM ESTOQUE</h3>
            <p>Uma comunidade de apaixonados pelo universo geek.</p>
        </div>
        <div class="info">
            <h2>+10mil</h2>
            <h3>COMPRAS</h3>
            <p>Mangás, HQs, colecionáveis e muito mais</p>
        </div>
        <div class="info">
            <h2>4.8</h2>
            <h3>AVALIAÇÃO GOOGLE</h3>
            <p>A confiança de quem faz parte do nosso universo</p>
        </div>
    </div>

    <div class="carrossel-home">

        <h1><span class="span1-carrosel">CLIENTES</span> AVALIANDO <span class="span2-carrosel">NOSSO TRABALHO</span>
        </h1>

        <div class="caixas-carrossel">
            <div class="caixa">
                <img src="https://placehold.co/200x300" alt="">
            </div>
            <div class="caixa">
                <img src="https://placehold.co/200x300" alt="">
            </div>
            <div class="caixa">
                <img src="https://placehold.co/200x300" alt="">
            </div>
            <div class="caixa">
                <video src="./videos/unboxing-naruto.mp4" autoplay></video>
            </div>
            <div class="caixa">
                <img src="https://placehold.co/200x300" alt="">
            </div>
            <div class="caixa">
                <img src="https://placehold.co/200x300" alt="">
            </div>
            <div class="caixa">
                <img src="https://placehold.co/200x300" alt="">
            </div>
        </div>

        <div class="setas-carrossel">
            <img class="left-seta" id="left-seta" src="./imagens/left.png" alt="">
            <img class="right-seta" id="right-seta" src="./imagens/right.png" alt="">
        </div>

    </div>


    <div class="promo-escrita">
        <h3>PRODUTOS EM PROMOÇÃO</h3>
    </div>
    <div class="overflow-home">
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

    <script src="./assets/carrossel-home.js"></script>
</body>

</html>
=======
exit;
>>>>>>> 360c84f7f0507aaeea64bf88f482127b76a7c9b6
