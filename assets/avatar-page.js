const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");

const secao1 = document.getElementById("avatar1");
const secao2 = document.getElementById("avatar2");


secao1.style.display = "grid";


btn1.addEventListener("click", () => {

    secao1.style.display = "grid";
    secao2.style.display = "none";

    btn1.classList.add("ativo");
    btn2.classList.remove("ativo");

});


btn2.addEventListener("click", () => {

    secao2.style.display = "grid";
    secao1.style.display = "none";

    btn2.classList.add("ativo");
    btn1.classList.remove("ativo");

});