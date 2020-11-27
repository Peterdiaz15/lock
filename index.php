<!DOCTYPE html>
<html>

<head>
	<title>Lockton</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css?v=<?=time();?>">
	<link rel="stylesheet" type="text/css" href="css/index.css?v=<?=time();?>">
</head>

<body>
	<div class="container-fluid">

		<div class="d-flex justify-content-end">
			<figure>
				<a href="index.php"><img src="img/logo-lockton.png" height="100px"></a>
			</figure>
		</div>



		<div id="small-line">
		</div>

		<div class="d-flex justify-content-start align-items-center" id="header-line">
			<div class="p-2"></div>
			<div class="p-3"><a href="carrito/index.php"><img class="resize" src="img/shopping-kart-icon.png" style="width:2em; height:2em;"></a>
			</div>
			<div class="p-3">
				<h4 style="color:aliceblue">0</h4>
			</div>
		</div>


		<div class="row">
			<div class="col-12">
				<img src="img/BANNER-1920X500-HOME.png" id="banner" />
			</div>
		</div>

		<div class="row" id="planes">
			<div class="col-12" id="texto1" style="padding-top: 50px; padding-bottom: 50px" style="padding-bottom: 50px">
				<h4>Bienvenido al sitio de Programas y beneficios adicionales, conoce las opciones que tenemos para ti.</h4>
			</div>
		</div>

		<div class="align-content-lg-center" style="display: flex; background: #6f6b6d">
			<div class="flex-row" id="servicios">

				<div class="flex-flex-column justify-content-center">
					<div style="flex-direction: column">
						<h6 id="textoh6" style="margin-top: 25px">PROGRAMAS</h6>
						<div id="small-line" style="width: 200px; margin-bottom: 15px"></div>
					</div>
				</div>

				<p></p>
				<p></p>
				<p></p>

				<div class="flex-flex-column justify-content-center">
					<figure>
						<a href="../escudomayorese/index.php"><img style="width: 250px; height: 250px; margin: 20px" src="img/circulo-gastos-medicos-mayores.png"></a>
						<figcaption id="tituloServicios">Escudo Gastos Médicos <br> Excesos Voluntarios</figcaption>
					</figure>
					<figure>
						<a href="../escudomayoresb/index.php"><img style="width: 250px; height: 250px; margin: 20px" src="img/Gastos-medicos-basicos.png"></a>
						<figcaption id="tituloServicios">Escudo Gastos Médicos <br> Básicos LALA</figcaption>
					</figure>
					<figure>
						<a href="../escudov2/index.php"><img style="width: 250px; height: 250px; margin: 20px" src="img/covid-y+.png"></a>
						<figcaption id="tituloServicios">Escudo COVID Y +</figcaption>
					</figure>
					<figure>
						<a href="../bolso/index.php"><img style="width: 250px; height: 250px; margin: 20px" src="img/Escudo-digital.png"></a>
						<figcaption id="tituloServicios">Escudo Digital Y +</figcaption>
					</figure>
				</div>

				<div class="flex-flex-column justify-content-center" style="margin-bottom: 25px">
					<figure>
						<a href="../escudomembresia/index.php"><img style="width: 250px; height: 250px; margin: 20px" src="img/escudo-membresia.png"></a>
						<figcaption id="tituloServicios">Escudo Membresía</figcaption>
					</figure>
					<figure>
						<a href="../escudoAsistenciaF/index.php"><img style="width: 250px; height: 250px; margin: 20px" src="img/Asistencia-funeraria.png"></a>
						<figcaption id="tituloServicios">Escudo Asistencia Funeraria</figcaption>
					</figure>
					<figure>
						<a href="../escudoDental/index.php"><img style="width: 250px; height: 250px; margin: 20px" src="img/dentista.png"></a>
						<figcaption id="tituloServicios">Escudo Dental</figcaption>
					</figure>
				</div>


				<!-- <div class="col-12" id="linea"> -->
				<div></div>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>