/* ====JC Saúde System JavaScript Principal=== */
// Seleciona a barra de navegação
const navbar=document.querySelector(".navbar");
const header=document.querySelector("header");

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

// Contador animado
const contadores= 
document.querySelectorAll(".contador");
const iniciarcontador=()=>{
    contadores.forEach((contador)=>{
        const alvo=
        Number(contador.dataset.target);
        let numero= 0;
        const atualizar=()=> {
            const incremento= Math.ceil(alvo/300);
            numero+= incremento;
            if(numero<alvo) {
                contador.textContent=
                numero.toLocaleString("pt-BR");

                requestAnimationFrame(atualizar);
            } else {
                contador.textContent=
                alvo.toLocaleString("pt-BR");
               }
            };
            atualizar();
          });
        };
        const secaoSobre = document.querySelector("#sobre");
        const observer= new IntersectionObserver((entries)=> {
           if (entries[0].isIntersecting) {
             iniciarcontador();
             observer.disconnect();
          }
        }, {
            threshold:0.5
        });
        if (secaoSobre) {    
       observer.observe(secaoSobre);
        }