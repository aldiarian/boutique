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

<section class="titular">
	<h1 class="h2">nuestros productos</h1>
	<h2>Selecciona el producto que quieras ver</h2>
</section>
<div id="horizontalTab">
    <ul class="contenedor-2">
        <li><a href="#tab-1">Tés</a></li>
        <li><a href="#tab-2">Accesorios</a></li>
        <li><a href="#tab-3">Confitería</a></li>
    </ul>

    <div id="tab-1">
        <h5 class="descripcion-producto"> <span>1º</span>Selecciona los tipos de Tés que quieras ver</h5>
        <ul class="items-productos">
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="verde" value="verde">
                <label for="verde" class="css-label">verde</label>
            </li> <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="rojo" value="rojo">
                <label for="rojo" class="css-label">rojo</label>
            </li> <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="blanco" value="blanco">
                <label for="blanco" class="css-label">blanco</label>
            </li> <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="infusion-fria" value="infusion-fria">
                <label for="infusion-fria" class="css-label">infusión fria</label>
            </li> <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="olong" value="olong">
                <label for="olong" class="css-label">olong</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="roibos" value="roibos">
                <label for="roibos" class="css-label">roibos</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="hierbas" value="hierbas">
                <label for="hierbas" class="css-label">hierbas</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="todos" value="todos">
                <label for="todos" class="css-label">todos</label>
            </li>
        </ul>
        <h5 class="descripcion-producto"><span>2º</span>Selecciona el origen</h5>
        <ul class="items-origen">
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="origen 01" value="origen 01">
                <label for="origen 01" class="css-label">origen 01</label>
            </li> 
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="origen 02" value="origen 02">
                <label for="origen 02" class="css-label">origen 02</label>
            </li> 
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="origen 03" value="origen 03">
                <label for="origen 03" class="css-label">origen 03</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="todos-origen" value="todos-origen">
                <label for="todos-origen" class="css-label">todos</label>
            </li>
        </ul>
         <h5 class="descripcion-producto"><span>3º</span>Mostrar los seleccionados</h5>
         <button class="btn">Mostrar</button>
    </div>
    <div id="tab-2">
        <h5 class="descripcion-producto"> <span>1º</span>Selecciona los productos que quieras ver
        </h5>
        <ul class="items-productos">
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="cucharas" value="cucharas">
                <label for="cucharas" class="css-label">cucharas</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="tetera" value="tetera">
                <label for="tetera" class="css-label">tetera</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="taza" value="taza">
                <label for="taza" class="css-label">taza</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="juego tazas" value="juego tazas">
                <label for="juego tazas" class="css-label">juego tazas</label>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="filtro" value="filtro">
                <label for="filtro" class="css-label">filtro</label>
            </li>
            </li>
            <li class="item" >
                <input class="css-checkbox" type="checkbox" name="tipo_te" id="todos_prod" value="todos_prod">
                <label for="todos_prod" class="css-label">todos</label>
            </li>
    
        </ul>
         <h5 class="descripcion-producto"><span>2º</span>Mostrar los seleccionados</h5>
         <button class="btn">Mostrar</button>
    </div>

    <div id="tab-3">
        <p>Mauris facilisis elit ut sem eleifend accumsan molestie sit amet dolor. Pellentesque dapibus arcu eu lorem laoreet, vitae cursus metus mattis. Nullam eget porta enim, eu rutrum magna. Duis quis tincidunt sem, sit amet faucibus magna. Integer commodo, turpis consequat fermentum egestas, leo odio posuere dui, elementum placerat eros erat id augue. Nullam at eros eget urna vestibulum malesuada vitae eu mauris. Aliquam interdum rhoncus velit, quis scelerisque leo viverra non. Suspendisse id feugiat dui. Nulla in aliquet leo. Proin vel magna sed est gravida rhoncus. Mauris lobortis condimentum nibh, vitae bibendum tortor vehicula ac. Curabitur posuere arcu eros.</p>
    </div>
</div> 

<section class="mostrar_productos contenedor-big">
    <article class="titular">
        <h2>Ahora le estamos mostrando:</h2>
        <p>TÉS</p>
        <p>VERDE - BLANCO - OLONG</p>
        <p>ORIGEN A - ORIGEN B</p>
    </article>

    <section class="productos_zona">
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del producto Lorem ipsum dolor</p>
            </a>
        </article>
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del producto </p>
            </a>
        </article>
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del </p>
            </a>
        </article>
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del producto </p>
            </a>
        </article>
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del producto Lorem </p>
            </a>
        </article>
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del </p>
            </a>
        </article>
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del producto </p>
            </a>
        </article>
        <article class="prod">
            <a href="elproducto.php">
                <img src="images/foto-te.jpg" alt="">
                    <p class="prod_text">Nombre del producto Lorem </p>
            </a>
        </article>


    </section>
</section>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".menu-principal-cabecera a").removeClass('activo');
        $(".productos").addClass('activo')
    });
</script>


<?php  
	require($dir."footer.php");
?>
