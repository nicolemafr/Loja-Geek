const btnDiminuir = document.getElementById("btnDiminuir");
const quantidade = document.getElementById("quantidade");
const btnAumentar = document.getElementById("btnAumentar");

const estoque = Number(quantidade.dataset.estoque);
let valor = Number(quantidade.textContent);

btnAumentar.addEventListener("click", () =>{
   
    if(valor < estoque){
        valor ++
        quantidade.textContent = valor;
    }

})

btnDiminuir.addEventListener("click", () =>{


    if(valor > 1){
        valor--;

        quantidade.textContent = valor;
    }
})
