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

<section class="elproducto-seccion contenedor">
    <article class="elproducto-texto">
        <h1>El nombre del producto</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem praesentium dolorum nemo distinctio aliquam quae! Laborum eligendi, ex doloribus, porro aliquid consectetur blanditiis similique, ducimus magnam, reprehenderit unde voluptas explicabo.
        </p>
    </article>
    <img src="images/foto-te.jpg" alt="foto producto" title="foto producto">
    <ul class="caracteristicas">
        <li class="canti">Cantidad de té por taza: 100 gr</li>
        <li class="tempe">Temperatura del agua: 00 c</li>
        <li class="tiempo">Tiempo de infusión: 10 min</li>
        <li class="cafeina">Cafeína: <img src="images/cafeina.png" alt=""></li>
    </ul>
</section>


<?php  
	require($dir."footer.php");
?>
