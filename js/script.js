/*Tratando o links do menu */




/*Declaração das variáveis Para SubMenus*/
var listaVenda = document.getElementById("subLista");
var listaCompra = document.getElementById("subListaCompra");
var subMenuVenda = document.getElementById("subMenuVenda");
var subMenuCompra = document.getElementById("subMenuCompra");

/*SubMenu da Venda*/

listaVenda.addEventListener('click', function(){
    if(subMenuVenda.classList.contains('menuActivo')){        
        subMenuVenda.classList.remove('menuActivo');
    }else {
        if(subMenuCompra.classList.contains('menuActivo')){
            subMenuCompra.classList.remove('menuActivo');
        }
        subMenuVenda.classList.add('menuActivo');
    }
});


/*SubMenu da Compra*/
listaCompra.addEventListener('click', function(){
    if(subMenuCompra.classList.contains('menuActivo')){
        subMenuCompra.classList.remove('menuActivo');
    }else {
        if(subMenuVenda.classList.contains('menuActivo')){
            subMenuVenda.classList.remove('menuActivo');
        }
        subMenuCompra.classList.add('menuActivo');
    }
});













const linkHome = document.querySelectorAll(".linkImovelDVI");
const painelHome= document.querySelectorAll('.contentorCardImovelDV');



linkHome.forEach((tab, index) =>{
    tab.addEventListener("click", () =>{
  
  
      // To remove active class form previous tab
      linkHome.forEach(tab => tab.classList.remove("activeImvelD"));//Mesma classe com de baixo, a primeira
  
  
  
      tab.classList.add("activeImvelD");//Mesma classe com de cima
  
      // To show content according to tab selected
  
  
      // To hide previous tab content
      painelHome.forEach((c) => c.classList.remove("acitveCardImovelD"));

      painelHome[index].classList.add("acitveCardImovelD");
  
      
    });

  });

  linkHome[0].click();




const linkHomeAl = document.querySelectorAll(".linkImovelDAl");
const painelHomeAl = document.querySelectorAll('.contentorCardImovelDAl');



linkHomeAl.forEach((tab, index) =>{
    tab.addEventListener("click", () =>{
  
  
      // To remove active class form previous tab
      linkHomeAl.forEach(tab => tab.classList.remove("activeImvelD"));//Mesma classe com de baixo, a primeira
  
  
  
      tab.classList.add("activeImvelD");//Mesma classe com de cima
  
      // To show content according to tab selected
  
  
      // To hide previous tab content
      painelHomeAl.forEach((c) => c.classList.remove("acitveCardImovelD"));

      painelHomeAl[index].classList.add("acitveCardImovelD");
  
      
    });

  });

  linkHomeAl[0].click();

