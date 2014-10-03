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
        <ul class="productos">
            <li><a href="#tab-1">Tés</a></li>
            <li><a href="#tab-2">Accesorios</a></li>
            <li><a href="#tab-3">Confitería</a></li>
        </ul>

        <div id="tab-1">
            <h5 class="descripcion-producto">Selecciona los tipos de Tés que quieras que te mostremos</h5>
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
            <h5 class="descripcion-producto">Selecciona el origen</h5>
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
        </div>
        <div id="tab-2">
            <p>Quisque sodales sodales lacus pharetra bibendum. Etiam commodo non velit ac rhoncus. Mauris euismod purus sem, ac adipiscing quam laoreet et. Praesent vulputate ornare sem vel scelerisque. Ut dictum augue non erat lacinia, sed lobortis elit gravida. Proin ante massa, ornare accumsan ultricies et, posuere sit amet magna. Praesent dignissim, enim sed malesuada luctus, arcu sapien sodales sapien, ut placerat eros nunc vel est. Donec tristique mi turpis, et sodales nibh gravida eu. Etiam odio risus, porttitor non lacus id, rhoncus tempus tortor. Curabitur tincidunt molestie turpis, ut luctus nibh sollicitudin vel. Sed vel luctus nisi, at mattis metus. Aenean ultricies dolor est, a congue ante dapibus varius. Nulla at auctor nunc. Curabitur accumsan feugiat felis ut pretium. Praesent semper semper nisi, eu cursus augue.</p>
        </div>
        <div id="tab-3">
            <p>Mauris facilisis elit ut sem eleifend accumsan molestie sit amet dolor. Pellentesque dapibus arcu eu lorem laoreet, vitae cursus metus mattis. Nullam eget porta enim, eu rutrum magna. Duis quis tincidunt sem, sit amet faucibus magna. Integer commodo, turpis consequat fermentum egestas, leo odio posuere dui, elementum placerat eros erat id augue. Nullam at eros eget urna vestibulum malesuada vitae eu mauris. Aliquam interdum rhoncus velit, quis scelerisque leo viverra non. Suspendisse id feugiat dui. Nulla in aliquet leo. Proin vel magna sed est gravida rhoncus. Mauris lobortis condimentum nibh, vitae bibendum tortor vehicula ac. Curabitur posuere arcu eros.</p>
        </div>
</div> 


<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').responsiveTabs({
            rotate: false,
            startCollapsed: 'false',
            collapsible: 'accordion',
            setHash: true,
            disabled: [3,4],
            activate: function(e, tab) {
                $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
            },
            activateState: function(e, state) {
                //console.log(state);
                $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
            }
        });
    });
</script>

<?php  
	require($dir."footer.php");
?>
