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
	</section>
	<section class="latienda_galeria">
		<ul id="lightGallery" class="galeria_latienda">
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/200/135/">
				<a href="#">
					<img src="http://lorempixel.com/200/135/" alt="">
				</a>
			</li>
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/200/135/">
				<a href="#">
					<img src="http://lorempixel.com/200/135/" alt="">
				</a>
			</li>
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/200/135/">
				<a href="#">
					<img src="http://lorempixel.com/200/135/" alt="">
				</a>
			</li>
			<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/200/135/">
				<a href="#">
					<img src="http://lorempixel.com/200/135/" alt="">
				</a>
			</li>		<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/200/135/">
				<a href="#">
					<img src="http://lorempixel.com/200/135/" alt="">
				</a>
			</li>		<li data-src="http://lorempixel.com/800/450/" data-responsive-src="http://lorempixel.com/200/135/">
				<a href="#">
					<img src="http://lorempixel.com/200/135/" alt="">
				</a>
			</li>
			
		</ul>
	</section>
</section>

<script type="text/javascript">
  $(document).ready(function() {
    $("#lightGallery").lightGallery(); 
  });
</script>

<?php  
	require($dir."footer.php");
?>
