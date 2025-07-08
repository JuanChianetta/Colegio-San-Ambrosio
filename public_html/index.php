<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto San Ambrosio - Educación de Calidad</title>
    <link rel="canonical" href="https://institutosanambrosio.com/">
    <meta name="description" content="Instituto San Ambrosio - Formación de profesionales del futuro con educación de calidad. Conoce nuestros programas educativos." />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="./imagenes/favicon.png" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="./preload.js"></script>
</head>
<body>

<?php include "nav.php"; ?>



<!-- Carrusel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>

  <div class="carousel-inner">
    <!-- Imagen 0 -->
    <div class="carousel-item" style="background-image: url('./imagenes/edt/UFLO.png');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nueva Alianza Académica</h5>
        <p>Ahora contamos con convenio con UFLO para la Licenciatura de Psicología.</p>
      </div>
    </div>

    <!-- Imagen 1 -->
    <div class="carousel-item active" style="background-image: url('./imagenes/edt/edt_img_deco_2.jpg');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Educación de Calidad</h5>
        <p>La importancia de aprender enseñando</p>
      </div>
    </div>

    <!-- Imagen 2 -->
    <div class="carousel-item" style="background-image: url('./imagenes/edt/edt_img_docente_2.jpg');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Valores en Acción</h5>
        <p>Fomentamos la empatía, la colaboración y el respeto en todas nuestras actividades.</p>
      </div>
    </div>

    <!-- Imagen 3 -->
    <div class="carousel-item" style="background-image: url('./imagenes/edt/img_secundaria_2_edt.JPG');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Aprendizaje Activo</h5>
        <p>Potenciamos el aprendizaje mediante experiencias interactivas y significativas.</p>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>


<div class="container text-center pilares">
    <h2>Nos proponemos lograr la formación integral de niños autónomos, <br>reflexivos y comprometidos con su aprendizaje.</h2>
    <p>Nuestra propuesta se basa en 3 pilares:</p>
    
    <div class="row">
        <!-- Pilar 1 -->
        <div class="col-md-4">
            <div class="icono-circulo">
                <img src="icono-pensamiento.png" alt="Pensamiento Efectivo">
            </div>
            <h5>Pensamiento Efectivo</h5>
        </div>
        
        <!-- Pilar 2 -->
        <div class="col-md-4">
            <div class="icono-circulo">
                <img src="icono-inteligencias.png" alt="Inteligencias Múltiples">
            </div>
            <h5>Inteligencias Múltiples</h5>
        </div>
        
        <!-- Pilar 3 -->
        <div class="col-md-4">
            <div class="icono-circulo">
                <img src="icono-comprension.png" alt="Enseñanza para la Comprensión">
            </div>
            <h5>Enseñanza para la Comprensión</h5>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row g-0">
        <!-- Imagen 1 -->
        <div class="col-md-4">
            <a href="./secundaria.php">
                <div class="image-container">
                    <img src="./imagenes/edt/img_secundaria_9_edt.JPG" alt="Imagen 1">
                    <div class="overlay color-green">
                        <h3>Secundaria</h3>
                        <!-- <p>2 a 5 años</p> -->
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Imagen 2 -->
        <div class="col-md-4">
            <a href="./profesorado.php">
                <div class="image-container">
                    <img src="./imagenes/profesorado.jpeg" alt="Imagen 2">
                    <div class="overlay color-orange">
                        <h3>Profesorados</h3>
                        <!-- <p>6 a 11 años</p> -->
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Imagen 3 -->
        <div class="col-md-4">
            <a href="./tecnicatura.php">
                <div class="image-container">
                    <img src="./imagenes/tecnicatura.jpg" alt="Imagen 3">
                    <div class="overlay color-lightblue">
                        <h3>Tecnicaturas</h3>
                        <!-- <p>12 a 14 años</p> -->
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
    <section class="custom-banner-section" style="margin: 30px 0px; background: url('./imagenes/pexels-equipo2.jpg') !important;">
        <div class="custom-overlay">
            <div class="custom-content">
            <h1>¡El deporte es tambien nuestra prioridad!</h1>
            <p>En nuestro colegio, valoramos el deporte como una herramienta fundamental para el desarrollo integral de nuestros estudiantes. Por ello, hemos diseñado un programa educativo que promueve la práctica de diversas disciplinas deportivas, fomentando tanto el crecimiento físico como el desarrollo de valores como el trabajo en equipo, la perseverancia y la superación personal. Además, brindamos un acompañamiento especial a nuestros alumnos federados, asegurándonos de que cuenten con todas las herramientas y el apoyo necesario para alcanzar su máximo potencial.</p>
            </div>
        </div>
    </section>

<div class="container">
    <h2 class="my-4">¿Dónde Encontrarnos?</h2>
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.93222793666!2d-58.42666192444194!3d-34.580581356276454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb584b98b606f%3A0xb34013de3fb4e925!2sInstituto%20San%20Ambrosio!5e0!3m2!1ses!2sar!4v1725484526408!5m2!1ses!2sar"
        width="100%" 
        height="400px" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
</div>

<?php include "footer.php"?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="preload.css">
<div class="content-fade">
        <div class="background-blur"></div>
        <div class="dark-overlay"></div>

        <div class="preloader">
            <div class="logo-top-left">
                <img src="./imagenes/SAN_AMBROSIO_NOMBRE_BLANCO.png" alt="Logotipo">
            </div>
            <div class="center-content">
                <img src="./imagenes/LOGO_BLANCO.png" alt="Isologotipo" class="isologo">
                <h1>Formando <br> los Profesionales <br> del Futuro</h1>
                <button>Más información</button>
            </div>
        </div>
    </div>
    
</div>   
</body>

</html>