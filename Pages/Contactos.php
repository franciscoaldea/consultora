<?php
include("../bdd/conexion.php");

if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, email, mensaje) 
            VALUES ('$nombre', '$email', '$mensaje')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Styles.css">
        <!--tipografia titulos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Antonio:wght@100..700&family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
    <!--tipografia texto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Antonio:wght@100..700&family=Gabarito:wght@400..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Chefsito’s Consultoria</title>
</head>

<body>

<header>
    <div class="barra_superior"></div>
    
    <nav class="navbar_xd">
        <div class="nav_contenido">
            
            <div class="logo">
                <img src="../Img/LOGO_peque.png" alt="Logo">
            </div>

            <div class="nav_links">
                <a href="../index.php">Inicio</a>
                <a href="../Pages/Presentacion.php">Presentación</a>
                <a href="../Pages/Servicios.php">Servicios</a>
                <a href="../Pages/Quienes_somos.php">Quienes somos</a>
                <a href="../Pages/Contactos.php" class="nav_boton activo">Contacto</a>
            </div>

        </div>
    </nav>
</header>

<div class="contacto_wrapper">

    <h1 class="contacto_grande">CONTÁCTANOS</h1>

    <p class="contacto_desc"> Si estás interesado en nuestro trabajo, querés realizar una consulta o colaborar con nosotros, podés comunicarte directamente completando el siguiente formulario. </p>

    <div class="contacto_formulario">

        <form method="POST" class="form_contacto">

            <div class="fila_inputs">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <textarea name="mensaje" placeholder="Mensaje" required></textarea>

            <button type="submit" name="enviar" class="btn_contacto">Enviar mensaje</button>

        </form>

    </div>

</div>

<footer>
    <div class="footer">
        <div class="footer_texto" id="footerAuto"></div>
        <img src="../Img/logo escuela.png" class="logo_escuela" alt="Imagen no encontrada">
    </div>
</footer>

<script src="../JS/Footer.js"></script>

</body>
</html>
```