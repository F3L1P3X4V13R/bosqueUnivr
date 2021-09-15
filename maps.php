<!doctype html>
<html>

	<head>
		<title>Projeto HAR</title>
		<link href="css/maps.css" type="text/css" rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css"/>
		<script type="text/javascript" src="js/rota.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Saira+Extra+Condensed:wght@400;500;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

		<meta charset="utf-8" />
	</head>

	<body>

	<div class="header">
		<div class="center">
			<img src="images/UNIVR.png" width="145px" height="50px" onclick="main()" />
		</div><!--center-->
	</div><!--header-->


	<!----------------------------------MAPA---------------------------------------->

	<div class="container-banner">
		<div class="center">
			<div id="wrap">
				<iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.325497497985!2d-47.84551998518365!3d-24.508816903144776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5337d0c91931d%3A0xee64c852c3e1ce20!2sBosque%20Municipal%20Torazo%20Okamoto!5e0!3m2!1spt-BR!2sbr!4v1631044918619!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div><!--wrap-->
			<div class="clear"></div>
		</div><!--center-->
	</div><!--container-banner-->

	<!--------------------------------PRIMEIRO CONTAINER---------------------------->

	<div class="container-2">
		<div class="center">
			<h2>Sobre</h2>
			<p>Em 2019 se inicia uma nova fase do Bosque Municipal “Torazo Okamoto”, com gerenciamento da Secretaria Municipal de Cultura, Turismo e Economia Criativa, em parceria com a Secretaria Municipal de Desenvolvimento Agrário e Meio Ambiente que garantirá a manutenção e o bom funcionamento do espaço público e, assim, possibilitando a abertura para visitação, além de ações conjuntas com instituições de todo Vale do Ribeira.</p>
		</div><!--center-->
		<div class="arrow"></div>
	</div><!--container-2-->

	<!-------------------------------SECTION DE INFORMAÇÃO DO BOSQUE------------------------------>

	<div class="section-1">
		<div class="center">
		<h2 class="h2">Informações gerais</h2>		
			<div class="container-section">

				<div class="container-single">
					<div><img src="images/svg/trees.svg" width="80px" height="80px"/></div>
					<div class="text-container-single">
						<h2>Informação bosque 1</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
						<div class="button-p1">
							<input type="submit" name="acao" value="Saiba mais" onclick="">
						</div><!--button-p1-->
					</div><!--text-container-single-->
					
				</div><!--container--single-->

				<div class="container-single">
					<div><img src="images/svg/trees.svg" width="80px" height="80px"/></div>
					<div class="text-container-single">
						<h2>Informação bosque 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>

						<div class="button-p2">
						<input type="submit" name="acao" value="Saiba mais" onclick="">
					</div><!--button-p2-->
					</div><!--text-container-single-->
					
				</div><!--container--single-->

				<div class="container-single">
					<div><img src="images/svg/trees.svg" width="80px" height="80px"/></div>
					<div class="text-container-single">
						<h2>Informação bosque 3</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
						<div class="button-p3">
						<input type="submit" name="acao" value="Saiba mais" onclick="">
					</div><!--button-p3-->
					</div><!--text-container-single-->					
				</div><!--container--single-->

				<div class="clear"></div>

			</div><!--container-section-->
		</div><!--center-->
	</div><!--section-1-->

	<!----------------------------------FOOTER---------------------------------------->

	<div class="footer">

		<a href="https://portal.unisepe.com.br/univr/">Bairro: Jardim das Palmeiras Rua: Oscar Yoshiaki Magário, nº 185. Registro - São Paulo</a>
	</div><!--footer-->

	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX4uTzEKaF0QqV5rmlGIQxmsXQQ0ardfo&callback=initMap">
    </script>

	</body>
</html>