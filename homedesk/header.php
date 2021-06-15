<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
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
</script>
</head>
<body>
	<div class="container">
		<div class="row top-bar">
			<div class="col-md-6 top-left">
				<img src="imagens/logo.png" />
				<div class="tab-climed">
					<ul>
						<li><a href="#">Cliente</a></li>
						<li><a href="#">Médico</a></li>
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
			<nav class="menu">
				<ul>
					<li><a href="#">Convênios</a></li>
					<li><a href="#">Resultado de Exames</a></li>
					<li><a href="#">Unidades</a></li>
					<li><a href="#">Cuide da sua Saúde</a></li>
					<li><a href="#">Fale Conosco</a></li>
					<li><a href="#">Materiais Gratuitos</a></li>
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
		<h1>EXAMES</h1>
		<div class="col-sm-6 img-exames">
			<img src="imagens/exames/ecografia.png" />
			<img src="imagens/exames/densitometria.png"  />
			<img src="imagens/exames/pet.png"  />
		</div>
		<div class="col-sm-6 img-exames">
			<img src="imagens/exames/cintilografia.png"  />
			<img src="imagens/exames/mamografia.png"  />
			<img src="imagens/exames/res-magnetica.png"  />
		</div>
		<br/>
	</div>
</section>