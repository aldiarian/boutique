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

<section class="lacesta contenedor-3">
	<section>
		<h5 class="titular-lacesta">Comprueba los productos de tu cesta</h5>
		<table class="tabla-lacesta">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Formato</th>
				<th>Precio unid.</th>
				<th>Unidades</th>
				<th>TOTAL</th>
				<th>Borrar</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td >James nombre muy largo muy muy muy largo</td>
				<td class="tipo-formato  selector">
						<select class="selector-opciones">
						  <option value="volvo">James</option>
						  <option value="saab">Saab</option>
						  <option value="mercedes">Mercedes</option>
						  <option value="audi">Audi</option>
						</select>
				</td>
				<td class="precio-uni right">5 €</td>
				<td class="unidades">
					 <input type="number" min="0" max="99" placeholder="0">
				</td>
				<td>30,00 €</td>
				<td class="ico-borrar center">
					<img class="icono-borrar" src="../images/borrar.svg" alt="borrar producto" title="borrar producto">
				</td>
			</tr>
			<tr>
				<td >James nombre largo </td>
				<td class="tipo-formato  selector">
						<select class="selector-opciones">
						  <option value="volvo">James</option>
						  <option value="saab" selected="selected">Saab</option>
						  <option value="mercedes">Mercedes</option>
						  <option value="audi">Audi</option>
						</select>
				</td>
				<td>5 €</td>
				<td class="unidades">
					 <input type="number" min="0" max="99" placeholder="0">
				</td>
				<td>30,00 €</td>
				<td class="ico-borrar center">
					<img class="icono-borrar" src="../images/borrar.svg" alt="borrar producto" title="borrar producto">
				</td>
			</tr>
			<tr>
				<td >James nombre </td>
				<td class="tipo-formato  selector">
						<select class="selector-opciones">
						  <option value="volvo">James</option>
						  <option value="saab">Saab</option>
						  <option value="mercedes" selected="selected">Mercedes</option>
						  <option value="audi">Audi</option>
						</select>
				</td>
				<td>5 €</td>
				<td class="unidades">
					 <input type="number" min="0" max="99" placeholder="0">
				</td>
				<td>30,00 €</td>
				<td class="ico-borrar center">
					<img class="icono-borrar" src="../images/borrar.svg" alt="borrar producto" title="borrar producto">
				</td>
			</tr>




		</tbody>
		</table>
	</section>
	<section class="recoger">
		<h5 class="titular-lacesta">Selecciona tu forma de recogida</h5>
	        <ul class="recoger-tienda">
	            <li  >
	                <input class="css-checkbox" type="radio" name="recog" id="recoger-tienda" value="tienda">
	                <label for="recoger-tienda" class="css-label">Recoger en tienda</label>
	            </li> <li  >
	                <input class="css-checkbox" type="radio" name="recog" id="recoger-por-correo" value="correo">
	                <label for="recoger-por-correo" class="css-label">Envío por correo</label>
	        </ul>
			<p >Gastos de envío: 00,00€</p>
	</section>

	<section class="datosenvio">
		<h5 class="titular-lacesta">Datos personales</h5>
			<form action="">
				<ul>
					<li>
						<!-- <label for="nombre">Nombre</label> -->
						<input name="nombre" type="text" placeholder="Nombre *" required>
					</li>
					<li><input type="text" placeholder="Apellidos *" required></li>
					<li><input type="email" placeholder="Teléfono *" required></li>
					<li><input type="tel" placeholder="Mail *" required></li>
					<li>
						<textarea name="" id="" cols="30" rows="10" placeholder="Dirección de envío *"></textarea>
					</li>
					<input class="btn btn-nara btn-pq confirmar" type="submit" value="Confirmar datos">
				</ul>
			</form>

	</section>


	<section class="precios">
			<h5 class="titular-lacesta">Precio final</h5>
		<article>
			<h3 class="preciototal">PRECIO TOTAL: 00,00€</h3>
			<p>IVA incluido</p>
		</article>
	</section>
	<section class="hacerpedidos">
		 <button class="btn hacer">Hacer pedido</button>
		 <button class="btn btn-nara btn-pq btn-seguir">
                <span>Seguir comprando</span>
         </button>
	</section>
</section>




<?php  
	require($dir."footer.php");
?>
