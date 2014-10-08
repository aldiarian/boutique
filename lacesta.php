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

<section class="titular titu-cesta">
	<h1 class="h2">Tu Cesta</h1>
</section>

<section class="lacesta contenedor-2">
	
	<table class="tabla-lacesta">
	<thead>
		<tr>
			<th >Producto</th>
			<th>Precio unid.</th>
			<th>Unidades</th>
			<th>TOTAL</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="objeto">James nombre muy largo muy muy muy largo</td>
			<td>5 €</td>
			<td class="unidades">
				 <input type="number" min="0" max="99" placeholder="0">
			</td>
			<td>30,00 €</td>
			<td>
				<img class="icono-borrar" src="../images/borrar.svg" alt="borrar producto" title="borrar producto">
			</td>
		</tr>
		<tr>
			<td class="objeto">James nombre </td>
			<td>5 €</td>
			<td class="unidades">
				 <input type="number" min="0" max="99" placeholder="0">
			</td>
			<td>30,00 €</td>
			<td>
				<img class="icono-borrar" src="../images/borrar.svg" alt="borrar producto" title="borrar producto">
			</td>
		</tr>
		<tr>
			<td class="objeto">James nombre muy largo </td>
			<td>5 €</td>
			<td class="unidades">
				 <input type="number" min="0" max="99" placeholder="0">
			</td>
			<td>30,00 €</td>
			<td>
				<img class="icono-borrar" src="../images/borrar.svg" alt="borrar producto" title="borrar producto">
			</td>
		</tr>




	</tbody>
	</table>


</section>




<?php  
	require($dir."footer.php");
?>
