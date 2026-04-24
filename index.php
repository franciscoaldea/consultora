<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Styles.css">
        <!--link d bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Chefsito’s Consultoria</title>
</head>
<body>
    <header>
        <div class="barra_superior"></div>
        
        <nav class="navbar_xd">
            <div class="nav_contenido">
                <div class="logo">
                <img src="#" alt="Logo">
            </div>

            <div class="nav_links">
                <a href="./index.php" class="activo">Inicio</a>
                <a href="./Pages/Presentacion.php">Presentación</a>
                <a href="./Pages/Servicios.php">Servicios</a>
                <a href="./Pages/Quienes_somos.php">Quienes somos</a>
                <a href="./Pages/Contactos.php" class="nav_boton">Contacto</a>
            </div>
        </div>
    </nav>
    </header>
    
    <div class="contenedor_principal">
         <div id="carouselExampleSlidesOnly" class="carousel slide carrusel_67" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./Img/imagen momentanea.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./Img/imagen momentanea.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./Img/imagen momentanea.png" class="d-block w-100">
            </div>
        </div>
    </div>
    
    <div class="info">
        <img src="./Img/imagen momentanea.png" class="logo_grande">

        <p class="presentacion">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt deleniti molestias iure blanditiis vero ea id iste pariatur asperiores quis rerum reiciendis similique, quas aliquam.
        </p>
    </div>

</div>

    <footer>
        <div class="footer">
            <div class="footer_texto" id="footerAuto"></div>
            <img src="./Img/logo escuela.png" class="logo_escuela" alt="Imagen no encontrada">
        </div>
        
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="./JS/Footer.js"></script>
</body>
</html>