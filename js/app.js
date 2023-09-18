






$(document).ready(function(){

    

        $('#idPainelInicial').addClass('ligaPainel');

        // Clicando sobre o link inicial
        $('.puxaPInicial').click(function (){
            if($('#idPainelInicial').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelInicial').addClass('ligaPainel');
            }
        });

        //Clicando sobre o link tipos de funcionários
        $('.puxaPTiposFun').click(function (){
            if($('#idPainelTipoFun').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelTipoFun').addClass('ligaPainel');
            }
        });

        //Clicando sobre o link funcionários
        $('.puxaPFuncionarios').click(function (){
            if($('#idPainelFuncionario').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelFuncionario').addClass('ligaPainel');
            }
        });
        //Clicando sobre o link Utilizadores
        $('.puxaPUtilizador').click(function (){
            if($('#idPainelUtilizador').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelUtilizador').addClass('ligaPainel');
            }
        });
        //Clicando sobre o Todos Imóveis
        $('.puxaPImoveisT').click(function (){
            if($('#idPainelTodosImoveis').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelTodosImoveis').addClass('ligaPainel');
            }
        });
        //Clicando sobre o link para ver todos  imóveis Vendidos
        $('.puxaPImoveisV').click(function (){
            if($('#idPainelImVendidos').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelImVendidos').addClass('ligaPainel');
            }
        });
        //Clicando sobre o link para ver todos  imóveis Vendidos
        $('.puxaPImoveisA').click(function (){
            if($('#idPainelImAlugados').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelImAlugados').addClass('ligaPainel');
            }
        });
        //Clicando sobre o link agenda de Corretor
        $('.puxaPAgendaCorretor').click(function (){
            if($('#idPainelAgendaCorretores').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelAgendaCorretores').addClass('ligaPainel');
            }
        });
        //Clicando sobre o link Tipos de Imóveis
        $('.puxaPTiposImoveis').click(function (){
            if($('#idPainelTipoImovel').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelTipoImovel').addClass('ligaPainel');
            }
        });


         //Clicando sobre o link Tipos de Imóveis
         /*
         $('.puxaPTiposImoveis').click(function (){
            if($('#idPainelTipoImovel').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelTipoImovel').addClass('ligaPainel');
            }
        });*/

        /*============ Chamando campos para usuário ============*/
        
        
       


    /* =============== Chamar div para fora =============== */

    $('.ct-Alterar').addClass('leva-para-fora');

    $('#id-alterar-btn').click(function(){

    if($('.ct-Alterar').hasClass('leva-para-fora')){

        }else {
            $('.ct-Alterar').addClass('leva-para-fora');
            $('.ct-Alterar').removeClass('leva-para-dentro');
        }

        
    }); 

      $('#ch').click(function(){

        if($('.ct-Alterar').hasClass('leva-para-dentro')){

        }else {
            $('.ct-Alterar').removeClass('leva-para-fora');
            $('.ct-Alterar').addClass('leva-para-dentro');
        }
        
    });



      /*=============================== Retirar div de alteração de tipos de imóveis ===============================*/

      $('#id-alterar-btn-tipoImovel').click(function(){

        if($('#ct-AlterarTipoImovel').hasClass('leva-para-fora')){

        }else {
            $('#ct-AlterarTipoImovel').addClass('leva-para-fora');
            $('#ct-AlterarTipoImovel').removeClass('leva-para-dentro');
        }
        
    });


      /*=============================== Chamar div de alteração de tipos de imóveis ===============================*/

      $('.btnChamarTipoImovel').click(function(){

        if($('#ct-AlterarTipoImovel').hasClass('leva-para-dentro')){

        }else {
            $('#ct-AlterarTipoImovel').removeClass('leva-para-fora');
            $('#ct-AlterarTipoImovel').addClass('leva-para-dentro');
        }
        
    });





    /*================ Modal para cadastro de novo funcionário ==================*/

    //===== Abrir modal Funcionário


    $('#btnFun').click(function(){         

         if($('#idModalCadFunc').hasClass('meMostraModal')){

         }else {
            $('#idModalCadFunc').addClass('meMostraModal');
         }

    });


    //===== Fechar modal Funcionario

     $('#fechaModalFun').click(function(){
         if($('#idModalCadFunc').hasClass('meMostraModal')){
            $('#idModalCadFunc').removeClass('meMostraModal');
         }else {
            
         }
    });


   

      /*================ Modal para cadastro de novo Tipo de Funcionário ==================*/

    //===== Abrir modal Tipo de Funcionário

    $('#btnChamaModalTipoFun').click(function(){         

         if($('#idModalTipoFun').hasClass('meMostraModal')){

         }else {
            $('#idModalTipoFun').addClass('meMostraModal');
         }

    });


    //===== Fechar modal Funcionario

     $('#idFecharModalTipoFun').click(function(){
         if($('#idModalTipoFun').hasClass('meMostraModal')){
            $('#idModalTipoFun').removeClass('meMostraModal');
         }else {
            
         }
    });



      /*================ Modal para cadastro de novo Tipo de Funcionário ==================*/

    //===== Abrir modal Tipo de Funcionário

    $('#btnChamaModalTipoImovel').click(function(){         

         if($('#idModalTipoImovel').hasClass('meMostraModal')){

         }else {
            $('#idModalTipoImovel').addClass('meMostraModal');
         }

    });


    //===== Fechar modal Funcionario

     $('#idFecharModalTipoImovel').click(function(){
         if($('#idModalTipoImovel').hasClass('meMostraModal')){
            $('#idModalTipoImovel').removeClass('meMostraModal');
         }else {
            
         }
    });







    
/*=================== Chamar a div de Alteração ===================*/


    /*$('#id-btn-alt-user').click(function(){

        if($('#id-ct-Alterar-User').hasClass('leva-para-fora')){

            }else {
                $('#id-ct-Alterar-User').addClass('leva-para-fora');
                $('#id-ct-Alterar-User').removeClass('leva-para-dentro');
            }
                
    }); */


      $('#id-alterar-btn-fun').click(function(){

        if($('#ct-AlterarFun').hasClass('leva-para-dentro')){
                $('#ct-AlterarFun').removeClass('leva-para-dentro');
                $('#ct-AlterarFun').addClass('leva-para-fora');
        }else {
                        
        }
        
    });


      $('#id-btn-alt-user').click(function(){

        if($('#id-ct-Alterar-User').hasClass('leva-para-dentro')){
                $('#id-ct-Alterar-User').removeClass('leva-para-dentro');
                $('#id-ct-Alterar-User').addClass('leva-para-for');
        }else {
                        
        }
        
    });

      $('#id-alterar-btn-tipoFun').click(function(){

        if($('#ct-AlterarTipoFun').hasClass('leva-para-dentro')){
                $('#ct-AlterarTipoFun').removeClass('leva-para-dentro');
                $('#ct-AlterarTipoFun').addClass('leva-para-fora');
        }else {
                        
        }
        
    });



      //===== Abrir modal Utilizadores

    $('#btnChamaModalUser').click(function(){

        if($('#idModalUtilizador').hasClass('meMostraModal')){

         }else {
            $('#idModalUtilizador').addClass('meMostraModal');
         }  

    });

    //===== Fechar modal Utilizadores
    
     $('#idFechaModalUser').click(function(){
         if($('#idModalUtilizador').hasClass('meMostraModal')){
            $('#idModalUtilizador').removeClass    ('meMostraModal');
         }else {
            
         }
    });



     /*================ Chamar div de alteração =====================*/

      $('.btnChamaTipoFunAlt').click(function(){

        if($('#ct-AlterarTipoFun').hasClass('leva-para-dentro')){            
            
        }else { 
            $('#ct-AlterarTipoFun').addClass('leva-para-dentro');                        
        }
        
    });
    






        /*var btnModalUser = document.querySelectorAll(".btnMaodalUserClassAlt");
    
        var painelModalUser = document.querySelector("#id-ct-Alterar-User");

        btnModalUser.forEach((tab, index) =>{
        tab.addEventListener('click', () =>{
            if(painelModalUser.classList.contains('leva-para-dentro')){

            }else {
                painelModalUser.classList.add('leva-para-dentro');
            }

        });

    });*/

        $('.btnMaodalUserClassAlt').click(function(){
            if($('#id-ct-Alterar-User').hasClass('leva-para-dentro')){

            }else {
                $('#id-ct-Alterar-User').addClass('leva-para-dentro')
            }
        });

        
        $('#idPainelAlteraImovel').hide();

        

    

});








