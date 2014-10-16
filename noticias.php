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

<section class="titular titu-noticias">
	<h1 class="h2">Noticias</h1>
</section>

<section class="contenido-noticias contenedor-big">
	<section class="caja-noticias">
		<article class="noticia-pq">
			<a href="lanoticia.php">
				<p class="fecha">24 Enero 2014</p>
				<h2 class="noti-titulo"> Título de la noticia</h2>
				<img src="http://lorempixel.com/600/350/" alt="">
				<section class="texto-noti-pq">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eveniet nihil fuga quod vel! Asperiores assumenda mollitia sunt dolorem, facere voluptate, repellendus ullam illo delectus, placeat rem ipsam non laudantium.
					</p>
					<a href="lanoticia.php" class="leermas ">Leer más ></a>
			</a>
			</section>
		</article>
		<article class="noticia-pq">
			<a href="lanoticia.php">
				<p class="fecha">24 Enero 2014</p>
				<h2 class="noti-titulo"> Título de la noticia</h2>
				<img src="http://lorempixel.com/600/350/" alt="">
				<section class="texto-noti-pq">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eveniet nihil fuga quod vel! Asperiores assumenda mollitia sunt dolorem, facere voluptate, repellendus ullam illo delectus, placeat rem ipsam non laudantium.
					</p>
					<a href="lanoticia.php" class="leermas ">Leer más ></a>
			</a>
			</section>
		</article>
		<article class="noticia-pq">
			<a href="lanoticia.php">
				<p class="fecha">24 Enero 2014</p>
				<h2 class="noti-titulo"> Título de la noticia</h2>
				<img src="http://lorempixel.com/600/350/" alt="">
				<section class="texto-noti-pq">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eveniet nihil fuga quod vel! Asperiores assumenda mollitia sunt dolorem, facere voluptate, repellendus ullam illo delectus, placeat rem ipsam non laudantium.
					</p>
					<a href="lanoticia.php" class="leermas ">Leer más ></a>
			</a>
			</section>
		</article>

	</section>
	<section class="side-noticias">
		<h4>ARCHIVO</h4>
		<ul>
			<li><a href="">Enero 2014</a></li>
			<li><a href="">Febrero 2014</a></li>
			<li><a href="">Marzo 2014</a></li>
			<li><a href="">Abril 2014</a></li>
			<li><a href="">Mayo 2014</a></li>
		</ul>
		<h4>Noticias</h4>
		<ul>
			<li><a href="">Título uno</a></li>
			<li><a href="">Título dos</a></li>
			<li><a href="">Título tres</a></li>
			<li><a href="">Título cuatro</a></li>
			
		</ul>
	</section>
</section>


<script>
    jQuery(document).ready(function($) {
        $(".menu-principal-cabecera a").removeClass('activo');
        $(".noticias").addClass('activo')
    });
</script>


<?php  
	require($dir."footer.php");
?>
