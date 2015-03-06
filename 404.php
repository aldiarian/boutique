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

<section class="error404">
	<h2>Uppsss!!</h2>
	<h1>Error 404</h1>
	<h4>No hemos encontrado la página que solicita. <br>
		Bueno, no pasa nada...<br>
		<a href="">volvamos atrás</a>
	</h4>
	<img src="images/404boutiquedelte.png" alt="">
</section>




<?php  
	require($dir."footer.php");
?>
