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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ab veritatis placeat, magni vero illum optio vel consequuntur unde voluptates mollitia reiciendis, sunt soluta assumenda distinctio error eveniet id itaque.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, illo, dolorum. Nulla, quaerat ipsa quo repellat, officiis, eos ad impedit voluptas molestiae distinctio, vero assumenda beatae fuga qui aperiam architecto.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quibusdam cum id ipsam illum quidem sequi quasi laudantium deserunt voluptatem in quis, ipsum iste et, dolores, neque consequatur iure pariatur.</p>
        </p>
    </article>
    <div class="elproducto-lafoto">
        <img src="images/foto-te.jpg" alt="foto producto" title="foto producto">
    </div>
    <ul class="caracteristicas">
        <p class="prod-titulo">Características</p>
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
        <p class="prod-titulo">Formatos disponibles</p>
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
            </tbody>
             <tfoot >
                <tr>
                    <td class="iva">
                       *IVA incluido
                    </td>
                </tr>
            </tfoot>
        </table>
    </section>
    <seccion class="botones">
       <div> <button class="btn anadir">Añadir a la cesta</button></div>
       <div>
            <button class="btn btn-nara btn-pq btn-seguir">
                <img class="flechita" src="../images/previous11.svg" alt="">Seguir comprando
            </button>
        </div>
    </seccion>
</section>





<?php  
	require($dir."footer.php");
?>
