
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
					<h5>Esdras Gomes</h5>
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
					<h2>TUDO SOBRE O COVID-19</h2>
					<a href="#corona">O que é o coronavírus?</a>
					<!-- <h2>SINTOMAS</h2> -->
					<a href="#sintomas">Quais são os sintomas?</a>
					<a href="#transmissao">Como é transmitido?</a>
					<h2>DIAGNÓSTICOS</h2>
					<a href="#diagnostico-clinico">1º Diagnóstico clínico</a>
					<a href="#diagnostico-clinico-epidemiologico">2º Diagnóstico clínico-epidemiológico</a>
					<a href="#diagnostico-clinico-imagem">3º Diagnóstico clínico-imagem</a>
					<a href="#diagnostico-laboratorial">4º Diagnóstico laboratorial</a>
					<a href="#laboratorial-assintomatico">4º Diagnóstico laboratorial em assintomático</a>
					<h2>COMO SE PROTEGER</h2>
					<a href="#proteger">Formas de se protejer</a>
					<h2>LINKS ÚTEIS</h2>
					<a href="https://coronavirus.saude.gov.br/sobre-a-doenca" target="blank">Ministério da Saúde</a>
					<a href="https://vitaminasprime.com/coronavirus/" target="blank">Vitaminas Prime</a>
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
					<h2 id="corona">O QUE É O CORONAVÍRUS?</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px;">
								Os coronavírus são uma grande família de vírus comuns em muitas espécies diferentes de animais, incluindo camelos, gado, gatos e morcegos. Raramente, os coronavírus que infectam animais podem infectar pessoas, como exemplo do MERS-CoV e SARS-CoV. Recentemente, em dezembro de 2019, houve a transmissão de um novo coronavírus (SARS-CoV-2), o qual foi identificado em Wuhan na China e causou a COVID-19, sendo em seguida disseminada e transmitida pessoa a pessoa.
								<br><br>
								A COVID-19 é uma doença causada pelo coronavírus, denominado SARS-CoV-2, que apresenta um espectro clínico variando de infecções assintomáticas a quadros graves. De acordo com a Organização Mundial de Saúde, a maioria (cerca de 80%) dos pacientes com COVID-19 podem ser assintomáticos ou oligossintomáticos (poucos sintomas), e aproximadamente 20% dos casos detectados requer atendimento hospitalar por apresentarem dificuldade respiratória, dos quais aproximadamente 5% podem necessitar de suporte ventilatório.
								</p>
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

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="sintomas">Quais são os sintomas?</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px;">
								Os sintomas da COVID-19 podem variar de um resfriado, a uma Síndrome Gripal-SG (presença de um quadro respiratório agudo, caracterizado por, pelo menos dois dos seguintes sintomas: sensação febril ou febre associada a dor de garganta, dor de cabeça, tosse, coriza) até uma pneumonia severa. Sendo os sintomas mais comuns:<br>
								<div>
									
									<ul style="text-align: left; color: #eee; margin-left: 80px;">
										• Tosse<br>
										• Febre<br>
										• Coriza<br>
										• Dor de garganta<br>
										• Dificuldade para respirar<br>
										• Perda de olfato (anosmia)<br>
										• Alteração do paladar (ageusia)<br>
										• Distúrbios gastrintestinais (náuseas/vômitos/diarreia)<br>
										• Cansaço (astenia)<br>
										• Diminuição do apetite (hiporexia)<br>
										• Dispnéia ( falta de ar)
									</ul>
								</p>
								
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
			</div><!-- corona-card -->

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="transmissao">Como é transmitido?</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px;">
								A transmissão acontece de uma pessoa doente para outra ou por contato próximo por meio de:
								</p><br>
							<div>
									<ul style="text-align: left; color: #eee; margin-left: 80px;">
										• Toque do aperto de mão contaminadas;<br>
										• Gotículas de saliva;<br>
										• Espirro;<br>
										• Tosse;<br>
										• Catarro;<br>
										• Objetos ou superfícies contaminadas, como celulares, mesas, talheres, maçanetas, brinquedos, teclados de computador etc.
									</ul>
								
								
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
			</div><!-- corona-card -->

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="diagnostico-clinico">Diagnóstico clínico</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px;">
								A transmissão acontece de uma pessoa doente para outra ou por contato próximo por meio de:<br><br>

								O DIAGNÓSTICO CLÍNICO é realizado pelo médico atendente, que deve avaliar a possibilidade da doença, principalmente, em pacientes com a associação dos seguintes sinais e sintomas:<br><br>

								• Febre, que pode estar presente no momento do exame clínico ou referida pelo paciente (sensação febril) de ocorrência recente.<br>
								• Sintomas do trato respiratório (por exemplo, tosse, dispneia, coriza, dor de garganta)<br>
								• Outros sintomas consistentes incluindo, mialgias, distúrbios gastrointestinais (diarreia/náuseas/vômitos), perda ou diminuição do olfato (anosmia) ou perda ou diminuição do paladar (ageusia).
								</p>
							<div>
							
								
							<p style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px;">
								Em crianças, além dos itens anteriores, considera-se também a obstrução nasal, a desidratação e a  falta de apetite (inapetência), na ausência de outro diagnóstico específico.
								Em idosos, deve-se considerar também, critérios específicos de agravamento como: síncope (desmaio ou perda temporária de consciência), confusão mental, sonolência excessiva, irritabilidade e falta de apetite (inapetência).
								O diagnóstico clínico da doença, também deve ser considerado em pacientes com doença grave do trato respiratório inferior sem causa clara, como é o caso de pacientes que se apresentem em Síndrome Respiratória Aguda Grave (SRAG). Nesta síndrome o indivíduo apresenta-se em franca dispneia/desconforto respiratório/dificuldade para respirar com saturação de oxigênio (O2) menor do que 95% em ar ambiente ou coloração azulada dos lábios ou rosto (cianose) ou queixa de pressão persistente no tórax.
								Em crianças, a SRAG apresenta-se com os sinais e sintomas anteriores, devendo ser observados sinais característicos de esforço respiratório, tais como,  os batimentos de asa de nariz, tiragem intercostal, e, por fim, alteração na coloração das extremidades que ficam azuladas (cianose).
							</p>
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
			</div><!-- corona-card -->

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="diagnostico-clinico-epidemiologico">DIAGNÓSTICO CLÍNICO-EPIDEMIOLÓGICO</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px;">
								O <span>DIAGNÓSTICO CLÍNICO-EPIDEMIOLÓGICO</span> é realizado pelo médico atendente no qual considera-se:<br><br>

								• Casos de paciente com a associação dos sinais e sintomas supracitados ou SRAG MAIS histórico de contato próximo ou domiciliar, nos últimos 14 dias antes do aparecimento dos sintomas, com caso confirmado laboratorialmente para COVID-19 e para o qual não foi possível realizar a investigação laboratorial específica.</p>
							<div>
						</div>
					</div>
				</div>
			</div><!-- corona-card -->

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="diagnostico-clinico-imagem">DIAGNÓSTICO CLÍNICO-IMAGEM</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 40px 0; margin-left: 40px;">
								• caso de sintomas respiratório mais febre ou SRAG ou óbito por SRAG que não foi possível confirmar ou descartar por critério laboratorial E que apresente alterações tomográficas.</p>
							<div>
						</div>
					</div>
				</div>
			</div><!-- corona-card -->

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="diagnostico-laboratorial">DIAGNÓSTICO LABORATORIAL</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px 0; margin-left: 40px;">
								Caso o paciente apresente os sintomas respiratórios mais febre ou SRAG. O profissional de saúde poderá solicitar os seguintes exames laboratoriais:<br><br>

								• De biologia molecular, (RT-PCR em tempo real) que diagnostica tanto a COVID-19, a Influenza ou a presença de Vírus Sincicial Respiratório (VSR) normalmente até o oitavo dia de início de sintomas.<br>
								• Imunológico, que detecta, ou não, a presença de anticorpos em amostras coletadas a partir do oitavo dia de início dos sintomas. Sendo eles:<br>
								• Ensaio imunoenzimático (Enzyme-Linked Immunosorbent Assay - ELISA);<br>
								• Imunocromatografia (teste rápido) para detecção de anticorpos;<br>
								• Imunoensaio por Eletroquimioluminescência (ECLIA).<br>
								• Pesquisa de antígenos: resultado reagente para SARS-CoV-2 pelo método de Imunocromatografia para detecção de antígeno.<br></p>
							<div>
						</div>
					</div>
				</div>
			</div><!-- corona-card -->

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="laboratorial-assintomatico">DIAGNÓSTICO LABORATORIAL EM INDIVÍDUO ASSINTOMÁTICO<h> (pessoa sem sintomas) que realizou:</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px 0; margin-left: 40px;">
								• Exame de Biologia Molecular com resultado DETECTÁVEL para SARS-CoV-2 realizado pelo método RT-PCR em tempo real.<br>
								• Exame de Imunológico com resultado REAGENTE para IgM e/ou IgA realizado pelos seguintes métodos:  Ensaio imunoenzimático (ELISA) e Imunocromatografia (teste rápido) para detecção de anticorpos.<br></p>
							<div>
						</div>
					</div>
				</div>
			</div><!-- corona-card -->

			<div id="sobre" class="corona-card">
				<div class="corona-header">
					<h2 id="proteger">COMO SE PROTEGER</h2>
				</div>
				<div class="corona-body">
					<div class="classcorona-featured-1">
						<div class="row-corona">
							<div class="col-corona-12">
								<p class="corona-dangerous" style="text-align:justify; padding:0 50px; color: #eee !important; margin: 30px 0; margin-left: 40px;">
								As recomendações de prevenção à COVID-19 são as seguintes:<br><br>
								• Lave com frequência as mãos até a altura dos punhos, com água e sabão, ou então higienize com álcool em gel 70%. Essa frequência deve ser ampliada quando estiver em algum ambiente público (ambientes de trabalho, prédios e instalações comerciais, etc), quando utilizar estrutura de transporte público ou tocar superfícies e objetos de uso compartilhado.<br>
								• Ao tossir ou espirrar, cubra nariz e boca com lenço ou com a parte interna do cotovelo.<br>
								• Não tocar olhos, nariz, boca ou a máscara de proteção fácil com as mãos não higienizadas.<br>
								• Se tocar olhos, nariz, boca ou a máscara, higienize sempre as mãos como já indicado.<br>
								• Mantenha distância mínima de 1 (um) metro entre pessoas em lugares públicos e de convívio social. Evite abraços, beijos e apertos de mãos. Adote um comportamento amigável sem contato físico, mas sempre com um sorriso no rosto.<br>
								• Higienize com frequência o celular, brinquedos das crianças e outro objetos que são utilizados com frequência.<br>
								• Não compartilhe objetos de uso pessoal como talheres, toalhas, pratos e copos.<br>
								• Mantenha os ambientes limpos e bem ventilados.<br>
								• Evite circulação desnecessária nas ruas, estádios, teatros, shoppings, shows, cinemas e igrejas.<br>
								• Se estiver doente, evite contato próximo com outras pessoas, principalmente idosos e doentes crônicos, busque orientação pelos canais on-line disponibilizados pelo SUS ou atendimento nos serviços de saúde e siga as recomendações do profissional de saúde.<br>
								• Durma bem e tenha uma alimentação saudável.<br>
								• Recomenda-se a utilização de máscaras em todos os ambientes.  As máscaras de tecido (caseiras/artesanais), não são Equipamentos de Proteção Individual (EPI), mas podem funcionar como uma barreira física, em especial contra a saída de gotículas potencialmente contaminadas.<br></p>
							<div>
						</div>
					</div>
				</div>
			</div><!-- corona-card -->

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