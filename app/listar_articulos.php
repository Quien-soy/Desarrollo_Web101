<?php
require_once('../components/adm_head.php');
require_once('../components/adm_top_menu.php');
require_once('../components/adm_left_menu.php');

require_once('../modelos/articulo.php');

$articulo = new Articulo();
$lista_articulos = $articulo->get_all();

?>
<!-- INICIO CONTENIDO PRINCIPAL -->

<div class="contenedor_principal">
        <div>
            <h1>Listados de articulos</h1>
            <table>
                <tr>
                    <tr>ID</tr>
                    <tr>TITULO DEL ARTICULO</tr>
                    <tr>OPERACIONES</tr>
                </tr>
                <?php foreach($lista_articulos as $item):?>
                <tr>
                    <td><?= $item['art_id']?></td>
                    <td><?= $item['art_titulo']?></td>
                    <td>OPERACIONES</td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>

<!-- FIN CONTENIDO PRINCIPAL -->

<?php
require_once('../components/adm_footer.php');
?>