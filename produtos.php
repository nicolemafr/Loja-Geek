<?php include "./data/conexao.php";
$sql = "Select * from produtos";

$sql2 = "select subcategorias.nome
from produtos
inner join subcategorias
on subcategorias.id_subcategoria = produtos.id_subcategoria";
$resultado2 = $conn->query($sql2);

$resultado = $conn->query($sql);
?>

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

    <div class="produtos">
        <?php for ($i = 0; $i < $resultado->num_rows; $i++) {
            $produto = $resultado->fetch_assoc();
            $subcategoria = $resultado2->fetch_assoc();
            ?>

            <div class="produto">

                <a href="produto.php?id=<?= $produto['id_produto'] ?>"><img src="imagens/produto1.png" alt="">
                    <h3><?= htmlspecialchars($produto['nome']) ?></h3>
                    <p><?= htmlspecialchars($subcategoria['nome']) ?></p>

                    <h2>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></h2>

                    <div class="info">

                        <?php if ($produto['quantidade_estoque'] > 0) { ?>
                            <p><span></span> Em estoque</p>
                        <?php } else { ?>
                            <p>Sem estoque</p>
                        <?php } ?>
                </a>
                <button class="BtnCarrinho" data-id="<?= $produto['id_produto'] ?>">
                    <img src="imagens/Carrinho 2.png" alt="Carrinho">
                </button>

            </div>
        </div>
    <?php } ?>

    </div>

    <div class="numeracao">
        <p class="selected">1</p>
        <p>2</p>
        <p>3</p>
        <p>4</p>
        <p>5</p>
        <p>...</p>
    </div>

    <?php include "./view/footer.php" ?>
    <script src="./assets/carrinho.js"></script>
</body>

</html>