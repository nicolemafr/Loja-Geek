<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/editar-Perfil.css">

    <title>Document</title>
</head>

<body>
    <?php include("./view/header.php") ?>

    <div class="editar-container">

        <div class="formulario-editar">
            <div class="foto-form">
                <img src="./imagens/Fundo-Perfil1.png" alt="">
                <img class="avatarzinho" src="./imagens/avatar11.png" alt="">
                <a class="lixeira" href=""><img src="./imagens/Lixeira-perfil.png" alt=""></a>
            </div>

            <form method="POST">
                <label for="">MUDAR NOME</label>
                <input placeholder="Altere aqui o seu nome" type="text" name="nome" id="nome" required>
                <label for="">MUDAR EMAIL</label>
                <input placeholder="Altere aqui o seu email" type="email" name="email" id="email" required>
                <label for="">MUDAR SENHA</label>
                <input placeholder="Altere aqui sua senha" type="password" name="senha" id="senha" required>
            </form>

            <div class="btn-editar"></div><a class="btn-alterar" href="">
                <p>ALTERAR</p>
            </a>

        </div>


        <div class="avatar-editar">

            <div id="avatar1" class="fotos-perfil">
                <img class="avatar" src="./imagens/avatar1.png" alt="">
                <img class="avatar" src="./imagens/avatar2.png" alt="">
                <img class="avatar" src="./imagens/avatar3.png" alt="">
                <img class="avatar" src="./imagens/avatar4.png" alt="">
                <img class="avatar" src="./imagens/avatar5.png" alt="">
                <img class="avatar" src="./imagens/avatar6.png" alt="">
                <img class="avatar" src="./imagens/avatar7.png" alt="">
                <img class="avatar" src="./imagens/avatar8.png" alt="">
                <img class="avatar" src="./imagens/avatar9.png" alt="">
                <img class="avatar" src="./imagens/avatar10.png" alt="">
                <img class="avatar" src="./imagens/avatar11.png" alt="">
                <img class="avatar" src="./imagens/avatar12.png" alt="">
                <img class="avatar" src="./imagens/avatar13.png" alt="">
                <img class="avatar" src="./imagens/avatar14.png" alt="">
                <img class="avatar" src="./imagens/avatar15.png" alt="">
                <img class="avatar" src="./imagens/avatar16.png" alt="">
            </div>
            <div id="avatar2" class="fotos-perfil">
                <img class="avatar" src="./imagens/avatar17.png" alt="">
                <img class="avatar" src="./imagens/avatar18.png" alt="">
                <img class="avatar" src="./imagens/avatar19.png" alt="">
                <img class="avatar" src="./imagens/avatar20.png" alt="">
                <img class="avatar" src="./imagens/avatar21.png" alt="">
                <img class="avatar" src="./imagens/avatar22.png" alt="">
                <img class="avatar" src="./imagens/avatar23.png" alt="">
                <img class="avatar" src="./imagens/avatar24.png" alt="">
                <img class="avatar" src="./imagens/avatar25.png" alt="">
                <img class="avatar" src="./imagens/avatar26.png" alt="">
                <img class="avatar" src="./imagens/avatar27.png" alt="">
                <img class="avatar" src="./imagens/avatar15.png" alt="">
                <img class="avatar" src="./imagens/avatar11.png" alt="">
                <img class="avatar" src="./imagens/avatar8.png" alt="">
                <img class="avatar" src="./imagens/avatar4.png" alt="">
                <img class="avatar" src="./imagens/avatar25.png" alt="">
            </div>

            <div class="btn-session">
                <button type="button" class="btn-alterar ativo" id="btn1">1</button>
                <button type="button" class="btn-alterar" id="btn2">2</button>
            </div>

            <div class="btn-editar"></div><a class="btn-alterar" href="">
                <p>ALTERAR</p>
            </a>


        </div>


    </div>

    <?php include("./view/footer.php") ?>


</body>

<script  src="./assets/avatar-page.js"></script>

</html>