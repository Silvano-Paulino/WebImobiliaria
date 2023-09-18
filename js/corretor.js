

/*========== SubMenus Pessoa =======*/

$(document).ready(function(){




    /*========= Código para a entrada e saída do menu /*=========*/

    $('#idImovelOpC').click(function(){
        
        if($('#idSubMenuImovel').hasClass('displayListaDash')){

            $('#idSubMenuImovel').removeClass('displayListaDash');
            $('#idSubMenuImovel').removeClass('activaSubMenuDash');
            $('#idSubMenuImovel').removeClass('transitionDisplayDash');

        }else {
            $('#idSubMenuImovel').addClass('displayListaDash');
        }


    });





    /*====================================================== Chamando os paineis para alteração=========================== ===========================*/

    //Clicando sobre o link cadastro de imóveis
        $('.puxaPCadastroImovelC').click(function (){
            if($('#idPainelCadastroImovel').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelCadastroImovel').addClass('ligaPainel');
            }
        });


        //Clicando sobre o link painel de imóvel

        $('.puxaPVerImovel').click(function (){
            if($('#idPainelTodosImoveisC').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelTodosImoveisC').addClass('ligaPainel');
            }
        });




        //Clicando sobre o link para cadastro de imóvel 

        $('.puxaPCadastroCliente').click(function (){
            if($('#idPainelCadastroCliente').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelCadastroCliente').addClass('ligaPainel');
            }
        });



        //Clicando sobre o link Listar Cliente

        $('.puxaPVerCliente').click(function (){
            if($('#idPainelVerCliente').hasClass('ligaPainel')){

            } else {
                $('.painelUser').removeClass('ligaPainel');
                $('#idPainelVerCliente').addClass('ligaPainel');
            }
        });

        


        

});
