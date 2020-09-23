
<!DOCTYPE html>
<html>
	<head>
		<title>Painel de Controle</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link href="estilo/all.min.css" rel="stylesheet"> -->
		<script src="https://kit.fontawesome.com/327cdc9af2.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		
	</head>
	<body>
		
		<div class="menu">
			<div class="menu-wraper">
				<div class="box-usuario">
					<!-- <div class="avatar-usuario">
						<i class="fa fa-user"></i>
					</div>avatar-usuario -->
					<!-- <div class="imagem-usuario">
						<img src="imagens/perfil.jpg"/> -->
					<!-- </div> -->
				<div class="nome-usuario">
					<h6>Esdras Gomes</h6>
					<p>Administrador</p>
				</div><!--nome-usuario-->
				</div><!--box-usuario-->
				<div class="itens-menu">
					<h2>BRASIL</h2>
					<a href="">Casos</a>
					<a href="">Gráfico</a>
					<h2>MUNDO</h2>
					<a href="">Casos</a>
					<a href="">Casos por País</a>
					<a href="">Gráfico</a>
					<h2>O QUE É COVID-19?</h2>
					<a href="#sobre">Tudo sobre Covid-19</a>
					<h2>SINTOMAS</h2>
					<a href="">Sintomas Graves</a>
					<a href="">Todos os Sintomas</a>
					<h2>COMO PREVENIR</h2>
					<a href="">Formas de Prevenção</a>
					<a href="">Tratamento</a>
				</div><!--itens-menu-->
			</div><!--menu-wraper-->
		</div><!--menu-->

		<header>
			<div class="center">
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div><!--menu-btn-->
				
			<div class="loggout">
				<a href=""> <i class="fa fa-home"></i> <span>Página Inicial</span></a>
				<a href=""><i class="fas fa-sign-out-alt"> </i><span>Sair</span></a>
			</div><!--loggout-->

				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</header>

		<div class="content">

		
			<div class="topo">
				<H1>COVID-19</H1>
			</div>

			<div id="coronavirus-container"></div>


			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2>O QUE É O CORONAVÍRUS?</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin-top: 20px;">
								Os coronavírus são uma grande família de vírus comuns em muitas espécies diferentes de animais, incluindo camelos, gado, gatos e morcegos. Raramente, os coronavírus que infectam animais podem infectar pessoas, como exemplo do MERS-CoV e SARS-CoV. Recentemente, em dezembro de 2019, houve a transmissão de um novo coronavírus (SARS-CoV-2), o qual foi identificado em Wuhan na China e causou a COVID-19, sendo em seguida disseminada e transmitida pessoa a pessoa.
								<br><br>
								A COVID-19 é uma doença causada pelo coronavírus, denominado SARS-CoV-2, que apresenta um espectro clínico variando de infecções assintomáticas a quadros graves. De acordo com a Organização Mundial de Saúde, a maioria (cerca de 80%) dos pacientes com COVID-19 podem ser assintomáticos ou oligossintomáticos (poucos sintomas), e aproximadamente 20% dos casos detectados requer atendimento hospitalar por apresentarem dificuldade respiratória, dos quais aproximadamente 5% podem necessitar de suporte ventilatório.
								</p>
								<h3>
									texto 2
								</h3>
							</div>
							<!-- <div class="col-corona-6">
								<p class="corona-dangerous">
									texto
								</p>
								<h3>
									texto 2
								</h3>
							</div> -->
						</div>
					</div>
				</div>
			</div>

        

		</div><!--content-->

		
		<script src="https://vitaminasprime.com/statistics/share/corona?container=coronavirus-container&country=BR&show_global=1&show_country=1&show_list=1&show_open_street=1"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<!-- <script  src="https://code.jquery.com/jquery-migrate-3.1.0.js"></script> -->
		<script src="../js/main.js"></script>
		<!-- <script src="js/main.js"></script> -->

	</body>
</html>