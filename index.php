<?php 
	$dir = $_SERVER['DOCUMENT_ROOT']."/boutique/includes/";
?>
<?php  
	require($dir."header.php");
?>


<body>


<header class="cabecera_pagina">
	<section class="zona-cliente">
		<div class="int contenedor">
			<nav>
				<ul class="nav--fit">
					<div class="grupo_uno">
						<li><a href="javascript:void(0)">¿Tienes cuenta?</a></li>
						<li><a class="tucesta__link" href="javascript:void(0)">tu cesta (0)</a></li>
					</div>
					<div class="grupo_dos">
						<li><a href="javascript:void(0)">ESP</a></li>
						<li><a href="javascript:void(0)">ENG</a></li>
					</div>
				</ul>
			</nav>
		</div>
	</section>
	<section class="menu-principal">
		<div class="int contenedor">
			<section class="logo_principal">
				<a href="index.html"><img src="images/logo_boutique_header.svg" alt="ir a inicio" title="ir a inicio"></a>
			</section>
			<section class="menu-principal-cabecera">
				<nav >
					<ul class="nav">
						<li><a href="javascript:void(0)">INICIO</a></li>
						<li><a href="javascript:void(0)">PRODUCTOS</a></li>
						<li><a href="javascript:void(0)">LA TIENDA</a></li>
						<li><a href="javascript:void(0)">CONTACTO</a></li>
						<li><a href="javascript:void(0)">NOTICIAS</a></li>
						<li>
							<ul>
								<li class="iconos">
									<a href=""><img src="images/icono-tel.svg" alt="icono telefono" title="llamar por teléfono"></a>
									<a href=""><img src="images/icono-sobre.svg" alt="enviar un mail" title="enviar mail"> </a>
									<a href=""><img src="images/icono-face.svg" alt="ira a facebook" title="ir a facebook"></a>
									<a href=""><img src="images/icono-tuit.svg" alt="ira a twitter" title="ir a twitter"></a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</section>
		</div>
	</section>
</header>

<section class="cabecera_inicio">
	<article class="cabecera_texto">
		<h2>En la Boutique del Té</h2>
		<h3>somos especialistas en un solo producto:
			Té de alta calidad de todos los rincones del mundo
		</h3>
	</article>
</section>




<?php  
	require($dir."footer.php");
?>
