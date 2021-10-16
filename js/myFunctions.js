

    let menuClick = document.getElementById("menuClick");
    let menuNav = document.getElementById("menuNav");

    if(window.matchMedia("(max-width: 780px)").matches){
    menuClick.addEventListener('click', (e)=>{
        menuNav.style.display = "block";
    })
    if(menuNav.style.display === "block"){
        menuClick.classList.add("aberto");
    }else{
        menuNav.style.display = "none";
      }
    };
    
    
    const tabDescricao = document.getElementById('tab-descricao');
    const tabAvaliacao = document.getElementById('tab-avaliacao');
    const conteudoDescricao = document.getElementById('conteudo-descricao');
    const conteudoAvaliacao = document.getElementById('conteudo-avaliacao');

    document.addEventListener("DOMContentLoaded", function(event) {
        conteudoDescricao.style.display = "block";
        tabDescricao.classList.add("active");
        conteudoAvaliacao.style.display = "none";
    });
    tabAvaliacao.addEventListener('click', (e)=>{
        conteudoDescricao.style.display = "none";
        conteudoAvaliacao.style.display = "block";
        tabAvaliacao.classList.add("active");
        tabDescricao.classList.remove("active");
    })
    tabDescricao.addEventListener('click', (e)=>{
        conteudoDescricao.style.display = "block";
        conteudoAvaliacao.style.display = "none";
        tabAvaliacao.classList.remove("active");
        tabDescricao.classList.add("active");
    });