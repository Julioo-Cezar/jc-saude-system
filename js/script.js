/* ====JC Saúde System JavaScript Principal=== */
// Seleciona a barra de navegação
const navbar=document.querySelector(".navbar");
const header=document.querySelector(".header");

// Escuta a rolagem da página
window.addEventListener("scroll",function(){
    if(window.scrollY>50){
        navbar.classList.add("rolando");
        navbar.classList.add("subir");
        header.classList.add("esconder");
    }else{
        navbar.classList.remove("rolando");
        navbar.classList.remove("subir");
        header.classList.remove("esconder");
    }
});

// Testes
console.log("JavaScript funcionando!");

// Ano automático do rodapé
const ano= document.getElementById("ano");
ano.textContent= new Date().getFullYear();