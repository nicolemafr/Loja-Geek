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
                <img src="./imagens/perfil-user.png" alt="">
                <img class="lixeira" src="./imagens/Lixeira-perfil.png" alt="">
            </div>

             <form method="POST">
                <label for="">MUDAR NOME</label>
                <input placeholder="Altere aqui o seu nome" type="text" name="nome" id="nome" required>
                <label for="">MUDAR EMAIL</label>
                <input placeholder="Altere aqui o seu email" type="email" name="email" id="email" required>
                <label for="">MUDAR SENHA</label>
                <input placeholder="Altere aqui sua senha" type="password" name="senha" id="senha" required>
            </form>

            <a class="btn-alterar" href="">ALTERAR</a>
            
        </div>


        <div class="avatar-editar">

            <div class="fotos-perfil">
                <img src="./imagens/avatar1.png" alt="">
                <img src="./imagens/avatar2.png" alt="">
                <img src="./imagens/avatar3.png" alt="">
                <img src="./imagens/avatar4.png" alt="">
                <img src="./imagens/avatar5.png" alt="">
                <img src="./imagens/avatar6.png" alt="">
                <img src="./imagens/avatar7.png" alt="">
                <img src="./imagens/avatar8.png" alt="">
                <img src="./imagens/avatar9.png" alt="">
                <img src="./imagens/avatar10.png" alt="">
                <img src="./imagens/avatar11.png" alt="">
                <img src="./imagens/avatar12.png" alt="">
                <img src="./imagens/avatar13.png" alt="">
                <img src="./imagens/avatar14.png" alt="">
                <img src="./imagens/avatar15.png" alt="">
                <img src="./imagens/avatar16.png" alt="">
            </div>

        </div>


    </div>

    <?php include("./view/footer.php") ?>


</body>

</html>