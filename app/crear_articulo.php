<?php
require_once('../components/adm_head.php');
require_once('../components/adm_top_menu.php');
require_once('../components/adm_left_menu.php');
?>
<!-- INICIO CONTENIDO PRINCIPAL -->

<div class="contenedor_principal">
    <div>
         <h1>Nuevo articulo</h1>
        <form action="<?= APP_URL?>app/proc_articulos.php" method="POST">
        <input type="hidden" name="operacion" value="store">
        <div class="grid_1">
        <div class="for_item">
            <label for="">Titulo articulo</label>
            <input type="text" name="art_titulo" placeholder="Defina el titulo del articulo">
        </div>
        <div class="for_item">
            <label for="">Resumen articulo</label>
            <textarea type="text" name="art_resumen" placeholder="Defina el resumen del articulo"></textarea>
        </div>
        <div class="for_item">
            <label for="">Contenido articulo</label>
            <textarea rows="10" type="text" name="art_detalle" placeholder="Defina el titulo del articulo"></textarea>
        </div>
        <div class="grid_3">
            <div class="form_item">
                <label for="">Categoria</label>
                <select name="cat_id" id="cat_id">
                    <option value="">Seleccione una opcion</option>
                    <option value="1">A</option>
                </select>
            </div>
            <div class="form_item">
                <label for="">Imagen</label>
                <input type="file" name="art_foto">
            </div>
        </div>
        <div class="grid_3">
            <div class="form_item">
                 <button class="btn" type="submit">
                     Guardar datos
                 </button>
            </div>
        </div>
        </div>
         </form>  
    </div>     
</div>

<!-- FIN CONTENIDO PRINCIPAL -->

<?php
require_once('../components/adm_footer.php');
?>