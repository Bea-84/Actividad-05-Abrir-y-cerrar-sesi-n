<?php
session_start();

if (isset($_POST["nombre"])) {
    $_SESSION["n"] = $_POST['nombre'];
}
if (isset($_GET["logout"])) {
    session_destroy(); // Cierra la sesión al hacer clic en el enlace de cerrar sesión.
    header("Refresh:1;url= ."); // Tiempo de refresh y Redirige de nuevo a la misma página para evitar que la URL siga teniendo ?logout.
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion y cerrar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<?php if (isset($_SESSION["n"])) { ?>

    <header class="container p-3">
    <nav class="clearfix">
    <a href="index.php?logout">
    <button class="float-end btn-secondary">
        Cerrar sesión</button>
    </a>   
    </nav>   
    <hr>  

    <h1 class="p-4 text-center">Bienvenido <?= $_SESSION["n"] ?></h1>

<?php } else { ?>

    <form method="post" action=".">
        <p>Iniciar sesión:</p>
        <input class="form-control" type="text" name="nombre" placeholder="usuario"> 
        <hr>
        <button class="float-end btn-secondary">
        Iniciar sesión</button>
    </form>

<?php } ?>



</body>
</html>