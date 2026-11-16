const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");

btn1.addEventListener("click", () => {

    btn1.classList.add("ativo");
    btn2.classList.remove("ativo");

});


btn2.addEventListener("click", () => {

    btn2.classList.add("ativo");
    btn1.classList.remove("ativo");

});
