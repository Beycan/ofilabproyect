<?php include 'template/header.php' ?>
<link rel="stylesheet" href="css/tabs.css">
<section>
	<div class="container">
				<p>Fabricación, reparación, mantenimiento, calibración de equipos de laboratorio industrial</p>
				<h1>Reología</h1>
						<div class="tab">
						  <button class="tablinks2" onclick="openItem(event, 'Viscosimetro')" id="defaultOpen">Viscosimetro</button>
						  <button class="tablinks2" onclick="openItem(event, 'Rehometro')">Rehometro</button>
						</div>

						<div id="Viscosimetro" class="tabcontent">
						  <h3>Viscosimetro</h3>
						</div>

						<div id="Rehometro" class="tabcontent">
						  <h3>Rehometro</h3>
						</div>


				<h1>Isotérmicos</h1>
						<div class="tab">
							<button type="tablinks" onclick="openItem2(event, 'termometro-presion')" id="default" >Termómetro de Presión digital</button>
						 	<button type="tablinks" onclick="openItem2(event, 'termometro-mercurio')">Termómetro de mercurio</button>
						 	<button type="tablinks" onclick="openItem2(event, 'termometro-industrial')">Termómetros industriales</button>
						 	<button type="tablinks" onclick="openItem2(event, 'termocuplas')">Termocuplas</button>
						 	<button type="tablinks" onclick="openItem2(event, 'mufles')">Mufles</button>
						  <button type="tablinks" onclick="openItem2(event, 'baño-maria')">Baño María</button>

						</div>
						<div id="termometro-presion" class="tabcontent2">
								presion digital
						</div>
						<div id="termometro-mercurio" class="tabcontent2">
							mercurio
						</div>
						<div id="termometro-industrial" class="tabcontent2">
							insdustrial
						</div>
						<div class="tabcontent2" id="termocuplas">
							termocuplas
						</div>
						<div class="tabcontent2" id="mufles">
							mufles
						</div>
						<div class="tabcontent2" id="baño-maria">
							baño maria
						</div>
						<h1>Químicos</h1>
						<div class="">
						 contenido de químicos...
						</div>
						<h1>Fisicos</h1>
						<div class="">
							contenido de fisicos...
						</div>

	</div>
</section>



<script type="text/javascript" src="js/tabs.js"></script>

<?php include 'template/footer.php' ?>
