<!DOCTYPE html>
<html>

<head>
	<title>Lockton</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/generales.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
	<div class="container-fluid">
		<?php 
		include 'php/menu.php';
		?>
		<div class="row">
			<div class="col-12">
				<img src="img/BANNER-1920X500-HOME.png" width="100%">
			</div>
		</div>
		<div class="row">
			<div class="col-12 display-flex" id="texto">
				<h6 class="margin-auto">Bienvenido al sitio de Programas y beneficios adicionales, conoce las opciones que tenemos para ti.</h6>
			</div>
		</div>
		<div class="row" id="programas">
			<div class="col-12 display-flex" id="titulo">
				<h6 class="margin-auto">Programas</h6>
			</div>
			<div class="col-12 display-flex">
				<div class="row margin-auto espacio" id="lista-servicio">
					<div class="col-sm-6 col-lg-3 row" id="servicio">
						<div class="col-12 display-flex">
							<a href="mayores/index.php" class="margin-auto"><img src="img/circulo-gastos-medicos-mayores.png" height="200px"></a>
						</div>
						<div class="col-12">
							<p class="texto-centrado">Escudo Gastos Médicos<br>Excesos Voluntarios </p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 row" id="servicio">
						<div class="col-12 display-flex">
							<a href="basico/index.php" class="margin-auto"><img src="img/Gastos-medicos-basicos.png" height="200px"></a>
						</div>
						<div class="col-12">
							<p class="texto-centrado">Escudo Gastos Médicos<br>Básicos Lala</p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 row" id="servicio">
						<div class="col-12 display-flex">
							<a href="https://www.beaffinitylm.com/escudo_covid/index.php?ent=undefined" class="margin-auto"><img src="img/COVID-Y+.png" height="200px"></a>
						</div>
						<div class="col-12">
							<p class="texto-centrado">Escudo Covid Y+</p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 row" id="servicio">
						<div class="col-12 display-flex">
							<a href="https://www.beaffinitylm.com/escudo_digital/index.php" class="margin-auto"><img src="img/Escudo-digital.png" height="200px"></a>
						</div>
						<div class="col-12">
							<p class="texto-centrado">Escudo Digital Y+</p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 row" id="servicio">
						<div class="col-12 display-flex">
							<a href="membresia/index.php" class="margin-auto"><img src="img/escudo-membresia.png" height="200px"></a>
						</div>
						<div class="col-12">
							<p class="texto-centrado">Escudo Membresía</p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 row" id="servicio">
						<div class="col-12 display-flex">
							<a href="funeraria/index.php" class="margin-auto"><img src="img/Asistencia-funeraria.png" height="200px"></a>
						</div>
						<div class="col-12">
							<p class="texto-centrado">Escudo Asistencia Funeraria</p>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4 row" id="servicio">
						<div class="col-12 display-flex">
							<a href="Dental/index.php" class="margin-auto"><img src="img/dentista.png" height="200px"></a>
						</div>
						<div class="col-12">
							<p class="texto-centrado">Escudo Dental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		include 'php/footer.php';
		?>
	</div>


	<!-- scripts -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>