const caixas = Array.from(document.querySelectorAll(".caixa"));
const container = document.querySelector(".caixas-carrossel");

const setaEsquerda = document.getElementById("left-seta");
const setaDireita = document.getElementById("right-seta");

let posicaoPrincipal = 3;

function animarCards(posicoesAntigas) {

    caixas.forEach(caixa => {

        const antes = posicoesAntigas.get(caixa);
        const depois = caixa.getBoundingClientRect();

        const deslocamentoX = antes.left - depois.left;
        const deslocamentoY = antes.top - depois.top;

        const escalaX = antes.width / depois.width;
        const escalaY = antes.height / depois.height;

        caixa.animate([
            {
                translate: `${deslocamentoX}px ${deslocamentoY}px`,
                scale: `${escalaX} ${escalaY}`
            },
            {
                translate: "0px 0px",
                scale: "1 1"
            }
        ], {
            duration: 750,
            easing: "cubic-bezier(0.22, 1, 0.36, 1)"
        });

    });

}

function moverDireita() {

    const posicoesAntigas = new Map(
        caixas.map(caixa => [caixa, caixa.getBoundingClientRect()])
    );

    let primeiraCaixa = caixas[0];

    for (let i = 0; i < caixas.length - 1; i++) {
        caixas[i] = caixas[i + 1];
    }

    caixas[caixas.length - 1] = primeiraCaixa;

    caixas.forEach(caixa => {
        container.appendChild(caixa);
    });

    animarCards(posicoesAntigas);

    atualizarAtiva();
    controlarVideos();
}

setaDireita.addEventListener("click", () => {
    moverDireita();
});

function moverEsquerda() {

    const posicoesAntigas = new Map(
        caixas.map(caixa => [caixa, caixa.getBoundingClientRect()])
    );

    let ultimaCaixa = caixas[caixas.length - 1];

    for (let i = caixas.length - 1; i > 0; i--) {
        caixas[i] = caixas[i - 1];
    }

    caixas[0] = ultimaCaixa;

    caixas.forEach(caixa => {
        container.appendChild(caixa);
    });

    animarCards(posicoesAntigas);

    atualizarAtiva();
    controlarVideos();
}

setaEsquerda.addEventListener("click", () =>{
    moverEsquerda();
});


function controlarVideos() {
    caixas.forEach(caixa => {
        const video = caixa.querySelector("video");

        if (video) {
            if (caixa.classList.contains("ativa")) {
                video.play();
            } else {
                video.pause();
                video.currentTime = 0;
            }
        }
    });
}

function atualizarAtiva() {
    caixas.forEach((caixa, indice) => {
        if (indice === posicaoPrincipal) {
            caixa.classList.add("ativa");
        } else {
            caixa.classList.remove("ativa");
        }
    })
}

atualizarAtiva();
controlarVideos();