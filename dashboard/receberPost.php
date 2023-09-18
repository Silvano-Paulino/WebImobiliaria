<?php 
	
	include_once "../conexao.php";
  include_once "config.php";

  session_start();


     // If para salvar as categorias

    if(isset($_POST["salvarCategoriaF"])){
          
          $descricao = $_POST["descricaoFuncionario"];

          if($descricao != ""){
            
            $query = "INSERT INTO categoria_funcionario VALUES(default, '$descricao', 0)";

            $query_funcionario = mysqli_query($mePuxa, $query);

            header("location: tipoFuncionario.php");

          }else {
            echo "Variável Vazia";
          }

          /*$query = "INSERT INTO categoria_funcionario VALUES(default, '$descricao', 0)";

          $query_funcionario = mysqli_query($mePuxa, $query);*/
    }   


    // If para eliminar as categorias

    if(isset($_GET["mata"])){

      $eliminar = $_GET["mata"];
      $query = "DELETE FROM categoria_funcionario WHERE id_categoria_funcionario = '$eliminar'";
      $query_funcionario = mysqli_query($mePuxa, $query);
      header("location: tipoFuncionario.php");

    }


    if(isset($_POST["verificaPOST"])){
      if(isset($_POST[""])){
        
      }
    }



    // Alterar o conteúdo do compo descrição da categoria de funcionário

    if(isset($_POST["btnAlterarTipo"])){

        if(isset($_POST["idAlterCF"])){

            $recebeId = $_POST["idAlterCF"];
            
            $descAlterada = $_POST["alterDescTipo"];

            $query = "UPDATE categoria_funcionario SET descricao = '{$descAlterada}' WHERE id_categoria_funcionario = {$recebeId}";

            $query_funcionario = mysqli_query($mePuxa, $query);
            header("location: tipoFuncionario.php");

        }   

    }




    if(isset($_POST["salvarFuncionario"])){

       $nome  = $_POST["nomeFuncionario"];
       $genero  = $_POST["generoFuncionario"];
       $estado_civil  = $_POST["estadoCivilFun"];
       $email  = $_POST["emailFuncionario"];
       $morada = $_POST["moradaFuncionario"];
       $telefone = $_POST["telefoneFuncionario"];
       $categoria  = $_POST["categoria_funcionario"];


        $query = "INSERT INTO funcionario VALUES(default, '$nome','$genero', '$estado_civil', '$email', '$morada', $telefone, '$categoria', 0)";

        $query_funcionario = mysqli_query($mePuxa, $query);

         header("location: cadFuncionario.php");

             
    }



    if(isset($_POST["alterFuncionario"])){

      if(isset($_POST["idAlterF"])){


            // Recebendo o id do funcionário cadastrado
            $recebeId = $_POST["idAlterF"];

            // Recebendo os dados a ser alterado

            $nome = $_POST["updateNomeFun"];
            $email = $_POST["updateFunEmail"];
            $telefone = $_POST["updateFunTelefone"];
            $genero = $_POST["updateFunGenero"];
            $estado_civil = $_POST["updateFunEC"];
            $categoria_funcionario = $_POST["updateFunCT"];
            $morada = $_POST["updateFunMorada"];

            $query = "UPDATE funcionario SET nomeFuncionario = '{$nome}', email = '{$email}', telefone = {$telefone}, genero = '{$genero}', estado_civil = '{$estado_civil}', id_fk_categoria = {$categoria_funcionario}, morada = '{$morada}', estatus_eliminar = 0 WHERE id_funcionario = {$recebeId}";

            $query_funcionario = mysqli_query($mePuxa, $query);
            header("location: cadFuncionario.php");

        }
      
    }





    // Eliminando funcionário da base de dados

    if(isset($_GET["mataFun"])){

      // Recebendo o id do funcionário cadastrado
      $recebeId = $_POST["mataFun"];

      $query = "DELETE FROM funcionario WHERE id_funcionario = {$recebeId}";

      $query_funcionario = mysqli_query($mePuxa, $query);
      header("location:cadFuncionario.php");

    }




    if(isset($_POST["salvarCorretor"])){


      $id_fk_funcionario = $_POST["id_fk_funcionario"];
      $senha = $_POST["senhaCorretor"];


      $query ="INSERT INTO utilizador VALUES(default, '{$senha}', {$id_fk_funcionario}, 0)";

      $query_corretor = mysqli_query($mePuxa, $query);
      header("location:cadCorretor.php");


    }




    // Alterando Corretores na plataforama

    if(isset($_POST["alterarCorretor"])) {

      

      $idDeterminante = $_POST["idUtilizadorAlter"];

      $senha = $_POST["alterarSenhaCorretor"];
      $id_fk_funcionario = $_POST["alterId_fk_funcionario"];

      $queryAlter = "UPDATE utilizador SET senha = '{$senha}', id_fk_funcionario = {$id_fk_funcionario} WHERE id_utilizador = {$idDeterminante}";

      $queryResult = mysqli_query($mePuxa, $queryAlter);

      header("location:cadCorretor.php");


    }

    // Inserindo Cidade do Imóvel

    if(isset($_POST["insertCidade"])){


      $cidade = $_POST["cidadeName"];

      $queryCidade = "INSERT INTO cidade VALUES (default, '{$cidade}')";

      $queryResult = mysqli_query($mePuxa, $queryCidade);

      header("location:cidade.php");

    }



    if(isset($_GET["mataCorretor"])){

      $idDeterminante = $_GET["mataCorretor"];

      $query = "DELETE FROM utilizador WHERE id_utilizador = {$idDeterminante}";

      $queryResult = mysqli_query($mePuxa, $query);

      header("location: cadCorretor.php");

    }




    // Alterando a cidade 

    if(isset($_POST["alterarCidade"])){


      $idDeterminante = $_POST["idCidade"];

      $nome = $_POST["updateCidade"];

      $query = "UPDATE cidade SET nome = '{$nome}' WHERE idCidade = {$idDeterminante}";

      $queryResult = mysqli_query($mePuxa, $query);

      header("location: cidade.php");


    }




    if(isset($_GET["mataCidade"])){

      $idDeterminante = $_GET["mataCidade"];

      $query = "DELETE FROM cidade WHERE idCidade = {$idDeterminante}";

      $queryResult = mysqli_query($mePuxa, $query);

      header("location: cidade.php");

    }



    // Salvando o Município

    if(isset($_POST["insertMunicipio"])){

      $id_fk_cidade = $_POST["id_fk_cidade"];
      $nomeMunicipio = $_POST["nomeMunicipio"];

      $query = "INSERT INTO municipio VALUES (default, '{$nomeMunicipio}', {$id_fk_cidade})";

      $queryObject = mysqli_query($mePuxa, $query);

      header("location: municipio.php");
      
    }




    // Alterando agora o Município 

    if(isset($_POST["updateMunicipio"])) {


      $idDeterminante = $_POST["idMunicipio"];

      $nome = $_POST["alterarMunicipio"];
      $id_fk_cidade = $_POST["alterar_id_fk_cidade"];

      $query = "UPDATE municipio SET nomeMun = '{$nome}', id_fk_cidade = {$id_fk_cidade}  WHERE idMunicipio = {$idDeterminante}";


      //echo $query;
      $queryResult = mysqli_query($mePuxa, $query);

      header("location: municipio.php");


    }



    // Deletando agora os municipios

    if(isset($_GET["mataMunicipio"])){

      
      $idDeterminante = $_GET["mataMunicipio"];

      $query = "DELETE FROM municipio WHERE idMunicipio = {$idDeterminante}";

      $queryResult = mysqli_query($mePuxa, $query);

      header("location: municipio.php");

    }


    //  Inserindo Bairro para o imóvel

    if(isset($_POST["insertBairro"])){


      $nomeBairro = $_POST["nomeBairro"];
      $id_fk_municipio = $_POST["id_fk_municipio"];

      $query = "INSERT INTO bairro VALUES (default, '{$nomeBairro}', {$id_fk_municipio})";

      $result = mysqli_query($mePuxa, $query);

      header("location: bairro.php");

    }


    // Alterando o bairro

    if(isset($_POST["btnAlterarBairro"])) {

      // Id do elemento a ser alterado

      $idDeterminante = $_POST["idBairro"];

      $nomeBairro = $_POST["updateBairro"];

      $id_fk_municipio = $_POST["update_id_fk_municipio"];

      $query = "UPDATE bairro SET nomeBairro = '{$nomeBairro}', id_fk_municipio = {$id_fk_municipio} WHERE idBairro = {$idDeterminante} ";

      $result = mysqli_query($mePuxa, $query);

      header("location: bairro.php");

    }


    // Deletando um bairro 

    if(isset($_GET["mataBairro"])) {

      $idMatador = $_GET["mataBairro"];

      $query = "DELETE FROM bairro WHERE idBairro = {$idMatador}";

      $queryResult = mysqli_query($mePuxa, $query);

      header("location: bairro.php");


    }


    // Salvando Tipo de Imóvel


    if(isset($_POST["salvarTipoImovel"])){


      $nomeTipo = $_POST["categoriaImovel"];

      $query = "INSERT INTO categoria_imovel VALUES (default, '{$nomeTipo}', 0)";

      $result = mysqli_query($mePuxa, $query);

      header("location: tipoImovel.php");

    }

    // Alterando o tipo de Imóvel 
    if(isset($_POST["btnUpdateTipoImovel"])) {


      $idTipo = $_POST["idTipo"];

      $descricao = $_POST["updateCategoria"];

      $query = "UPDATE categoria_imovel SET descricao = '{$descricao}' WHERE id_categoria = {$idTipo} ";

      $result = mysqli_query($mePuxa, $query);

      header("location: tipoImovel.php");


    }

    // Deltando tipo de Imóvel

    if(isset($_GET["mataTipo"])){


      $idMatador = $_GET["mataTipo"];

      $query = "DELETE FROM categoria_imovel WHERE id_categoria = {$idMatador}";

      $queryResult = mysqli_query($mePuxa, $query);

      header("location: tipoImovel.php");

    }


    //  Inserindo agora o cliente Vendedor


    if(isset($_POST["insertClienteV"])){



      //Atenção CV seginifica Cliente(C) Vendedor(V)


      $nomeCV = $_POST["nomeclienteV"];

      $emailCV = $_POST["emailClienteV"];

      $telefoneCV = $_POST["telefoneClienteV"];

      $generoCV = $_POST["generoClienteV"];

      $ruaCV = $_POST["ruaClienteV"];

      $bairroCV = $_POST["bairroClienteV"];

      $cidadeCV = $_POST["cidadeClienteV"];

      $estadoCivilCV = $_POST["ecClienteV"];

      $tipoCleinte = "Vendedor";
      $comentario = "Sem comentario";

      $query = "INSERT INTO cliente VALUES(default, '{$nomeCV}', '{$generoCV}', '{$estadoCivilCV}','{$emailCV}', '{$tipoCleinte}','{$ruaCV}', '{$bairroCV}','{$cidadeCV}', {$telefoneCV}, '{$comentario}', 0)";

      $result = mysqli_query($mePuxa, $query);

      header("location: clienteVendedor.php");

    }


    //Deletando o cliente da base de dados

    if(isset($_GET["mataClienteCV"])){

        $idMatador = $_GET["mataClienteCV"];

        $query = "DELETE FROM cliente WHERE id_cliente = {$idMatador}";

        $queryResult = mysqli_query($mePuxa, $query);

        header("location: clienteVendedor.php");

    }

    //Alterando os dados do cliente

    if(isset($_POST["btnupdateCV"])) {



      $id = $_POST["idClienteV"];

      $nomeClienteV = $_POST["upNameClienteV"];

      $emailClienteV = $_POST["upEmailClienteV"];

      $telefoneClienteV = $_POST["upTelefoneClienteV"];

      $estado_civil_clienteV = $_POST["upEcClienteV"];

      $generoClienteV = $_POST["upGeneroClienteV"];

      $ruaClienteV = $_POST["upRuaClienteV"];

      $bairroClienteV = $_POST["upBairroCliente"];

      $cidadeClienteV = $_POST["upCidadeCleinteV"];

     $query = "UPDATE cliente SET nomeCliente = '{$nomeClienteV}', genero = '{$generoClienteV}', estado_civil = '{$estado_civil_clienteV}', email = '{$emailClienteV}', rua = '{$ruaClienteV}', bairro = '{$bairroClienteV}', cidade = '{$cidadeClienteV}' WHERE id_cliente = {$id} ";

      $result = mysqli_query($mePuxa, $query);

      header("location: clienteVendedor.php");



    }



    if(isset($_POST["btnInsertImovel"])){


      $titulo = $_POST["titulo"];

      $valor = $_POST["valor"];

      $area = $_POST["area"];

      $qtdSala = $_POST["qtdSala"];

      $qtdBanheiro = $_POST["qtdBanheiro"];

      $qtdQuarto = $_POST["qtdQuarto"];

      $qtdSuite = $_POST["qtdSuite"];

      $cidade = $_POST["cidade"];

      $municipio = $_POST["municipio"];

      $bairro = $_POST["bairro"];

      $status = $_POST["status"];

      $condicaoImovel = $_POST["condicaoImovel"];

      $tipoImovel = $_POST["tipoImovel"];

      $cliente = $_POST["cliente"];

      $descricao = $_POST["descImovel"];

      $data = date('Y-m-d');

      $funcionario = $_POST["funcionario"];



      $query = "INSERT INTO imovel VALUES (default, '{$titulo}', {$area}, {$valor}, {$qtdSala}, {$qtdBanheiro}, '{$data}', {$qtdQuarto}, {$qtdSuite}, '{$status}', '{$descricao}', '{$condicaoImovel}', {$tipoImovel}, {$cliente}, {$funcionario}, {$bairro}, 0, 'Sem Imagem')";

      $result = mysqli_query($mePuxa, $query);


      header("location:cadImovel.php");

    }


    // Alterando Imovel

    if(isset($_POST["btnUpdateImovel"])){


      $idImovel = $_POST["idImovelUpdate"];

      $titulo = $_POST["titulo"];

      $valor = $_POST["valor"];

      $area = $_POST["area"];

      $qtdSala = $_POST["qtdSala"];

      $qtdBanheiro = $_POST["qtdBanheiro"];

      $qtdQuarto = $_POST["qtdQuarto"];

      $qtdSuite = $_POST["qtdSuite"];

      $bairro = $_POST["bairro"];

      $status = $_POST["status"];

      $condicaoImovel = $_POST["condicaoImovel"];

      $tipoImovel = $_POST["tipoImovel"];

      $cliente = $_POST["cliente"];

      $funcionario = $_POST["funcionario"];


      $query = "UPDATE imovel SET titulo = '{$titulo}', valor = {$valor}, area = {$area}, qtd_sala = {$qtdSala}, qtd_wc = {$qtdBanheiro}, qtd_quarto = {$qtdQuarto}, qtd_suite = {$qtdSuite}, id_fk_bairro = {$bairro}, estatus = '{$status}', condicao_imovel = '{$condicaoImovel}', id_fk_categoria = {$tipoImovel}, id_fk_cliente = {$cliente}, id_fk_funcionario = {$funcionario} WHERE id_imovel = {$idImovel} ";


      $result = mysqli_query($mePuxa, $query);

      header("location: cadImovel.php");

    }



    // Deletando imóvel do banco de dados

    if(isset($_GET["mataImovel"])){

      $idMatador = $_GET["mataImovel"];

      $query = "DELETE FROM imovel WHERE id_imovel = {$idMatador}";

      $queryResult = mysqli_query($mePuxa, $query);

      header("location: cadImovel.php");

    }


    if(isset($_POST["btnImagemPrincipal"])){


      $imagem = $_FILES["imagemPrincipal"]["name"];
      $tmp = $_FILES["imagemPrincipal"]["name"];

      $idSelector = $_POST["idImovelImg"];



      $query = "UPDATE imovel SET imagem = '{$imagem}' WHERE id_imovel = {$idSelector} ";

      $result = mysqli_query($mePuxa, $query);

      move_uploaded_file($tmp, PASTA_IMAGEM.$imagem);

      header("location: cadImovel.php");

    }




    if(isset($_POST["btnImagemDM"])){


      $imagem = $_FILES["imagemPrincipal"]["name"];
      $tmp = $_FILES["imagemPrincipal"]["name"];

      $idSelector = $_POST["idImovelImg"];



      $query = "INSERT INTO galeria VALUES(default, '{$imagem}', {$idSelector}, 0) ";

      $result = mysqli_query($mePuxa, $query);  


      move_uploaded_file($tmp, PASTA_IMAGEM.$imagem);

      header("location: cadImovel.php");

    }




?>