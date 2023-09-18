

const linkModalIm = document.querySelectorAll(".linkNavIm");
const painelModalIm = document.querySelectorAll('.caixaFormIm');


linkModalIm.forEach((tab, index) =>{
    tab.addEventListener("click", () =>{
  
  
      // To remove active class form previous tab
      linkModalIm.forEach(tab => tab.classList.remove("actL"));//Mesma classe com de baixo, a primeira
  
  
  
      tab.classList.add("actL");//Mesma classe com de cima
  
      // To show content according to tab selected
  
  
      // To hide previous tab content
      painelModalIm.forEach((c) => c.classList.remove("actC"));

      painelModalIm[index].classList.add("actC");
  
      
    });

  });

  linkModalIm[0].click();


    /*========= Chamando as divs de alateração de conteúdo do funcionário =============*/

    /*========>*/

    var btnModalFun = document.querySelectorAll(".btnModalFunClass");
    var painelModalFun = document.querySelector("#ct-AlterarFun");

    btnModalFun.forEach((tab, index) =>{
      tab.addEventListener('click', () =>{
        if(painelModalFun.classList.contains('leva-para-dentro')){

        }else {
            painelModalFun.classList.add('leva-para-dentro');
        }
      });
    });




    /*========= Chamando as divs de alateração de conteúdo do funcionário =============*/

    /*========>*/

   /* var btnModalUser = document.querySelectorAll(".btnMaodalUserClassAlt");
    var painelModalUser = document.querySelector("#id-ct-Alterar-User");

    btnModalUser.forEach((tab, index) =>{
      tab.addEventListener('click', () =>{
        if(painelModalUser.classList.contains('leva-para-dentro')){

        }else {
            painelModalUser.classList.add('leva-para-dentro');
        }
      });
    });*/





  
  /* ===================== Exebir Dados do tipo de Negócio  ==================*/

  /* === Botões dos disparos */
  var dadosVenda = document.querySelector('#checkboxVenda');
  var dadosAluguel = document.querySelector('#checkboxIdAluguel');

  /* === Div do dados */
  var contentorVenda = document.querySelector('.divDadosNego-dadosVenda');
  var contentorAluguel  = document.querySelector('.divDadosNego-dadosAluguel');
  var nomeNegocio  = document.querySelector('#nomeNegocio');

  /* ==== Apresenta primeiro esse após a tela carregar == */
  contentorVenda.classList.add('apresentaDados');

  dadosVenda.addEventListener('click', function(){
   if(contentorVenda.classList.contains('apresentaDados')){        
        
    }else {
        contentorVenda.classList.add('apresentaDados');
        contentorAluguel.classList.remove('apresentaDados');
        nomeNegocio.innerHTML = "Dados da Venda";
    }
});

dadosAluguel.addEventListener('click', function(){
    if(contentorAluguel.classList.contains('displayListaDash')){        
         
     }else {
         contentorVenda.classList.remove('apresentaDados');
         contentorAluguel.classList.add('apresentaDados');
         nomeNegocio.innerHTML = "Dados do Aluguel";
     }
 });







/* ================================== Desaparecer e aparecer paineis  ================================== */


/* Temos 7 paineis até agora ==> A cada painel o DOM vai pegar eles adicionar a sua classe de presentação
=========> Após todos eles passarem por uma verificação
*/


/*  ==================== Sempre que carregarem a página deve apresentar o painel no nivel 0 ================== */
/* =========> */



/*  =================== Fim ============================================ */
var naoEstaAtivo = document.querySelectorAll('.subMenuDash');
/*========== SubMenus Pessoa =======*/

var btLink = document.querySelector('#idPessoa');
var subMenuPessoa = document.querySelector('#idSubMenuPessoa');

btLink.addEventListener('click', function(){
    
   if(subMenuPessoa.classList.contains('displayListaDash')){        
        subMenuPessoa.classList.remove('displayListaDash');
        subMenuPessoa.classList.remove('activaSubMenuDash');
        subMenuPessoa.classList.remove('transitionDisplayDash');
    }else {
        subMenuPessoa.classList.add('displayListaDash');       
    }
});


/*========== SubMenus Categoria =======*/


var btLinkCategoria = document.querySelector('#idCategoria');
var subMenuCategoria = document.querySelector('#idSubMenuCategoria');

btLinkCategoria.addEventListener('click', function(){
   if(subMenuCategoria.classList.contains('displayListaDash')){        
        subMenuCategoria.classList.remove('displayListaDash');
        subMenuCategoria.classList.remove('activaSubMenuDash');
        subMenuCategoria.classList.remove('transitionDisplayDash');
    }else {

        subMenuCategoria.classList.add('displayListaDash');
    }
});



/*========== SubMenus Imoveis =======*/


var btOpImoveis = document.querySelector('#idOpImoveis');
var subOpImoveis = document.querySelector('#subMenuOpImoveisDash');

btOpImoveis.addEventListener('click', function(){
   if(subOpImoveis.classList.contains('displayListaDash')){        
        
        subOpImoveis.classList.remove('displayListaDash');
        subOpImoveis.classList.remove('activaSubMenuDash');
        subOpImoveis.classList.remove('transitionDisplayDash');

    }else {
        naoEstaAtivo.forEach(subMenu => subMenu.classList.remove("displayListaDash"));
        subOpImoveis.classList.add('displayListaDash');
    }
});





/*================= Chamaa só uma Modal =================*/


const showModalN = (openButton, modalContent) =>{
    const openBtn = document.getElementById(openButton),
    modalContainer = document.getElementById(modalContent)

    if(openBtn && modalContainer){
        openBtn.addEventListener('click', () =>{
            modalContainer.classList.add('meMostraModal')
        })
    }
}

showModalN('btChamaModalTodos','idFundoModal');


/*================= Chamaa só uma Modal para Aterar =================*/

const showModalAlte = (openButton, modalContent) =>{
    const openBtn = document.getElementsByClassName(openButton),
    modalContainer = document.getElementById(modalContent)

    if(openBtn && modalContainer){
        for(var i = 0; i < openBtn.length; i++){
            openBtn[i].addEventListener('click', () =>{
                modalContainer.classList.add('meMostraModal')
            })
        }
    }
}

showModalAlte('altlink','idFundoModal');


const showModalAltImg = (openButton, modalContent) =>{
    const openBtn = document.getElementsByClassName(openButton),
    modalContainer = document.getElementById(modalContent)

    if(openBtn && modalContainer){
        for(var i = 0; i < openBtn.length; i++){
            openBtn[i].addEventListener('click', () =>{
                modalContainer.classList.add('meMostraModal')
            })
        }
    }
}

showModalAltImg('altlinkImg','idUploadModalImgImovel');



/*=================== Para chamar a modal para de Adicionar novo funcionário =================== */
// Atenção Cad => Cadastro
// Atenlção Fun => Funcionario
// Total de showModalCadFun => Show Modal de Cadastro de Funcionáiro


const showModalCadFun = (openButton, modalContent) =>{
    const openBtn = document.getElementsByClassName(openButton),
    modalContainer = document.getElementById(modalContent)

    if(openBtn && modalContainer){
        for(var i = 0; i < openBtn.length; i++){
            openBtn[i].addEventListener('click', () =>{
                modalContainer.classList.add('meMostraModal');
            });
        }
    }
}

showModalCadFun('btChamaModalCadFun','idModalCadFunc');



/*================= Fechar Modal ====================*/

const btFecharModal = document.getElementById('fechaLogo');

function fechaJaModal(){
    const modalContainer = document.querySelector('#idFundoModal');
    modalContainer.classList.remove('meMostraModal');
}

btFecharModal.addEventListener('click', fechaJaModal);



var loaderFile = function(event){
    var reader = new FileReader();
    console.log(reader);
    
}


/*==== Fechar modal de imagem* */

const btFecharModalImg = document.getElementById('fechaLogoImg');

function fechaJaModalImg(){
    const modalContainer = document.querySelector('#idUploadModalImgImovel');
    modalContainer.classList.remove('meMostraModal');
}

btFecharModalImg.addEventListener('click', fechaJaModalImg);

/*
var loaderFile = function(event){
    var reader = new FileReader();
    console.log(reader);
    
}*/

/*======================================================================= 

                        Escondendo Tudo do painel

=======================================================================*/
var PListagemImoveis = document.querySelector('#painelListagemImoveis');
var PInicioDash = document.querySelector('#painelInicio');


PListagemImoveis.classList.add('escondePainel');
PInicioDash.classList.add('escondePainel');



/*=======================================================================
=                                                                       =
=                                                                       =
=              Motor de link do Dashboard do menu principal             =
=                                                                       =
=                                                                       =
======================================================================= */














 /* =========== Preview de Imagem antes do Upload =========== */


 

 
















































 /*=======================================================================
=                                                                       =
=                                                                       =
=              Motor de link do Dashboard do menu principal             =
=                                                                       =
=                                                                       =
======================================================================= */






