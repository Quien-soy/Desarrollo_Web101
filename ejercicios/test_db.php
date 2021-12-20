<?php
require_once('categoria.php');

$cat = new Categoria();

// armar bien el array data
$data['cat_nombre'] = "Peliculas";
$data['cat_a'] = "A";
$data['cat_b'] = "B";

//$cat->store($data);

$categorias = $cat->get_all(); //array asociativo // ararya bidimencional
// foreach($categorias as $item){
//     echo $item['cat_id'];
// }

?>
<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE CATEGORIA</th>
    </tr>
    <?php foreach($categorias as $item):?>
    <tr>
        <td><?php echo $item['cat_id']?></td>
        <td><?= $item['cat_nombre']?></td>
    </tr>
    <?php endforeach;?> 
</table>
 