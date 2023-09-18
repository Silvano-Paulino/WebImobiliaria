

/* ====== Carregando o arquivo jquery após a pagina carregar ====== */

$(document).ready(function(){

    
    // Para adicionar tipos de funcionarios
    $('#formDashTipoFun').submit(function(evt){

        evt.preventDefault();

        var postData = $(this).serialize();

        var url = $(this).attr('action');

        
        
        $.post(url, postData, function(php_table_data){
                       

            $("#formDashTipoFun")[0].reset();


        });



    });  // Código para adicionar Use na banco de dados


    
    
    
    
    // Para enviar as categorias
    $('#formDahsTipoImovel').submit(function(evt){

        evt.preventDefault();

        var postData = $(this).serialize();

        var url = $(this).attr('action');

        
        
        $.post(url, postData, function(php_table_data){
                       

            $("#formDahsTipoImovel")[0].reset();


        });



    });  // Código para adicionar Use na banco de dados


    
       
    
    
    
    
    // Buscando a tabela da categoria funcio para mostrar
  
 function updateUser(determina){ 
        

        $.ajax({
                        
            url:'mostra/mostracatefuncio.php',
            data:{determina:determina},
            type: 'POST',
            success: function(cat){
                if(!cat.error){                    
                    $("#idTbodyTipoFun").html(cat);                                        
                }
            }

        });

    }
    
    setInterval(function(){
        updateUser();
 }, 600);

    // fim buscando categoria funcionario







    // Buscando categoria imovel
    var tabelaImovel = "imovel";

    function updateUserCateimovel(determina){ 
        

        $.ajax({
                        
            url:'mostra/mostrarcateimovel.php',
            data:{determina:determina},
            type: 'POST',
            success: function(cat){
                if(!cat.error){                    
                    $("#idCondicaoIm").html(cat);
                }
            }

        });

    }
    
    setInterval(function(){
        updateUserCateimovel();
 }, 600);

// fim buscando categoria imovel




// Buscando categoria imovel

    mostrarCateimovel();


    function mostrarCateimovel(){ 
                      
        $.ajax({
                    
            url:'mostra/mostraCategoriaImovel.php',
            type: 'POST',
            success: function(cat){
                if(!cat.error){                    
                   $("#resultadoCategoriaImovel").html(cat); 

                }else {

                }
            }

        });

    }


    


// fim buscando categoria imovel




// Buscando Cliente

    mostrarCliente();


    function mostrarCliente(){ 
                      
        $.ajax({
                    
            url:'mostra/mostraCliente.php',
            type: 'POST',
            success: function(cat){
                if(!cat.error){                    
                   $("#idClienteImovelNegocio").html(cat); 
                }else {

                }
            }

        });

    }


    


// Fim buscando Cliente


















   // Buscando Lista dos funcionario

   function updateFuncionario(determina){ 
        

    $.ajax({
                    
        url:'mostra/listarfuncionarios.php',
        data:{determina:determina},
        type: 'POST',
        success: function(cat){
            if(!cat.error){                    
                $("#trazerlistadosfuncionario").html(cat);
            }
        }

    });

}

setInterval(function(){
    updateFuncionario();
}, 600);

// fim buscando da Lista dos Funcionarios







function updateFuncionario(determina){ 
        

    $.ajax({
                    
        url:'mostra/listarfuncionarios.php',
        data:{determina:determina},
        type: 'POST',
        success: function(cat){
            if(!cat.error){                    
                $("#trazerlistadosfuncionario").html(cat);
            }
        }

    });

}

setInterval(function(){
    updateFuncionario();
}, 600);


//alert("");


//Esta funcção é importante porque ela é uma das únicas que permite realizar requisições sem refresh
//Por favor não apaga atoa esta é mesmo importante ouvio não apaga esta bem.




function updateImovel(determina){ 
        

    $.ajax({
                    
        url:'mostra/listaImovel.php',
        data:{determina:determina, tabelaImovel:tabelaImovel},
        type: 'POST',
        success: function(cat){
            if(!cat.error){                    
               $("#tabelaTodosImoveisC").html(cat);
               
            }
        }

    });

}

setInterval(function(){
    updateImovel();
}, 600);






//Esta funcção é importante porque ela é uma das únicas que permite realizar requisições sem refresh
//Por favor não apaga atoa esta é mesmo importante ouvio não apaga esta bem.





// fim buscando da Lista dos Funcionarios

    



    // inicio do codigo da paginacao da lista dos imoveis gerais
    function loadTable(page){
        
        $.ajax({
            url: "listapaginada.php",
            type: "POST",
            data:{page:page},
            success: function(data){
                $("#trazerlistaimoveis").html(data);
            }
        });
     }
    
     loadTable();

      //fim pagination code







      // Lista dos imoveis vendidos
         function loadTable2(page){
        
        $.ajax({
            url: "listaimoveisvendidos.php",
            type: "POST",
            data:{page:page},
            success: function(data){
                $("#trazerlistaimoveisvendidos").html(data);
            }
        });
     }
    
     loadTable2(); 

      //fim da lista das actividades do corretor


      


      // codigo ajax que pega e escreve a lista dos imoveis alugado
      function loadTable3(page){
        
        $.ajax({
            url: "listaimoveisalugado.php",
            type: "POST",
            data:{page:page},
            success: function(data){
                $("#trazerlistaimosveisalugado").html(data);
            }
        });
     }
    
     loadTable3(); 

      //fim da lista das actividades do corretor




      // codigo ajax que pega e escreve a lista dos imoveis alugado
      function loadTable4(page){
        
        $.ajax({
            url: "listaactividadecorretor.php",
            type: "POST",
            data:{page:page},
            success: function(data){
                $("#trazeractividadecorretor").html(data);
            }
        });
     }
    
     loadTable4(); 

      //fim da lista das actividades do corretor











      /*============================  Função para salvar o imóvel ============================ */



       $('#idFormCadImovelC').submit(function(evt){

            evt.preventDefault();

            var postData = $(this).serialize();

            var url = $(this).attr('action');
            
            
            $.post(url, postData, function(php_table_data){
                           
                $('#resultImovel').html(php_table_data);

                $("#idFormCadImovelC")[0].reset();


            });



    }); 







    $('#idFormAltImovelC').submit(function(evt){

           evt.preventDefault();

            var postData = $(this).serialize();

            var url = $(this).attr('action');
            
            
            $.post(url, postData, function(php_table_data){
                           
                //$('#resultImovel').html(php_table_data);
                //alert('ola');

                //$("#idFormAltImovelC")[0].reset();

                    console.log('Requisição enviada');
            });






    });





    /*============================  Chamando as categorias do imóvel  ============================*/



  

}); 