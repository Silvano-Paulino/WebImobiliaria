<?php include_once 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <!-- Informações da página -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Paracletors
    </title>

    <!-- Cascating Style Sheet -->
    <link rel="stylesheet"  href="css/estilo.css" />
    <link rel="stylesheet"  href="css/servico.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.css">

    <!---CSS Estilo JS-->
    <script src="js/bootstrap.bundle.min.js" ></script>

</head>
<body id="bodyCentral" >

    <!--Início da estrutura semântica do html:-->

    <header id="header" ><!--Início do cabeçalho da página-->
        <div class="contentorGeral cabecalho" >            

                <!--MENU* -->
                    <div class="contentorMenu" >
                        
                        
                            <!--Área da informação do site e motores de busca-->
                            <div class="inforMenu elementoMenu" >
                                <div class="campoInfor limite" >
                                    <div class="conteinerInforMenu elementoMenu" >

                                        <div class="contentorContacto" >
                                            
                                            <div class="componenteInfor inforEmail" >
                                                <i class="fa fa-envelope-o elementoContacto iconeContacto"></i>
                                                 <span class="elementoContacto" > paracletors@gmail.com</span>                                           
                                            </div>
                                            <div class="componenteInfor inforTelefone" >
                                                <i class="fa fa-phone elementoContacto iconeContacto"></i>
                                                 <span class="elementoContacto" >+244 999 999 999</span> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="inforBusca">

                                        <div class="contentorBusca elementoBusca"  >
                                            <form method="" action="" class="formularioBuscador" >
                                                <input typ="text" name="buscadorGeral" class="inputBuscador componenteBusca" placeholder="Buscar Imóvel" >
                                                <button class="fa fa-search componenteBusca btBusca" ></button>
                                            </form>
                                        </div>

                                        <div class="componenteMidia elementoBusca" >
                                            <a class="fundo" href="#" ><i class="fa fa-twitter" ></i></a>
                                            <a class="fundo" href="#" ><i class="fa fa-facebook" ></i></a>
                                            <a class="fundo" href="#" ><i class="fa fa-whatsapp" ></i></a>
                                            <a class="fundo" href="#" ><i class="fa fa-linkedin" ></i></a>
                                            <a class="fundo" href="#" ><i class="fa fa-instagram" ></i></a>                                           
                                         </div>

                                    </div>
                                </div>
                            </div>

                            <!--Área da Navegação do site -->
                            <div class="navegaMenu elementoMenu">
                                <div class="campoNavegar limite">
                                    <div class="contentorNavegar">

                                        <!--Logo-->
                                        <div class="contentorLogotipo elementoNavegacao divNavega">                                          
                                            <div class="contentorImg">
                                                <img src="img/logoParacletors.png">
                                            </div>
                                            <div class="contentorTextoLogo" style="display:none" >
                                                <span class="textoInteiro" >paraclet<span class="parteTexto" >ors</span></span>
                                            </div>

                                        </div>
                                        

                                        <!--Nav-->
 
                                        <div class="contentorNav elementoNavegacao divNavega"  >

                                            <!--Início Botão da responsividade do site-->
                                            <div class="btResponsividade idBtnResponsividade" >
                                                <div class="linhaResponsiva linhaR1" ></div>
                                                <div class="linhaResponsiva linhaR2" ></div>
                                                <div class="linhaResponsiva linhaR3" ></div>
                                            </div>

                                            <!--Fim Botão da responsividade do site-->

                                            <nav class="nav idNavSiteMenu">

                                                <ul class="listaMenu">

                                                    <li class="le"><a href="index.php" class="active linkMenu">Página inicial</a></li>
                                                    <li><a class="linkMenu temSubmenu" id="subLista" >Venda <i class="fa fa-caret-down iconeMenu" ></i></a>
                                                        <ul class="subMenu" id="subMenuVenda">  
                                                            <li><a class="itemSubMenu" href="list.html" >Novos Imóveis</a></li>
                                                            <li><a class="itemSubMenu" href="list.html" >Em destaques</a></li>
                                                            <li><a class="itemSubMenu" href="list.html" >Mais popular</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="linkMenu" id="subListaCompra" >Compra <i class="fa fa-caret-down iconeMenu" ></i></a>
                                                        <ul class="subMenu" id="subMenuCompra" >  
                                                            <li><a href="list.html" class="itemSubMenu" >Novos Imóveis</a></li>
                                                            <li><a href="list.html" class="itemSubMenu" >Em destaques</a></li>
                                                            <li><a href="list.html" class="itemSubMenu" >Mais popular</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="linkMenu" href="list.html" >Todos Imóveis</a></li>
                                                    <li><a class="linkMenu" href="servece.php" >Serviços</a></li>
                                                    <li><a class="linkMenu" href="sobre.html" >Sobre</a></li>
                                                    <li><a class="linkMenu" href="contact.html" >Contacto</a></li>    
                                                    <li><a style="display:none" class="btLogin" href="Tela_login.php" >Login</a></li>                                                  
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                    </div>
                <!--*MENU-->

                <!--SLIDER IMÓVEIS*-->

                <div class="contentorSlid" id="slider-container">
                    <div class="carousel slide" id="slider" data-bs-ride="carousel">
                        <div class="carousel-indicators" >
                            <button 
                            type="button" 
                            class="active"
                            data-bs-target="#slider"
                            data-bs-slide-to="0" 
                            aria-current="true" 
                            aria-label="Slide 1" ></button>
                            <button type="button"  data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2" ></button>
                            <button type="button"  data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3" ></button>
                        </div>
                        <div class="carousel-inner">

                            <?php 

                                    $query = "SELECT * FROM imovel i JOIN bairro b ON i.id_fk_bairro = b.idBairro JOIN municipio m ON m.idMunicipio = b.id_fk_municipio JOIN cidade c ON m.id_fk_cidade = c.idCidade JOIN galeria ga on ga.id_fk_imovel = i.id_imovel WHERE id_imovel = 4;";

                                    $result = mysqli_query($mePuxa, $query);


                                    while($slider = $result->fetch_array()){

                                                
                            ?>

                            <div class="carousel-item tm-home active">
                                <img src="upload/<?php echo $slider["imagem"] ?>" alt="Casa 1" class="d-block w-100"  >

                                <div class="divSombra">
                                    <div class="listaInforImovel" >
                                        <div class="contentorSliderInfor" >

                                             <!--Início da formatação das informações dos imóveis -->

                                            <div class="divItem1 divItemCasa" >
                                                <div class="conteinerItem1 itemListaInforGeral limite" >
                                                    <ul>
                                                        <li><span class="textoPreco" name="precoImovel elementoBaseImovel" ><?php echo $slider["valor"] ?>AOA</span></li>
                                                        <li><span class="tituloImovel" name="tituloImovel elementoBaseImovel"  > <?php echo $slider["titulo"] ?> </span></li>
                                                        <li><span class="enderecoImovel elementoBaseImovel" ><?php echo $slider["nomeBairro"].", ".$slider["nomeMun"].", ".$slider["nome"] ?></span></li>
                                                        <li><span class="enderecoImovel elementoBaseImovel" ><?php echo $slider["estatus"] ?></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="divItem2 divItemCasa" >
                                                  
                                            </div>
                                            <div class="divItem3 divItemCasa itemListaInforGeral" >
                                                <div class="conteinerItem1 limite" >
                                                    <ul>
                                                        <li>
                                                            <a class="consultaImovel maisInforImovel" >
                                                                <span  > Consulta mais informações  </span>
                                                                <i class="fa fa-angle-right iconeFim" ></i>
                                                            </a>                                                            
                                                        </li>
                                                        <li>

                                                            
                                                            <div class="divAlgunsImoveis" >
                                                                <?php 

                                                                $query = "SELECT * FROM galeria WHERE id_fk_imovel = {$slider["id_imovel"]} LIMIT 3";

                                                                $result = mysqli_query($mePuxa, $query);

                                                                while($img = $result->fetch_array()){




                                                                ?>
                                                                <div class="imovelEmResumo" >
                                                                    <a href="#" ><img src="upload/<?php echo $img["caminho"] ?>" name="imgResumo1" /></a>
                                                                </div>                                                                
                                                                <?php 

                                                               }

                                                              ?>    
                                                            </div>

                                                            
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>       
                                            <!--Fim da formatação das informações dos imóveis -->                                 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php 
                                }
                            ?>

                            <?php 

                                $query = "SELECT * FROM imovel i JOIN bairro b ON i.id_fk_bairro = b.idBairro JOIN municipio m ON m.idMunicipio = b.id_fk_municipio JOIN cidade c ON m.id_fk_cidade = c.idCidade JOIN galeria ga on ga.id_fk_imovel = i.id_imovel WHERE id_imovel = 5;";

                                $result = mysqli_query($mePuxa, $query);


                            while($slider = $result->fetch_array()){

                                        
                            ?>

                            <div class="carousel-item tm-home ">
                                <img src="upload/<?php echo $slider["imagem"] ?>" alt="Casa 1" class="d-block w-100"  >

                                <div class="divSombra">
                                    <div class="listaInforImovel" >
                                        <div class="contentorSliderInfor" >

                                            <!--Início da formatação das informações dos imóveis -->

                                            <div class="divItem1 divItemCasa" >
                                                <div class="conteinerItem1 itemListaInforGeral limite" >
                                                    <ul>
                                                        <li><span class="textoPreco" name="precoImovel elementoBaseImovel" ><?php echo $slider["valor"] ?>AOA</span></li>
                                                        <li><span class="tituloImovel" name="tituloImovel elementoBaseImovel"  > <?php echo $slider["titulo"] ?> </span></li>
                                                        <li><span class="enderecoImovel elementoBaseImovel" ><?php echo $slider["nomeBairro"].", ".$slider["nomeMun"].", ".$slider["nome"] ?></span></li>
                                                        <li><span class="enderecoImovel elementoBaseImovel" ><?php echo $slider["estatus"] ?></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="divItem2 divItemCasa" >
                                                
                                            </div>
                                            <div class="divItem3 divItemCasa itemListaInforGeral" >
                                                <div class="conteinerItem1 limite" >
                                                    <ul>
                                                        <li>
                                                            <a class="consultaImovel maisInforImovel" >
                                                                <span  > Consulta mais informações  </span>
                                                                <i class="fa fa-angle-right iconeFim" ></i>
                                                            </a>                                                            
                                                        </li>
                                                        <li>

                                                            
                                                            <div class="divAlgunsImoveis" >
                                                                <?php 

                                                                $query = "SELECT * FROM galeria WHERE id_fk_imovel = {$slider["id_imovel"]} LIMIT 3";

                                                                $result = mysqli_query($mePuxa, $query);

                                                                while($img = $result->fetch_array()){




                                                                ?>
                                                                <div class="imovelEmResumo" >
                                                                    <a href="#" ><img src="upload/<?php echo $img["caminho"] ?>" name="imgResumo1" /></a>
                                                                </div>                                                                
                                                                <?php 

                                                            }

                                                            ?>    
                                                            </div>

                                                            
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>       
                                            <!--Fim da formatação das informações dos imóveis -->                                 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php 
                            }
                            ?>

                            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev" >
                                <i class="bi bi-chevron-compact-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next" >
                                <i class="bi bi-chevron-compact-right"></i>
                                <span class="visually-hidden">Next</span>
                            </button>


                            
                        </div>
                    </div>
                </div>

                <!--*SLIDER IMÓVEIS-->
            
            
            
            <!--INÍCIO DA ÁREA DE BUSCA-->            
            <div class="buscadoImoveis" >
                <div class="contentorBuscaImovel" >
                    <div class="contentorFormBusca limite" >
                        <form class="formBuscaImovel" method="" action="">
                            
                            <!--Busca de Cidade-->
                            <div class="contentorElementoForm" >
                                <label class="labelFormBusca" for="idBuscaMunicipio" >Cidade</label>
                                <select class="selectBusca" name="selectBusca" >
                                    <option>Cidade</option>
                                    <option>Luanda</option>
                                    <option>Bengo</option>
                                    <option>Benguela</option>
                                    <option>Huambo</option>
                                    <option>Cunene</option>
                                </select>
                            </div>
                            
                            <!--Busca de  Munícipio  -->                            
                            <div class="contentorElementoForm" >
                                <label class="labelFormBusca" for="idBuscaMunicipio" >Município</label>
                                <select class="selectBusca" name="selectBusca" >
                                    <option>Munícipio</option>
                                    <option>Talatona</option>
                                    <option>Viana</option>
                                    <option>Icolo Bengo</option>
                                    <option>Belas</option>
                                    <option>Cacuaco</option>
                                </select>
                            </div>
                            
                            <!--Busca de  Distrito  -->
                            <div class="contentorElementoForm" >
                                <label class="labelFormBusca" for="idBuscaDistrito" >Distrito</label>
                                <select class="selectBusca" name="selectBusca" >
                                    <option>Distrito</option>
                                    <option>Multiperfil</option>
                                    <option>Talatona</option>
                                    <option>Futungo</option>
                                    <option>Patriota</option>
                                    <option>Rangel</option>
                                </select>
                            </div>
                            
                            <!--Busca de  Bairro  -->                            
                             <div class="contentorElementoForm" >
                                <label class="labelFormBusca" for="idBuscaBairro" >Bairro</label>
                                <input id="idBuscaBairro" class="inputHome" type="text" name="inputBairro" placeholder="" />
                            </div>
                            
                            <!--Busca de  Preço  -->    
                            <div class="contentorElementoForm" >
                                <label class="labelFormBusca" for="idBuscaPreco" >Preço</label>
                                <input id="idBuscaPreco" class="inputHome" type="text" name="inputPreco" placeholder="" />
                            </div>
                            
                            <!--Busca de  Botão  --> 
                            <div class="contentorElementoForm" >                                
                                <button class="btPesquisaImovel" >Pesquisar Rápido</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            
            <!--FIM DA ÁREA DE BUSCA-->
            
        </div>
    </header>

    <!--Fim do cabeçalho da página-->



    
    
    <div class="container mt-5" >
        
        <div class="sessaoServico" >

             <div class="sessaoTitulo">
                <h2 class="tituloDestaques">
                    Nossos Serviços
                </h2>
            </div>

            <div class="conteudoServico mt-4 mb-5" >

                <p>
                    A Parakletos-Imóveisterá por objetivo a exploração de serviços de gestão e mediação imobiliária, neste sentido a nossa sociedade terá à disposição dos seguintes serviços 
                </p>

            </div>


            <div class="contentorCardServico mt-5 mb-5" >         

                <!-- Card de Serviço -->
                <button type="button" data-bs-target="#Modal" data-bs-toggle="modal">

                    <div class="cardServico" >

                        <span>
                            <i class="bi bi-set" ></i>Nosso Serviço
                        </span>
                        <div class="imgServico" >
                            <img src="img/venda.jpg" alt="Serviço da Imobiliária" />
                            <div class="nomeServico" >
                                Permutação de Imóveis
                            </div>
                        </div>

                    </div>

                </button>

            </div>

            <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nome do serviço</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-imagem">
                            <img src="img/image_1.jpg" alt="">
                        </div>
                        <div class="modal-texto">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quos explicabo repellendus deleniti voluptas nulla perferendis vel laborum, blanditiis molestiae illo sequi ab suscipit. Libero sed laborum at nulla earum!</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                    </div>
                </div>
            </div>

        </div>

    </div>






    <footer id="footer" ><!--Início do rodapé da página-->
        <div class="contentorGeralFooter">
            
            <div class="divFooter limite" >
                <div class="conteudoFooter divElementoRodape1" >
                    <div class="conteudoMaisImovel" >
                        <ul class="listaAdd" style="margin:0 !important" >
                            <li> <a class="linkAddImovel" href="#" > <i class="fa fa-plus iconeAddImovel " ></i> Adicionar Propriedade</a></li>
                            <li><span class="incrementoLinkAdd" > - mais imóveis para Paracletors </span></li>
                        </ul>
                    </div>
                </div>
                <div class="conteudoFooter divElementoRodape2" >
                    <div class="contentorListaMenuRodape" >
                        <div class="listaRodape1 listaRodapeGeral" > 
                            <h3 class="tituloMenuRodape" >
                                Empresa
                            </h3>
                             <ul class="listaRodapeMenu" style="padding-left:0 !important" >                                
                                 <li><a class="linkMenuRodape" >Sobre</a></li>
                                 <li><a class="linkMenuRodape" >Contacto</a></li>
                                 <li><a class="linkMenuRodape" >Recrutamanto</a></li>
                                 <li><a class="linkMenuRodape" >Corretores</a></li>
                             </ul>
                        </div>
                        <div class="listaRodape2 listaRodapeGeral" > 
                            <h3 class="tituloMenuRodape"  >
                                Nossas Propriedades
                            </h3>
                             <ul class="listaRodapeMenu" style="padding-left:0 !important" >                                
                                 <li><a class="linkMenuRodape" >Apartamentos</a></li>
                                 <li><a class="linkMenuRodape"  >Casas</a></li>
                                 <li><a class="linkMenuRodape"  >Condominio</a></li>
                                 <li><a class="linkMenuRodape"  >Mansão</a></li>
                             </ul>
                        </div>
                        <div class="listaRodape3 listaRodapeGeral" > 
                            <h3 class="tituloMenuRodape"  >
                                Fale Conosco
                            </h3>
                             <ul class="listaRodapeMenu" style="padding-left:0 !important" >                                
                                 <li><a class="linkMenuRodape"  >Bairro Bie, Patriota, Talatona</a></li>
                                 <li><a class="linkMenuRodape"  >952 156 937 / 925 215 742</a></li>
                                 <li><a class="linkMenuRodape"  >paracletorsservico@gmail.com</a></li>
                             </ul>

                             <div class="divNewsletter" >
                                  <h3 class="tituloMenuRodape" >NEWSLESTTER</h3>
                                  <p class="paragrafoNewsletter" >Fica ligado dos nossos novos imóveis inscrevendo com o seu email na nossa newsletter</p>
                                  <form class="formularioNewsletter" >
                                      <input type="email" name="emailNewsletter" class="inputEmailNewsletter" Placeholder="Informa aqui o seu Email" />
                                      <button class="btNewsletter" >Ok</button>
                                  </form>
                             </div>
                        </div>
                    </div>
                </div>

                <div class="conteudoFooter divElementoRodape3" >
                    <h2 class="tituloSite" name="nomeSite" >Paracletors</h2>

                    <div class="contentorConteudoFooter" >
                        <div class="divRodapeSobre" >
                            <p>Copy Right Paracletors 2022, este site tem os direitos reservados pela Paracletors</p>
                        </div>
                        <div class="divRodapeSobre" >
                            <a class="fundoFooter" href="#" ><i class="fa fa-twitter" ></i></a>
                            <a class="fundoFooter" href="#" ><i class="fa fa-facebook" ></i></a>
                            <a class="fundoFooter" href="#" ><i class="fa fa-whatsapp" ></i></a>
                            <a class="fundoFooter" href="#" ><i class="fa fa-linkedin" ></i></a>
                            <a class="fundoFooter" href="#" ><i class="fa fa-instagram" ></i></a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </footer><!--Fim do rodapé da página-->

    <!--Fim da estrutura semântica do html-->


    <!--Importação do Script -->
    <script src="js/script.js"  ></script>
    <script src="js/site.js" ></script>
</body>
</html>