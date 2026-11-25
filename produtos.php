<?php
require "./data/conexao.php";
$sql = "SELECT produtos.*, categorias.nome AS categoria FROM produtos INNER JOIN categorias ON produtos.id_categoria = categorias.id_categoria";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-adim/header-adim.css">
    <link rel="stylesheet" href="css-adim/produtos.css">
    <title>Produtos</title>
</head>

<body>
    <?php include "./view-adim/header.php" ?>

    <div class="body">
        <div class="nav">
            <nav>
                <a href="painel.php">Painel</a>
                <a href="usuários.php">Usuários</a>
                <a href="categorias.php">Categorias</a>
                <a href="pedidos.php">Pedidos</a>
                <a class="selected" href="produtos.php">Produtos</a>

                <button type="button">Sair</button>
            </nav>
        </div>

        <main>
            <h1>GERENCIAR PRODUTOS</h1>

            <section>
                <div class="itens">
                    <div class="filtro">
                        <input type="text" name="" id="" placeholder="">

                        <select id="filtro" name="flitro">
                            <option value="none">Todos</option>
                            <option value="utensilios">Utensílios</option>
                            <option value="decoraçao">Decoração</option>
                            <option value="funko pop">Funko Pop</option>
                            <option value="acessorios">Acessórios</option>
                            <option value="vestuario">Vestuário</option>
                            <option value="cartas">Cartas</option>
                            <option value="comics">Comics</option>
                            <option value="comics">Mangás</option>
                        </select>
                    </div>

                    <?php for ($i = 0; $i < $resultado->num_rows; $i++) {
                        $produto = $resultado->fetch_assoc(); ?>
                        <div class="item">
                            <img src="<?= htmlspecialchars($produto['imagem']) ?>" alt="">

                            <div class="desc">
                                <span><?= htmlspecialchars($produto['nome']) ?></span>
                                <p><?= htmlspecialchars($produto['categoria']) ?></p>
                            </div>

                            <p class="valor">R$<?= htmlspecialchars($produto['preco']) ?></p>

                            <div class="acoes">
                                <div class="acoes">
                                    <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="adicionar">

                    <div class="top">
                        <h2>+ ADICIONAR PRODUTO</h2>
                    </div>

                    <form class="form-produto" method="POST" enctype="multipart/form-data">
                        <div class="pt1">
                            <div class="arrasta">
                                <label for="imagem">IMAGEM DO PRODUTO</label>
                                <input type="file" name="imagem" id="imagem" accept="image/*">
                            </div>

                            <div class="inputs">
                                <label for="nome">NOME DO PRODUTO</label>
                                <input type="text" name="nome" id="nome" required>

                                <label for="categoria">CATEGORIA</label>
                                <select id="categoria" name="categoria" required>
                                    <option value="">Selecione</option>
                                    <option value="utensilios">Utensílios</option>
                                    <option value="decoracao">Decoração</option>
                                    <option value="funko pop">Funko Pop</option>
                                    <option value="acessorios">Acessórios</option>
                                    <option value="vestuario">Vestuário</option>
                                    <option value="cartas">Cartas</option>
                                    <option value="comics">Comics</option>
                                    <option value="mangas">Mangás</option>
                                </select>

                                <label for="preco">PREÇO (R$)</label>
                                <input type="number" name="preco" id="preco" min="0" step="0.01" required>

                            </div>

                        </div>

                        <div class="pt2">
                            <label for="descricao">DESCRIÇÃO</label>
                            <textarea name="descricao" id="descricao" rows="4"></textarea>

                            <label for="estoque">ESTOQUE</label>
                            <input type="number" name="estoque" id="estoque" min="0" required>

                        </div>

                        <div class="botao">
                            <button type="submit" class="cancela"> <img src="imagens-adim/Coval.png" alt=""> CANCELAR</button>
                            <button type="submit">ADICIONAR PRODUTO</button>
                        </div>
                    </form>

                </div>
            </section>
        </main>
    </div>
</body>

</html>