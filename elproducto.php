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
    <div class="elproducto-lafoto">
        <img src="images/foto-te.jpg" alt="foto producto" title="foto producto">
    </div>
    <ul class="caracteristicas">
        <li class="canti">
            <div class="carac-icon">
                <img src="../images/canti.png" alt="">
            </div>
            Cantidad de té por taza: <span> 100 gr</span>
        </li>
        <li class="tempe">
            <div class="carac-icon">
                <img src="../images/tempe.png" alt="">
            </div>
            Temperatura del agua: <span> 00 °</span>
        </li>
        <li class="tiempo">
            <div class="carac-icon">
                <img src="../images/tiempo.png" alt="">
            </div>
            Tiempo de infusión: <span> 10 min</span>
        </li>
        <li class="cafeina">
            <div class="carac-icon">
                <img src="../images/cafeina-taza.png" alt="">
            </div>
            Cafeína: <img class="cafeina-grados" src="images/cafeina.png" alt="">
        </li>
    </ul>
    <section class="tabla-precios">
        <table class="rwd-table">
            <tbody>
              <tr>
                <th>Tamaño</th>
                <th>Dto%</th>
                <th>Precio*</th>
                <th>Unidades</th>
              </tr>
              <tr>
                <td><span>Tamaño</span>100gr</td>
                <td><span>Dto%</span></td>
                <td><span>Precio*</span> 8,50 €</td>
                <td class="unidades"><span>Unidades</span>
                    <input type="number" min="0" max="99" placeholder="0">
                </td>
              </tr>
              <tr>
                <td><span>Tamaño</span>250gr</td>
                <td><span>Dto%</span>10%</td>
                <td><span>Precio*</span> 8,50 €</td>
                <td class="unidades"><span>Unidades</span>
                    <input type="number" min="0" max="99" placeholder="0">
                </td>
              </tr>
              <tr class="ultimafila">
                <td><span>Tamaño</span>300gr</td>
                <td><span>Dto%</span>20%</td>
                <td><span>Precio*</span> 8,50 €</td>
                <td class="unidades"><span>Unidades</span>
                    <input type="number" min="0" max="99" placeholder="0">
                </td>
              </tr>
              <!-- <span class="iva">* IVA incluido</span> -->
            </tbody>

        </table>
    </section>
</section>


<seccion class="botones">
    <button class="btn anadir">
        Añadir a la cesta
    </button>
<!--     <button class="btn btn-pq">
        Realizar pedido
    </button> -->
    <button class="btn btn-nara btn-pq">
        Seguir comprando
    </button>
</seccion>



<?php  
	require($dir."footer.php");
?>
