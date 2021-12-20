<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
require_once('../modelos/proyectos.php');
?>
 <!-- INICIO PORTAFOLIO -->
$proyecto = new Proyecto();
$x = $proyecto->get_all();
foreach($x as $item){
    tabla 
}
    <div class="item_portafolio cols_2_1" >
        <div>
            <img class="imagen_portafolio" src="<?=APP_URL?>assets/img/port.png" alt="Titulo imagen">
        </div>
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo del proyecto</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia sint eveniet distinctio beatae doloremque asperiores, laborum, accusamus tempora placeat cumque, quisquam debitis aspernatur. Facere, repellendus? Sint nostrum repellat molestias?
                </p>
            </div>
        </div>
    </div>
    <div class="item_portafolio cols_1_2 bg_negro" >
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo del proyecto</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia sint eveniet distinctio beatae doloremque asperiores, laborum, accusamus tempora placeat cumque, quisquam debitis aspernatur. Facere, repellendus? Sint nostrum repellat molestias?
                </p>
            </div>
        </div>
        <div>
            <img class="imagen_portafolio" src="<?=APP_URL?>assets/img/port.png" alt="Titulo de imagen">
        </div>
    </div>
    <div class="item_portafolio cols_2_1" >
        <div>
            <img class="imagen_portafolio" src="<?=APP_URL?>assets/img/port.png" alt="Titulo de imagen">
        </div>
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo de parrafo</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia sint eveniet distinctio beatae doloremque asperiores, laborum, accusamus tempora placeat cumque, quisquam debitis aspernatur. Facere, repellendus? Sint nostrum repellat molestias?
                </p>
            </div>
        </div>
    </div>

<!-- FIN PORTAFOLIO -->

<?php
require_once('../components/public_footer.php');
?>