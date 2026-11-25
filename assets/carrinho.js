const BotoesCarrinho = document.querySelectorAll(".BtnCarrinho");

BotoesCarrinho.forEach((botao) => {

    botao.addEventListener("click", () => {

        const idProduto = botao.dataset.id;

        fetch("carrinho.php?id=" + idProduto);

        alert("Produto adicionado ao carrinho! ");

    });

});