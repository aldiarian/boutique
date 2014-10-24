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
	<h1 class="h2">acceso / registro</h1>
</section>

<section class=" contenedor-big">
	<div class="zona-registro">
		<h2>¿Cuál es tu email?</h2>
		<input type="mail" placeholder="ejemplo@ejemplo.com">
		<h2>¿Ya tienes cuenta con nosotros?</h2>
 		<ul class="recoger">
            <li>
                <input class="css-checkbox" type="radio" name="recog" id="contra-no" value="tienda">
                <label for="contra-no" class="css-label">No, soy cliente nuevo</label>
            </li>
            <li>
                <input class="css-checkbox" type="radio" name="recog" id="contra-si" value="correo">
                <label for="contra-si" class="css-label">Sí, ya tengo contraseña</label>
            </li>
        </ul>
        <input type="text" placeholder="Contraseña">
	</div>

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
