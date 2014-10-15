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
		<h2>La Tienda</h2>
	</article>
</section>
<article class="contenedor titular-seccion ">
	<h3><span>Un poquito de historia</span></h3>
</article>

<section class=" cont_latienda contenedor">
	<section class="latienda_texto">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quidem quisquam eaque perspiciatis tempora eum, atque ipsam repellat laborum natus porro eveniet similique repellendus ea sint quasi facilis, saepe ducimus.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit eaque consectetur, placeat laudantium tenetur recusandae. Architecto minima, optio, animi consequatur fugit modi ipsam, cum mollitia inventore aperiam ea. Sed, ipsam. </p>	
	</section>
	<section class="latienda_galeria">
		<ul id="lightGallery" class="galeria_latienda">
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/250/185/">
				<a href="#">
					<img src="http://lorempixel.com/250/185/" alt="">
				</a>
			</li>
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/250/185/">
				<a href="#">
					<img src="http://lorempixel.com/250/185/" alt="">
				</a>
			</li>
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/250/185/">
				<a href="#">
					<img src="http://lorempixel.com/250/185/" alt="">
				</a>
			</li>
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/250/185/">
				<a href="#">
					<img src="http://lorempixel.com/250/185/" alt="">
				</a>
			</li>
			
		</ul>
	</section>
</section>

<article class="contenedor titular-seccion ">
	<h3><span>¿Dónde estamos?</span></h3>
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
        $(".latienda").addClass('activo')
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
