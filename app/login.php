<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <style>
        body{
            background-color: transparent;
            background-image: url('img/Fondo_2.jpg');
            background-repeat: no repeat;
            background-position: top;
            background-size: cover;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        .blog_logo{
            width: 100%;
        }
    </style>
</head>
<body>
    <div> </div>
    <div class="form-login">
        <img class="blog_logo" src="img/A_logo2.png" alt="Logo de mi blog">
        <h2>FORMULARIO DE ACCESO</h2>
        <form action="ruta.php" method="POST">
            <label for="">
                USUARIO
            </label>
            <input name="usr" id="usr" type="text">
            <label for="">
                CONTRASEÑA
            </label>
            <input name="pwd" id="pwd" type="password">
            <br>
            <button type="submit">
                <i class="fas fa-sign-in-alt"></i>
                Ingresar
            </button>
        </form>
    </div>
    <div></div>
</body>
</html>