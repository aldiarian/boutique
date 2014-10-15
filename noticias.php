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





<script>
    jQuery(document).ready(function($) {
        $(".menu-principal-cabecera a").removeClass('activo');
        $(".noticias").addClass('activo')
    });
</script>


<?php  
	require($dir."footer.php");
?>
