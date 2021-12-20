<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>
<!-- INICIO CONTACTO -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <style>
        label {
    display:block;
    margin-top:20px;
    letter-spacing:1px;
}
 
.principal {
    display:block;
    margin:0 auto;
    width:510px;
    color: #666666;
    font-family:Arial;
}
 
form {
    margin:0 auto;
    width:400px;
}
 
input, textarea {
    width:380px;
    height:27px;
    background:#666666;
    border:2px solid #f6f6f6;
    padding:10px;
    margin-top:5px;
    font-size:10px;
    color:#ffffff;
}
 
textarea {
    height:150px;
}
 
#submit {
    width:85px;
    height:35px;
    border:none;
    margin-top:20px;
    cursor:pointer;
}
    </style>
</head>
<body>
<header class="principal">
     <h1>Mi formulario de contacto</h1>;
 </header>
 <section class="principal">
 <form>
       <label for="nombre">Nombre:</label>
       <input id="nombre" name="nombre" placeholder="Nombre completo">
       <label for="email">Email:</label>
       <input id="email" name="email" type="email" placeholder="ejemplo@email.com">
       <label for="mensaje">Mensaje:</label>
       <textarea id="mensaje" name="mensaje" placeholder="Danos tu mensaje"></textarea>
       <input id="submit" name="submit" type="submit" value="Enviar">
</form>
 </section>

</body>
</html>

<!-- FIN CONTACTO -->

<?php
require_once('../components/public_footer.php');
?>