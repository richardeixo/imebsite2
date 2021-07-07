<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/style-exames.css">
<link rel="stylesheet" type="text/css" href="css/style-content-blog.css">
<link rel="stylesheet" type="text/css" href="css/style-newsletter.css">
<link rel="stylesheet" type="text/css" href="css/style-unidades-home.css">
<link rel="stylesheet" type="text/css" href="css/style-footer.css">
<link rel="stylesheet" type="text/css" href="css/style-slide.css">
<link rel="stylesheet" type="text/css" href="css/style-depoimentos.css">
<link rel="stylesheet" type="text/css" href="css/style-menu-m.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	var visibilidade = false;
	function ocultarExibir() { // Quando clicar no botão.

        if (visibilidade) {//Se a variável visibilidade for igual a true, então...
            document.getElementById("drop-exames").style.display = "none";//Ocultamos a div
            visibilidade = false;//alteramos o valor da variável para falso.
        } else {//ou se a variável estiver com o valor false..
            document.getElementById("drop-exames").style.display = "block";//Exibimos a div..
            visibilidade = true;//Alteramos o valor da variável para true.
        }
    }
    function cliente() {
    	document.getElementById("menu-medico").style.display = "none";
    	document.getElementById("menu-cliente").style.display = "block";
    	document.getElementById("btn-cliente").classList.add("ativa");
    	document.getElementById("btn-cliente").classList.remove("inativa");
    	document.getElementById("btn-medico").classList.remove("ativa");
    	document.getElementById("btn-medico").classList.add("inativa");
    }
    function medico() {
    	document.getElementById("menu-medico").style.display = "block";
    	document.getElementById("menu-cliente").style.display = "none";
    	document.getElementById("btn-cliente").classList.add("inativa");
    	document.getElementById("btn-cliente").classList.remove("ativa");
    	document.getElementById("btn-medico").classList.remove("inativa");
    	document.getElementById("btn-medico").classList.add("ativa");
    }
     function clientem() {
    	document.getElementById("menu-medico-m").style.display = "none";
    	document.getElementById("menu-cliente-m").style.display = "block";
    	document.getElementById("btn-cliente-m").classList.add("ativa-m");
    	document.getElementById("btn-cliente-m").classList.remove("inativa-m");
    	document.getElementById("btn-medico-m").classList.remove("ativa-m");
    	document.getElementById("btn-medico-m").classList.add("inativa-m");
    }
    function medicom() {
    	document.getElementById("menu-medico-m").style.display = "block";
    	document.getElementById("menu-cliente-m").style.display = "none";
    	document.getElementById("btn-cliente-m").classList.add("inativa-m");
    	document.getElementById("btn-cliente-m").classList.remove("ativa-m");
    	document.getElementById("btn-medico-m").classList.remove("inativa-m");
    	document.getElementById("btn-medico-m").classList.add("ativa-m");
    }
    /* Open the sidenav */
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</head>
<body>
	<div class="container-fluid branco">
	<div class="container top">
		<div class="row top-bar">
			<div class="col-md-6 top-left">
				<img src="imagens/logo.png" />
				<div class="tab-climed">
					<ul>
						<li><button id="btn-cliente" class="ativa" onclick="cliente()">Cliente</button></li>
						<li><button id="btn-medico" class="inativa" onclick="medico()">Médico</button></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 top-right">
				<div class="rsociais">
					<a href="#"><div class="ico-fb"></div></a>
					<a href="#"><div class="ico-ig"></div></a>
					<a href="#"><div class="ico-in"></div></a>
				</div>
				<button type="button" class="btn btn-primary btn-agende">AGENDE <br/>SEU EXAME</button>
			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid nav-bar">
		<div class="container">
			><button class="btn-exames" onclick="ocultarExibir()"> Exames</button>

			<nav class="menu menu-cliente" id="menu-cliente">
				<ul>
					<li><a href="#">Convênios</a></li>
					<li><a href="#">Resultado de Exames</a></li>
					<li><a href="#">Unidades</a></li>
					<li><a href="#">Cuide da sua Saúde</a></li>
					<li><a href="#">Fale Conosco</a></li>
					<li><a href="#">Materiais Gratuitos</a></li>
				</ul>
			</nav>

			<nav class="menu menu-medico" id="menu-medico">
				<ul>
					<li><a href="#">Médico</a></li>
					<li><a href="#">Médico 2</a></li>
					<li><a href="#">Médico 3</a></li>
				</ul>
			</nav>
			<div class="drop-exames" id="drop-exames">

				<div class="coluna">
					<span class="title-exam">Ecografia</span>
					<a href="#">Cervical</a>
					<a href="#">Bolsa escrotal</a>
					<a href="#">Fossa clavicular</a>
					<a href="#">Paratireóide</a>
					<a href="#">Parede abdominal</a>
					<a href="#">Parótica</a>
					<a href="#">Próstata via abdominal</a>
					<button type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Cintilografia</span>
					<a href="#">Metaiodobenzilguanidina</a>
					<a href="#">Tireoide com captação</a>
					<a href="#">Paratireoides</a>
					<a href="#">Fígado e baço</a>
					<a href="#">Perfusão Cerebral</a>
					<a href="#">Fígado e Vias Biliares</a>
					<a href="#">Miocárdica</a>
					<button type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Mamografia</span>
					<a href="#">Com contraste</a>
					<a href="#">Por Ecografia</a>
					<a href="#">Por mamografia</a>
					<a href="#">Digital de Campo Total</a>
					<a href="#">Por Ecografia</a>
					<a href="#">Por mamografia</a>
					<a href="#">Por Ressonância Magnética</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Ressonância Magnética</span>
					<a href="#">Colangioressonância</a>
					<a href="#">Enteroressonância</a>
					<a href="#">Articulação Coxo-femoral</a>
					<a href="#">Articulação Sacro-Ilíaca</a>
					<a href="#">Articulação temporomandibular</a>
					<a href="#">Coluna</a>
					<a href="#">Coxa</a>
					<button type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Tomografia Computadorizada</span>
					<a href="#">Mastóide</a>
					<a href="#">Órbitas</a>
					<a href="#">Abdome total</a>
					<a href="#">Crânio</a>
					<a href="#">Tórax</a>
					<a href="#">Seios da face</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Densitometria Óssea</span>
					<a href="#">Coluna, Fêmur e Antebraço ou Rádio Distal</a>
					<a href="#">Corpo Inteiro</a>
					<a href="#">Vertebral ou LVA</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Suíte Terapêutica</span>
					<a href="#">Suíte Terapêutica</a>
				</div>

				<div class="coluna">
					<span class="title-exam">PET-CT</span>
					<a href="#">PET-CT</a>
				</div>

			</div>
		</div>
	</div>
<!--<div id="mySidenav" class="sidenav">
	<div class="container-menu">
	<img src="imagens/logo.png" />
	<div class="tab-climed">
					<ul>
						<li><button id="btn-cliente-m" class="ativa" onclick="clientem()">Cliente</button></li>
						<li><button id="btn-medico-m" class="inativa" onclick="medicom()">Médico</button></li>
					</ul>
				</div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="menu-m menu-cliente-m" id="menu-cliente-m">
					<a href="#">Convênios</a>
					<a href="#">Resultado de Exames</a>
					<a href="#">Unidades</a>
					<a href="#">Cuide da sua Saúde</a>
					<a href="#">Fale Conosco</a>
					<a href="#">Materiais Gratuitos</a>
				</div>
				<div class="menu-m menu-medico-m" id="menu-medico-m">
			
					<a href="#">Médico</a>
					<a href="#">Médico 2</a>
					<a href="#">Médico 3</a>
				
			</div>
  <div class="rsociais-m">
					<a href="#"><div class="ico-fb"></div></a>
					<a href="#"><div class="ico-ig"></div></a>
					<a href="#"><div class="ico-in"></div></a>
				</div>
			</div>

</div>
	<section class="menu-mobile">
		<div class="container-fluid branco">     

          <nav role="navigation">

            <div class="col-xs-4 left-m" id="menuToggle">
            	<span onclick="openNav()">open</span>
             
            
           </div>
           <div class="col-xs-4 mid-m"><img src="imagens/logo.png" /></div>
           <div class="col-xs-4 right-m"><button type="button" class="btn btn-primary btn-agende">AGENDE <br/>SEU EXAME</button></div>
          </nav>
        </div>
       </div>
    </div>
	</section>-->
<section class="slider">
        <div class="container-fluid container-eixo slider-eixo">  

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
    
                    <div class="item active">
                        <div class="objeto-slider">
                            <div class="texto-slider">
                                <h1>
                                    Resultados Online
                                </h1>
                                <p>
                                    Agora você pode consultar os seus
                                    resultados dos seus exames
                                    em qualquer lugar
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="item">
                        <div class="objeto-slider">
                            <div class="texto-slider">
                                <h1>
                                    Resultados Online
                                </h1>
                                <p>
                                    Agora você pode consultar os seus
                                    resultados dos seus exames
                                    em qualquer lugar
                                </p>
                            </div>
                        </div>
                    </div>   
    
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span></a>
            </div>
            
        </div>
</section>

<section class="exames">
	<div class="container">
		<h1 class="titulo-exames">EXAMES</h1>
		<div class="box-img-exames">
			<img src="imagens/exames/ecografia.png" class="img-exames" />
			<img src="imagens/exames/densitometria.png"  class="img-exames"/>
			<img src="imagens/exames/pet.png"  class="img-exames"/>
			<img src="imagens/exames/cintilografia.png"  class="img-exames"/>
			<img src="imagens/exames/mamografia.png"  class="img-exames"/>
			<img src="imagens/exames/res-magnetica.png"  class="img-exames"/>
			<img src="imagens/exames/mamografia.png"  class="img-exames"/>
			<img src="imagens/exames/res-magnetica.png"  class="img-exames"/>
		</div>
		<br/>
	</div>
</section>

<section class="conteudo-blog">
	<div class="container">
        <h1>CONTEÚDOS DA SAÚDE</h1>
        <div class="row">
            <div class="cards-conteudo">
                <div class="card-conteudo">
                    <div class="texto-conteudo">
                        <h3>Título que pode conter uma linha apenas ou várias delas.</h3>
                        <a href="#"><button>Ver mais</button></a>
                    </div>
                </div>

                <div class="card-conteudo">
                    <div class="texto-conteudo">
                        <h3>Título que pode conter uma linha apenas ou várias delas.</h3>
                        <a href="#"><button>Ver mais</button></a>
                    </div>
                </div>


            </div>            
        </div>


        <div class="row">
            <div class="cards-conteudo">
                <div class="card-conteudo">
                    <div class="texto-conteudo">
                        <h3>Título que pode conter uma linha apenas ou várias delas.</h3>
                        <a href="#"><button>Ver mais</button></a>
                    </div>
                </div>

                <div class="card-conteudo">
                    <div class="texto-conteudo">
                        <h3>Título que pode conter uma linha apenas ou várias delas.</h3>
                        <a href="#"><button>Ver mais</button></a>
                    </div>
                </div>

            </div>

            
        </div>

        <div class="row">
            <div class="cards-conteudo">
                <div class="card-conteudo-video">
                    <iframe width="545" height="250" src="https://www.youtube.com/embed/P8A2iXI2JdM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="card-conteudo-video">
                    <iframe width="545" height="250" src="https://www.youtube.com/embed/P8A2iXI2JdM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>

            
        </div>
        </div>
    </section>

    <section class="depoimentos">
    	<div class="container">
    		<h1>DEPOIMENTOS DE NOSSOS CLIENTES</h1>
    		<div class="depoimento-full">
	    		<div class="card-depoimento">
	    			<div class="col-img">
	    			<img src="imagens/home_slide_animal.jpg">
	    			</div>
	    			<div class="col-txt">
	    			<p class="texto">“Atendimento para uma tomografia sem contraste de emergência
	foi bem rápido, todos os atendentes e técnicos foram muito
	simpáticos. Recomendo."</p>
	    			<strong>Aline Almeida</strong>
	    			<div class="rating-stars">
	    			<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					</div>
					</div>
	    		</div>

	    		<div class="card-depoimento">
	    			<div class="col-img">
	    			<img src="imagens/home_slide_animal.jpg">
	    			</div>
	    			<div class="col-txt">
	    			<p class="texto">“Atendimento para uma tomografia sem contraste de emergência
	foi bem rápido, todos os atendentes e técnicos foram muito
	simpáticos. Recomendo."</p>
	    			<strong>Aline Almeida</strong>
	    			<div class="rating-stars">
	    			<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					</div>
					</div>
	    		</div>

	    		<div class="card-depoimento">
	    			<div class="col-img">
	    			<img src="imagens/home_slide_animal.jpg">
	    			</div>
	    			<div class="col-txt">
	    			<p class="texto">“Atendimento para uma tomografia sem contraste de emergência
	foi bem rápido, todos os atendentes e técnicos foram muito
	simpáticos. Recomendo."</p>
	    			<strong>Aline Almeida</strong>
	    			<div class="rating-stars">
	    			<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					</div>
					</div>
	    		</div>

	    		<div class="card-depoimento">
	    			<div class="col-img">
	    			<img src="imagens/home_slide_animal.jpg">
	    			</div>
	    			<div class="col-txt">
	    			<p class="texto">“Atendimento para uma tomografia sem contraste de emergência
	foi bem rápido, todos os atendentes e técnicos foram muito
	simpáticos. Recomendo."</p>
	    			<strong>Aline Almeida</strong>
	    			<div class="rating-stars">
	    			<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					</div>
					</div>
	    		</div>

	    		<div class="card-depoimento">
	    			<div class="col-img">
	    			<img src="imagens/home_slide_animal.jpg">
	    			</div>
	    			<div class="col-txt">
	    			<p class="texto">“Atendimento para uma tomografia sem contraste de emergência
	foi bem rápido, todos os atendentes e técnicos foram muito
	simpáticos. Recomendo."</p>
	    			<strong>Aline Almeida</strong>
	    			<div class="rating-stars">
	    			<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					</div>
					</div>
	    		</div>

	    		<div class="card-depoimento">
	    			<div class="col-img">
	    			<img src="imagens/home_slide_animal.jpg">
	    			</div>
	    			<div class="col-txt">
	    			<p class="texto">“Atendimento para uma tomografia sem contraste de emergência
	foi bem rápido, todos os atendentes e técnicos foram muito
	simpáticos. Recomendo."</p>
	    			<strong>Aline Almeida</strong>
	    			<div class="rating-stars">
	    			<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					</div>
					</div>
	    		</div>
	    	</div>
    	</div>
    </section>

    <section class="unidades">

    	<div class="container">
			<h1>UNIDADES</h1>
    		<div class="col-md-5 col-unidades">
    			<button class="btn-unidades" >Centro Clínico Sul</button>
    			<button class="btn-unidades" >Centro Clínico Advance</button>
    			<button class="btn-unidades" >Vitrium Centro Médico</button>
    			<button class="btn-unidades" >Asa Norte Edifício Dr Crispim</button>
    			<button class="btn-unidades" >Edifício Buriti</button>
    			<button class="btn-unidades" >Taguatinga</button>
    			<button class="btn-unidades" >M Norte</button>
    			<button class="btn-unidades" >Gama</button>
    		</div>    		

    		<div class="col-md-7 col-mapa">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14869.329050573284!2d-50.33824953017947!3d-21.29788353040526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949615ee674ee3d9%3A0xe469fb0352a8168!2sSuper%20Muffato%20-%20Birigui!5e0!3m2!1spt-BR!2sbr!4v1623898042742!5m2!1spt-BR!2sbr" width="100%" height="288" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    		</div>   

    	</div>
    </section>

    <section class="newsletter">
    		<div class="coluna-txt">
    			<h1>DICAS DE SAÚDE</h1>
    			<span>Receba Dicas de Saúde Atualizadas</span>
    			<input type="text" name="" placeholder="Digite seu email"><button type="button">Enviar</button>
    		</div>
    		<div class="coluna-img">
    			<img src="imagens/img-news.png">
    		</div>
    </section>

    <footer>
    	<div class="container-fluid branco">
    	<div class="container espaco">
    		<div class="footer-info">  		
    			<img src="imagens/logo.png">
    			<nav class="f-menu">
				<ul>
					<li><a href="#">Exames</a></li>
					<li><a href="#">Convênios</a></li>
					<li><a href="#">Resultado de Exames</a></li>
					<li><a href="#">Unidades</a></li>
					<li><a href="#">Cuide da sua Saúde</a></li>
					<li><a href="#">Fale Conosco</a></li>
					<li><a href="#">Materiais Gratuitos</a></li>
				</ul>
				</nav>
			</div>

			<div class="footer-menu">  		
    			<div class="footer-esq">
					<div class="f-rsociais">
						<a href="#"><div class="f-ico-fb"></div></a>
						<a href="#"><div class="f-ico-ig"></div></a>
						<a href="#"><div class="f-ico-in"></div></a>
					</div>
					<h1>CENTRAL DE ATENDIMENTO</h1>
					<p><img style="margin-right: 10px; width: 19px;" src="imagens/icon-fone.png">(61) 3326 0033 | 3771 3800</p>
					<p><img style="margin-right: 10px; width: 19px;" src="imagens/icon-wpp.png">(61) 9976-4074</p>
					<button type="button" class="btn btn-primary btn-agende">AGENDE <br/>SEU EXAME</button>
				</div>
				<div class="widgets">
				<div class="widget-um">
					<a href="#">Ecografia</a>
					<a href="#">Cintilografia</a>
					<a href="#">Densitometria Óssea</a>
					<a href="#">Mamografia e Biópsias</a>
					<a href="#">PET-CT</a>
					<a href="#">Ressonâcia Magnética</a>
					<a href="#">Tomografia Personalizada</a>
					<a href="#">Suíte Terapêutica</a>
				</div>

				<div class="widget-dois">
					<a href="#">Aviso de Privacidade Website</a>
					<a href="#">Aviso de Privacidade - Serviços de Saúde</a>
					<a href="#">Responsabilidade social</a>
					<a href="#">Corpo Clínico</a>
					<a href="#">Trabalhe Conosco</a>
				</div>

				<div class="widget-tres">
					<a href="#">Convênios</a>
					<a href="#">WEBMAIL</a>
					<a href="#">SISTEMA EPA</a>
					</div>
				</div>
			</div>
    	</div>
    	</div>
    	<div class="container espaco">
    		<h1>ENDEREÇOS</h1>
    		<div class="enderecos">
    			<div class="col-md-3">
    				<p><strong>Centro Clínico Sul</strong></p>
    					<p style="margin-bottom: 0"><i>Torre I</i></p>
						<p style="margin-top: 0">SHLS 716 conj. L, Centro Clínico Sul Torre I
						salas T121/124, Brasília- DF – CEP: 70390-700</p>
						<p style="margin-bottom: 0"><i>Torre II (Tomografia)</i></p>
						<p style="margin-top: 0">SHLS 716 conj. L, Centro Clínico Sul Torre II
						sala T223, Brasília- DF – CEP: 70390-700</p>
						<p style="margin-bottom: 0"><i>Torre II (Medicina Nuclear)</i></p>
						<p style="margin-top: 0">SHLS 716 conj. L, Centro Clínico Sul Praça da
						Saúde sala W162, Brasília- DF – CEP: 70390-700</p>
    			</div>
    			<div class="col-md-3">
    				<p><strong>Vitrium Centro Médico</strong></p>
    				<p>SGAS 915 lote 69a e 70a salas 301 e 303, Brasília- DF – CEP: 70715-900</p>
    				<p>L2 Sul SGAS Quadra 614 Conjunto C Lote 99 Salas 12 a 15, Brasília – DF CEP: 70200-730</p>
    				<p style="margin-top: 60px;"><strong>Asa Norte Edifício Dr Crispim</strong></p>
    				<p>SMHN Quadra 02 Conjunto C Sobreloja 18, Próximo ao Hospital HRAN, Brasília – DF CEP: 70710-100</p>

    			</div>
    			<div class="col-md-3">
    				<p><strong>M Norte</strong></p>
    				<p>SDE Quadra 1 conjunto A lote 2 CEP:72145-101</p>
    				<p style="margin-top: 30px"><strong>Taguatinga</strong></p>
    				<p>Centro de Excelência Anchieta, Área Especial 10, Setor C Norte loja 02. Taguatinga,DF – CEP: 72115-700</p>
    				<p style="margin-top: 30px"><strong>Edifício Buriti</strong></p>
    				<p>CLN 116, Bloco H Edifício Buriti loja 33.
Brasília- DF – CEP: 70773-580</p>
    			</div>
    			<div class="col-md-3">
    				<p><strong>Centro Clínico Advance</strong></p>
    				<p>SGAS 915 lote 69a e 70a salas 301 e 303,
Brasília- DF – CEP: 70715-900</p>
					<p style="margin-top: 30px"><strong>Gama</strong></p>
    				<p>Quadra EQ 47-49 Projeção 4,
St. Central, 2º andar, ao lado
do Hospital do Gama,
DF – CEP: 72405-499</p>

    			</div>
    		</div>
    	</div>
    	<div class="container-fluid azul">
    		<div class="container">
    			<div class="footer-bottom">
    			<div class="copyright">
    				<span>Imeb - <?php echo date("Y"); ?> | Copyright</span>
    				<span>Responsável Técnico: Alaor Barra Sobrinho - CRM-DF 3029</span>
    			</div>
    			<div class="eixo">
    				Powered By: <img src="imagens/eixo-logo.png">
    			</div>
    			</div>
    		</div>
    	</div>
    </footer>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>