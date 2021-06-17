<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/style-exames.css">
<link rel="stylesheet" type="text/css" href="css/style-content-blog.css">
<link rel="stylesheet" type="text/css" href="css/style-newsletter.css">
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
</script>
</head>
<body>
	<div class="container">
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

<section class="conteudo-blog-m">
        <h2>CONTEÚDOS DA SAÚDE</h2>
        <div class="container">
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


        <div class="container">
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

        <div class="container">
            <div class="cards-conteudo">
                <div class="card-conteudo-video">
                    <iframe width="545" height="250" src="https://www.youtube.com/embed/P8A2iXI2JdM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="card-conteudo-video">
                    <iframe width="545" height="250" src="https://www.youtube.com/embed/P8A2iXI2JdM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

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