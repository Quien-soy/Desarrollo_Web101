<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>
<!-- INICIO PRINCIPAL -->
<div class="banner">
        <div>
            <h1>
                web designer
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ea accusantium reiciendis ullam veniam dolorum aliquam ratione blanditiis, laudantium, consequatur aliquid non ipsum architecto? Consequatur magni commodi itaque porro tempora.
            </p>
        </div>
        <div>
            
        </div>
        <div>
           <h1 class="heading-developer">
                &lt;web developer&gt;
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ea accusantium reiciendis ullam veniam dolorum aliquam ratione blanditiis, laudantium, consequatur aliquid non ipsum architecto? Consequatur magni commodi itaque porro tempora.
            </p> 
        </div>
    </div>
    <div class="contenedor_proyectos">
        <h1>
            <i class="fas fa-hammer"></i>
            Mis ultimos trabajos
        </h1>
        <div class="ultimos_trabajos">
            <div class="work_item">
                <img src="<?=APP_URL?>assets/img/trabajo.jpg" alt="texto alternativo">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque earum alias, molestias corrupti cum ullam doloremque officiis aspernatur nobis consectetur numquam vitae facere dignissimos, optio quas provident. Voluptas, labore delectus!
                </p>
                <a class="btn btn_oscuro" href="#">
                    <i class="fas fa-eye"></i>
                    ver proyecto
                </a>
            </div>
            <div class="work_item">
                <img src="<?=APP_URL?>assets/img/trabajo.jpg" alt="texto alternativo">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque earum alias, molestias corrupti cum ullam doloremque officiis aspernatur nobis consectetur numquam vitae facere dignissimos, optio quas provident. Voluptas, labore delectus!
                </p>
                <a class="btn btn_oscuro" href="#">
                    <i class="fas fa-eye"></i>
                    ver proyecto
                </a>
            </div>
            <div class="work_item">
                <img src="<?=APP_URL?>assets/img/trabajo.jpg" alt="texto alternativo">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque earum alias, molestias corrupti cum ullam doloremque officiis aspernatur nobis consectetur numquam vitae facere dignissimos, optio quas provident. Voluptas, labore delectus!
                </p>
                <a class="btn btn_oscuro" href="#">
                    <i class="fas fa-eye"></i>
                    ver proyecto
                </a>
            </div>
        </div>
    </div>
<!-- FIN PRINCIPAL -->

<?php
require_once('../components/public_footer.php');
?>