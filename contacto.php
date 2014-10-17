<?php 
	$dir = $_SERVER['DOCUMENT_ROOT']."/boutique/includes/";
?>
<?php  
	require($dir."header.php");
?>


<body>


<?php  
	require($dir."menuprincipal.php");
?>



<section class="cabecera_inicio cabecera_latienda contenedor">
	<article class="cabecera_texto">
		<h1 class="h2">Contacto</h1>
	</article>
</section>
<article class="contenedor titular-seccion ">
	<h4 class="titular-destacado"><span>Mándanos un mail</span></h4>
</article>
	<section class="datosenvio form-contacto">
			<form action="">
				<ul>
					<li>
						<input name="nombre" type="text" placeholder="Nombre *" required>
					</li>
					<li><input type="text" placeholder="Apellidos *" required></li>
					<li><input type="tel" placeholder="Mail *" required></li>
					<li>
						<textarea name="" id="" cols="30" rows="10" placeholder="Escribe aquí tu mensaje"></textarea>
					</li>
				</ul>
			</form>
			<button class="btn centro">Enviar</button>
	</section>

<section class=" cont_latienda contenedor">
	
</section>

<article class="contenedor titular-seccion ">
	<h4 class="titular-destacado"><span>¿Dónde estamos?</span></h4>
</article>


<div class="contenedor latienda-datos">
	<section class="plano">
		<img src="images/plano-tienda.jpg" alt="">
	</section>

	<section class="latienda-dir">
		<article class="latienda-direcc">
			<span>Dirección</span>
			<p>	C/ Aragonés 3B <br>
				07012 Palma de Mallorca <br>
				Illes Balears - Spain
			</p>
		</article>
		<article class="latienda-horario">
			<span>Horario</span>
			<p>	Lunes a Viernes <br>
				10:00 - 14:00 / 17:00 - 20:00 <br>
				Sábados:<br>
				10:00 - 14:00</p>
		</article>
	</section>
	<section class="contactos">
			<div class="elemento"><a href="#">
					<img src="images/icono-tel-color.svg" alt="">
					<p>Llámanos</p>
				</a>
			</div>
			<div class="elemento"><a href="#">
					<img src="images/icono-sobre-color.svg" alt="">
					<p>Mándanos un mail</p>
				</a>
			</div>
			<div class="elemento"><a href="#">
					<img src="images/icono-face-color.svg" alt="">
					<p>Nuestro Facebook</p>
				</a>
			</div>
			<div class="elemento"><a href="#">
					<img src="images/icono-tuit-color.svg" alt="">
					<p>Nuestro Twitter</p>
				</a>
			</div>
			
	</section>
</div>


<script>
    jQuery(document).ready(function($) {
        $(".menu-principal-cabecera a").removeClass('activo');
        $(".contacto").addClass('activo')
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#lightGallery").lightGallery(); 
  });
</script>

<?php  
	require($dir."footer.php");
?>
