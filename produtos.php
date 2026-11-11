<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Produto</title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="top">
        <nav>
            <p>MANGAS <img src="imagens/arrow_down.png" alt=""> </p>
            <p>VESTUÁRIO <img src="imagens/arrow_down.png" alt=""> </p>
            <p>DECORAÇÃO <img src="imagens/arrow_down.png" alt=""> </p>
            <p>FUNK POP <img src="imagens/arrow_down.png" alt=""> </p>
            <p>ACESSORIOS <img src="imagens/arrow_down.png" alt=""> </p>
            <p>CARTAS <img src="imagens/arrow_down.png" alt=""> </p>
            <p>COMISCS <img src="imagens/arrow_down.png" alt=""> </p>
            <p>UTENSILIOS <img src="imagens/arrow_down.png" alt=""> </p>
        </nav>
    </div>

    <div class="info-top">
        <div class="text">
            <h2>NAVEGUE</h2>
            <p>120 produtos encontrados</p>
        </div>

        <div class="filtro">
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

    <?php include "./view/footer.php" ?>
</body>

</html>