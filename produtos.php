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
                        <input type="text" name="" id="">

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

                    <div class="item">
                        <img src="imagens-adim/Manga15-2.png" alt="">

                        <div class="desc">
                            <span>Mangá de Demon Slayer</span>
                            <p>Mangás</p>
                        </div>

                        <p class="valor">R$62,99</p>

                        <div class="acoes">
                            <div class="acoes">
                                <img src="imagens-adim/Caneta-Editar.png" alt="Editar">
                                <img src="imagens-adim/Lixeira-perfil.png" alt="Excluir">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="adicionar">
                    <div class="top">
                        <h2>+ ADICIONAR PRODUTO</h2>
                    </div>

                    <div class="pt1">
                        <div class="arrasta">

                        </div>

                        <div class="inputs">
                            <form method="">
                                <label for="">NOME DO PRODUTO</label>
                                <input type="text" name="" id="">

                                <label for="">CATEGORIA</label>
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

                                <label for="">PREÇO (R$)</label>
                                <input type="text" name="" id="">
                            </form>
                        </div>
                    </div>

                    <div class="pt2">
                        <form method="">
                            <label for="">DESCRIÇÃO</label>
                            <input type="text" name="" id="">
                            
                            <label for="">ESTOQUE</label>
                            <input type="text" name="" id="" required>
                        </form>
                    </div>

                    <div class="botao">
                        <form action="">
                            <button type="submit"></button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>