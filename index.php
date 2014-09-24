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



<section class="cabecera_inicio">
	<article class="cabecera_texto">
		<h2>En la Boutique del Té</h2>
		<h3>somos especialistas en un solo producto:
			Té de alta calidad de todos los rincones del mundo
		</h3>
	</article>
</section>

<article class="contenedor titular-seccion ">
	<h3><span>Productos destacados</span></h3>
</article>

<section class="destacados contenedor">

	<article class="producto-destacado">
		<a href="" title="ver producto">
			<img src="http://lorempixel.com/280/160/" alt="">
			<div class="texto-desta">
				<h3>Producto destacado</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus voluptatibus, dicta mollitia exercitationem sequi,  </p>
			</div>
		</a>
	</article>
	<article class="producto-destacado">
		<a href="" title="ver producto">
			<img src="http://lorempixel.com/280/160/" alt="">
			<div class="texto-desta">
				<h3>Producto destacado</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </p>
			</div>
		</a>
	</article>
	<article class="producto-destacado">
		<a href="" title="ver producto">
			<img src="http://lorempixel.com/280/160/" alt="">
			<div class="texto-desta">
				<h3>Producto destacado</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </p>
			</div>
		</a>
	</article>


</section>


<article class="contenedor titular-seccion ">
	<h3><span>Últimas noticias</span></h3>
</article>

<section class="ultimas-noticias contenedor">
	<article class="ultimanoti">
		<a href="" title="ver noticia">
			<img src="http://lorempixel.com/280/160/" alt="">
			<div class="texto-desta">
				<h3>Última noticia</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus voluptatibus, dicta mollitia exercitationem ss. </p>
			</div>
		</a>
	</article>
	<article class="ultimanoti">
		<a href="" title="ver noticia">
			<img src="http://lorempixel.com/280/160/" alt="">
			<div class="texto-desta">
				<h3>Última noticia</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus voluptatibus, dicta mollitia exercitationem ss. </p>
			</div>
		</a>
	</article>
</section>






<?php  
	require($dir."footer.php");
?>
